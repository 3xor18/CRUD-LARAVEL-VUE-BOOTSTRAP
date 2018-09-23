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

        $ideas = idea::get();

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

        $data = Request()->validate([
            'descripcion' => 'required',
        ], [
            'descripcion.required' => 'en nombre es obligatorio',
        ]);
        $date = '2018-09-22 21:15:36';

        idea::Create([
            'descripcion' => $data['descripcion'],
            'fecha'       => $date,
        ]);
        return;
    }

}
