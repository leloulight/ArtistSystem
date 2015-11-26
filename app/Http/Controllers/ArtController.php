<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Art;
use Redirect;
use Input;


class ArtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $art = Art::all();
        return view('art.index')->with('art',$art);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('art.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $this->validate($request, Art::$rules);
        $input = Input::all();
        Art::create($input);
        return Redirect::route('art.index')->with('message','Obra agregada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $art = Art::all();
        
        return view('art.show', array( 'art' => Art::whereId($id)->first() ));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        return view('art.edit', array( 'art' => Art::whereId($id)->first() ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request, Art::$rules);
    
        $input = array_except(Input::all(),'_method');
        
        $art = Art::whereId($id)->first();
        
        if($art){
            $art->update($input);
            return Redirect::route('art.index')->with('message','Obra subida correctamente');
        }
        else{
            return Redirect::route('art.index')->with('message','Error. Obra no encontrada');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function activate($id)
    {
        
        $art = Art::whereId($id)->first();
        
        if($art){

            if($art->active == 0)
                $art->active = 1;
            else
                $art->active = 0;
            
            $art->save();
            
            
            return Redirect::route('art.index')->with('message','Obra actualizada');
        }
        else{
            return Redirect::route('art.index')->with('message','Error. Obra no encontrada');
        }

    }
}
