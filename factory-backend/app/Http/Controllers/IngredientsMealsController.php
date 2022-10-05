<?php

namespace App\Http\Controllers;

use App\Models\ingredients_meals;
use App\Http\Requests\Storeingredients_mealsRequest;
use App\Http\Requests\Updateingredients_mealsRequest;

class IngredientsMealsController extends Controller
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
     * @param  \App\Http\Requests\Storeingredients_mealsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeingredients_mealsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ingredients_meals  $ingredients_meals
     * @return \Illuminate\Http\Response
     */
    public function show(ingredients_meals $ingredients_meals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ingredients_meals  $ingredients_meals
     * @return \Illuminate\Http\Response
     */
    public function edit(ingredients_meals $ingredients_meals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateingredients_mealsRequest  $request
     * @param  \App\Models\ingredients_meals  $ingredients_meals
     * @return \Illuminate\Http\Response
     */
    public function update(Updateingredients_mealsRequest $request, ingredients_meals $ingredients_meals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ingredients_meals  $ingredients_meals
     * @return \Illuminate\Http\Response
     */
    public function destroy(ingredients_meals $ingredients_meals)
    {
        //
    }
}
