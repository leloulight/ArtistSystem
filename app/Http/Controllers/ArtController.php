<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Art;

class ArtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('art.index');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        
        $art = Art::whereId($id)->first;
        
        if($art){
            $art->update($input);
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
    
     public function activate($id, $active){
        
        $art = Art::whereId($id)->first;
        
        if($art && ($active == 0 || $active == 1) ){

            if($active == 0)
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
