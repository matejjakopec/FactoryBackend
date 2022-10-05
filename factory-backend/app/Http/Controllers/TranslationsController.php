<?php

namespace App\Http\Controllers;

use App\Models\Translations;
use App\Http\Requests\StoreTranslationsRequest;
use App\Http\Requests\UpdateTranslationsRequest;

class TranslationsController extends Controller
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
     * @param  \App\Http\Requests\StoreTranslationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTranslationsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Translations  $translations
     * @return \Illuminate\Http\Response
     */
    public function show(Translations $translations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Translations  $translations
     * @return \Illuminate\Http\Response
     */
    public function edit(Translations $translations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTranslationsRequest  $request
     * @param  \App\Models\Translations  $translations
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTranslationsRequest $request, Translations $translations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Translations  $translations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Translations $translations)
    {
        //
    }
}
