<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\About;
use Redirect;
use Input;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        return view('about.index')->with('about',$about);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, About::$rules);
        $input = array_except(Input::all(),'_method');
        $about = About::create($input);

        return Redirect::route('about.index')->with('message','Descripcion agregada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('about.show',array('about'=>About::whereId($id)->first() ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('about.edit',array('about'=>About::whereId($id)->first() ));
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
        $this->validate($request,About::$rules);

        $input = array_except(Input::all(),'_method');

        $about = About::whereId($id)->first();

        if($about){
            $about->update($input);

            return Redirect::route('about.index')->with('message','Descripcion actualizada');
        }
        else{
            return Redirect::route('about.index')->with('message','Error. Descripcion no encontrada');
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
        if($about = About::whereId($id)->first()->delete())
                return Redirect::action('AboutController@index')->with('message', 'Descripcion eliminada.');
            else{
                Session::flash('message' , 'Algo salio mal');
                Session::flash('classMessage', 'danger');
                return Redirect::action('AboutController@index');
            }
    }
}
