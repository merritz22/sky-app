<?php

namespace App\Http\Controllers;

use App\Models\Reabos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ReabosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reabos = Reabos::all();
        return view('reabos.index',["reabos"=>$reabos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reabos.create',['id'=>array_keys($_REQUEST)[0]]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reabos = Reabos::all()->where('client_id',$request->client_id)->where('relancer',false);
        foreach ($reabos as $key => $reabo) {
            $reabo->relancer = true;
            $reabo->save();
        }
        Reabos::create([
            'client_id'=>$request->client_id,
            'formule'=>$request->formule,
            'date_deb'=>$request->date_deb,
            'date_fin'=>$request->date_fin,
            'relancer'=>false
        ]);
        
        return $this->index();
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
