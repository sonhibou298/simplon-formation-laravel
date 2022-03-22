<?php

namespace App\Http\Controllers;

use App\Models\SousCategorie;
use App\Http\Requests\StoreSousCategorieRequest;
use App\Http\Requests\UpdateSousCategorieRequest;

class SousCategorieController extends Controller
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
     * @param  \App\Http\Requests\StoreSousCategorieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSousCategorieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SousCategorie  $sousCategorie
     * @return \Illuminate\Http\Response
     */
    public function show(SousCategorie $sousCategorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SousCategorie  $sousCategorie
     * @return \Illuminate\Http\Response
     */
    public function edit(SousCategorie $sousCategorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSousCategorieRequest  $request
     * @param  \App\Models\SousCategorie  $sousCategorie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSousCategorieRequest $request, SousCategorie $sousCategorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SousCategorie  $sousCategorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(SousCategorie $sousCategorie)
    {
        //
    }
}
