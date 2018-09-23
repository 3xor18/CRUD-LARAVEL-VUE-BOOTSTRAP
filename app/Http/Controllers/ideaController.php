<?php

namespace App\Http\Controllers;

use App\idea;
use Illuminate\Http\Request;

class ideaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIdea()
    {

        $ideas = idea::orderby('id', 'DES')->get();

        return $ideas;
    }

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
    public function store(Request $request)
    {
        //validamos que nos pasen informacion de welcome del input descripcion
        $this->validate($request, ['descripcion' => 'required']);
        idea::create($request->all());
        return;
    }

}
