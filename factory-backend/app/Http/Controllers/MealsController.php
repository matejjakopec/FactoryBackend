<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Meals;
use App\Http\Requests\StoreMealsRequest;
use App\Http\Requests\UpdateMealsRequest;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class MealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $perPage = $request->get('perPage') ? $request->get('perPage') : 10;
        $page = $request->get('page') ? $request->get('page') : 1;
        $lang = $request->get('lang') ? $request->get('lang') : 'hr';
        $with = $request->get('with') ? $request->get('with') : 'ingredients,category,tags';
        $category = $request->get('category') ? $request->get('category') : null;
        $tags = $request->get('tags') ? $request->get('tags') : null;
        $diffTime = $request->get('diff_time') ? $request->get('diff_time') : null;

        $error = $this->checkInput($perPage, $page, $lang, $with, $category, $tags, $diffTime);

        if($error){
            return $this->respondWithFailure($error['message'], $error['code']);
        }

        $data = null;

        if($category){
            $data = Meals::query();
            $data = $this->getWithCategory($data, $category);
            $data = $data->get();
        }

        if($tags){
            $flag = true;
            foreach (explode(',', $tags) as $tag){
                $newData = Meals::whereHas('tags', function($q) use($tag) {
                    $q->where('id', '=', $tag);
                })->get();
                if($flag && !$data){
                    $flag = false;
                    $data = $newData;
                }
                $data = $data->intersect($newData);
            }
        }

        if($diffTime){
            if(!$data){
                $data = Meals::query()->get();
            }
            $data = $this->getWithStatus($data, $diffTime);
        }

        $options = [
            'path' => $request->url(),
            'query' => $request->query(),
            'fragment' => '',
            'pageName' => 'page'
        ];

        if(!$data){
            $data = Meals::query()->get();
        }
        $data = $this->paginate($data, $perPage, $page, $options);

        $mapper = new DataMapper($lang);
        return $this->respondWithSuccess($mapper->mapMeals($data, $with, $request->fullUrl()));
    }

    public function checkInput($perPage, $page, $lang, $with, $category, $tags, $diffTime){
        if(!$this->isPositiveWholeNumber($perPage)){
            return [
                'message' => 'perPage parameter isn\'t valid',
                'code' => '422'
            ];
        }

        if(!$this->isPositiveWholeNumber($page)){
            return [
                'message' => 'page parameter isn\'t valid',
                'code' => '422'
            ];
        }

        if(!$this->isPositiveWholeNumber($category)){
            if($category && !in_array($category, ['NULL', '!NULL'])){
                return [
                    'message' => 'category parameter isn\'t valid',
                    'code' => '422'
                ];
            }
        }

        if(!in_array($lang, ['en', 'hr', 'de'])){
            return [
                'message' => 'lang parameter isn\'t valid',
                'code' => '422'
            ];
        }

        foreach (explode(',', $with) as $w){
            if(!in_array($w, ['ingredients', 'category', 'tags'])){
                return [
                    'message' => 'with parameter isn\'t valid',
                    'code' => '422'
                ];
            }
        }

        foreach (explode(',',$tags) as $tag){
            if(!$this->isPositiveWholeNumber($tag)){
                if($tag)
                    return [
                        'message' => 'tags parameter isn\'t valid',
                        'code' => '422'
                    ];
            }
        }

        if(!$this->isPositiveWholeNumber($diffTime)){
            if($diffTime)
                return [
                    'message' => 'diff_time parameter isn\'t valid',
                    'code' => '422'
                ];
        }
        return null;
    }




    private function getWithCategory($data, $category){
        if($category == 'NULL'){
            return $data->whereNull('categories');
        }
        if($category == '!NULL'){
            return $data->whereNotNull('categories');
        }
        return $data->where('categories',$category);
    }

    private function getWithStatus($data, $diffTime){
        $newData = collect();
        foreach ($data as $d){
            $created = strtotime($d->created_at);
            $updated = strtotime($d->updated_at);
            $deleted = strtotime($d->deleted_at);
            if($created > $diffTime && $created == max($created, $updated, $deleted)){
                $newData->push($d);
            }
            if($updated > $diffTime && $updated == max($created, $updated, $deleted)){
                $d->status = 'modified';
                $newData->push($d);
            }
            if($deleted > $diffTime && $deleted == max($created, $updated, $deleted)){
                $d->status = 'deleted';
                $newData->push($d);
            }
        }
        return $newData;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMealsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMealsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meals  $meals
     * @return \Illuminate\Http\Response
     */
    public function show(Meals $meals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meals  $meals
     * @return \Illuminate\Http\Response
     */
    public function edit(Meals $meals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMealsRequest  $request
     * @param  \App\Models\Meals  $meals
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMealsRequest $request, Meals $meals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meals  $meals
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meals $meals)
    {
        //
    }

}
