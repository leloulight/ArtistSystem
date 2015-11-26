<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Contact;
use Redirect;
use Input;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all();
        return view('contact.index')->with('contact',$contact);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,Contact::$rules);
        $input = Input::all();
        Contact::create($input);
        return Redirect::route('contact.index')->with('message','Correo creado correctamente');        
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
        return view('contact.edit',array('contact' => Contact::whereId($id)->first() ));
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
        $this->validate($request,Contact::$rules);

        $input = array_except(Input::all(),'_method');

        $contact = Contact::whereId($id)->first();

        if($contact){
            $contact->update($input);
            return Redirect::route('contact.index')->with('message','Correo Actulizado');
        }

        else{
            return Redirect::route('contact.index')->with('message','Error al actulizar');
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
        
        $contact = Contact::whereId($id)->first();
        
        if($contact){

            if($contact->active == 0)
                $contact->active = 1;
            else
                $contact->active = 0;
            
            $contact->save();
            
            
            return Redirect::route('contact.index')->with('message','Correo actualizado');
        }
        else{
            return Redirect::route('contact.index')->with('message','Error. Correo no encontrado');
        }

    }
}
