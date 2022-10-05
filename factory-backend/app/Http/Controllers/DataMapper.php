<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ingredients;
use App\Models\Meals;
use App\Models\Tags;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DataMapper
{
    private $lang;

    public function __construct($lang)
    {
        $this->lang = $lang;
    }

    public function mapIngredients($ingredients){
        $data = [];
        if($ingredients){
            foreach ($ingredients as $ingredient){
                $data[] = [
                    'id' => $ingredient->id,
                    'title' => $ingredient->title($this->lang),
                    'slug' => $ingredient->slug];
            }
        }
        return $data;
    }

    public function mapCategory($categoryId){
        $category = Category::query()->find($categoryId);
        if($category){
            $data = [
                'id' => $category->id,
                'title' => $category->title($this->lang),
                'slug' => $category->slug];
        }else{
            $data = [];
        }
        return $data;
    }

    public function mapTags($tags){
        $data = [];
        if($tags){
            foreach ($tags as $tag){
                $data[] = [
                    'id' => $tag->id,
                    'title' => $tag->title($this->lang),
                    'slug' => $tag->slug];
            }
        }
        return $data;
    }

    public function mapMeals($meals, $with = 'ingredients,category,tags', $fullUrl){
        $data = [];
        foreach ($meals as $meal){
            $column = [
                'id' => $meal->id,
                'title' => $meal->title($this->lang),
                'description' => $meal->title($this->lang),
                'last_page' => $meal->title($this->lang),
                'status' => $meal->status];
            if(str_contains($with,'category')){
               $column['category'] = $this->mapCategory($meal->categories);
            }
            if(str_contains($with,'tags')){
               $column['tags'] = $this->mapTags($meal->tags);
            }
            if(str_contains($with,'ingredients')){
               $column['ingredients'] = $this->mapIngredients($meal->ingredients);
            }
            $data[] = $column;
        }
        return [
            'meta' => $this->mapMetaData($meals),
            'data' => $data,
            'links' => $this->mapLinks($meals, $fullUrl)
        ];
    }

    public function mapMetaData($data){
        return [
            "currentPage" => $data->currentPage(),
             "totalItems" => $data->total(),
            "itemsPerPage" => $data->perPage(),
            "totalPages" => $data->lastPage()
        ];
    }

    public function mapLinks($data, $fullUrl){
        return [
            "prev" => $data->previousPageUrl(),
            "next" => $data->nextPageUrl(),
            "self" => $fullUrl
        ];
    }
}
