<?php

namespace App\Http\Controllers;

use App\Models\Reabos;
use Illuminate\Http\Request;

class ReabosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reabos.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reabos  $reabos
     * @return \Illuminate\Http\Response
     */
    public function show(Reabos $reabos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reabos  $reabos
     * @return \Illuminate\Http\Response
     */
    public function edit(Reabos $reabos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reabos  $reabos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reabos $reabos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reabos  $reabos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reabos $reabos)
    {
        //
    }
}
