<?php

namespace App\Http\Controllers;

use App\work;
use App\categoria;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $works = work::all();

      return view('works.list', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {

        $categorie = categoria::where('macro','=',1)->orderBy('nome')->get();
        $countries = \Countries::getList('en', 'php');
        //$categorie = categoria::where('macro =1')->get();
        $res = array();

        foreach($categorie as $cat) {
          $res[$cat->nome] = array();
          $figli = categoria::where('parent', '=',$cat->id)->get();
          foreach($figli as $figlio) {
            array_push($res[$cat->nome], $figlio->nome );
          }
        }
        return view('works.create', compact('res','user', 'countries'));
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
     * @param  \App\work  $work
     * @return \Illuminate\Http\Response
     */
    public function show(work $work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit(work $work)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\work  $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, work $work)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(work $work)
    {
        //
    }
}
