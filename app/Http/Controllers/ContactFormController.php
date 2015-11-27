<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contactform;

class ContactFormController extends Controller
{
   /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            return view('contactform/index', ['contacts' => Contactform::all()]);
        }
    
        public function show($id)
        {
            return view('contactform/show', ['contact' => Contactform::whereId($id)->first()]);
        }
        
        public function destroy($id){
            
            if($contact = Contactform::whereId($id)->first()->delete())
                return Redirect::action('ContactFormController@index')->with('message', 'Mensaje eliminado.');
            else{
                Session::flash('message' , 'Algo salio mal');
                Session::flash('classMessage', 'danger');
                return Redirect::action('ContactController@index');
            }
            
        }
}
