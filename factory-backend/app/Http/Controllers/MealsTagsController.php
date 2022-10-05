<?php

namespace App\Http\Controllers;

use App\Models\meals_tags;
use App\Http\Requests\Storemeals_tagsRequest;
use App\Http\Requests\Updatemeals_tagsRequest;

class MealsTagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\Storemeals_tagsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storemeals_tagsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\meals_tags  $meals_tags
     * @return \Illuminate\Http\Response
     */
    public function show(meals_tags $meals_tags)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\meals_tags  $meals_tags
     * @return \Illuminate\Http\Response
     */
    public function edit(meals_tags $meals_tags)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatemeals_tagsRequest  $request
     * @param  \App\Models\meals_tags  $meals_tags
     * @return \Illuminate\Http\Response
     */
    public function update(Updatemeals_tagsRequest $request, meals_tags $meals_tags)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\meals_tags  $meals_tags
     * @return \Illuminate\Http\Response
     */
    public function destroy(meals_tags $meals_tags)
    {
        //
    }
}
