<?php 
// app/Http/Controllers/FormController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class Inscriptioncontroller extends Controller
{


    public function getData(Request $r)
    {
        $r->validate([
            'nom' => 'required|string|max:50',
            'Age'=>'integer|between:18,30',
            'date'=>'required|',
            'cv'=>'required|file|max:600|mimetypes:application/pdf',
            'email' => 'required|before:2023-11-25',
            'ville'=>Rule::in(['casa','rabat','tanger']),
            //'mdp_confirmation'=>'confirmed',
        ],
       
    );
        return view('inscriptionview')->with('t', $r);
    }
    public function putData(Request $p)
    {
        $p->validate([
            'nom' => 'required|string|max:50',
            'Age'=>'integer|between:18,30',
            'date'=>'required|',
            'cv'=>'required|file|max:600|mimetypes:application/pdf',
            'email' => 'required|before:2023-11-25',
            'ville'=>Rule::in(['casa','rabat','tanger']),
            //'mdp_confirmation'=>'confirmed',
        ],
       
    );
        return view('validationview')->with('p', $p);
    }
    
}
?>
