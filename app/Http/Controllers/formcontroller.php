<?php

namespace App\Http\Controllers;

use App\Models\stagiaire;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
class formcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        User::create([
            'name'=>'taha',
            'email'=>'taharaouf1123@gmail.com',
            'password'=>Hash::make('0000')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom' => 'required|string|max:50',
            'Age'=>'integer|between:18,30',
            'date'=>'required|',
            'cv'=>'required|file|max:600|mimetypes:application/pdf',
            'email' => 'required|email:strict',
            'ville'=> Rule::in(['casa','rabat','tanger']),'required',
            'mdp_confirmation'=>'confirmed',
        ],
        [
        'ville.required'=>'Il faut chosir entre 3 ville (casa/rabat/tanger)',
        'mdp_confirmation.confirmed'=>' Votre mot de passe n’est pas le même!!!',
        'email'=>'le champs est obligatoire',
        
        ]
       
    );
        $stagiaire=new stagiaire();
        $stagiaire->prenom=$request->input("prenom");
        $stagiaire->nom=$request->input("nom");
        $stagiaire->age=$request->input("age");
        $stagiaire->ville=$request->input("ville");
        $stagiaire->date=$request->input("date");
        $stagiaire->email=$request->input("email");
        $stagiaire->password=$request->input("mdp");
        $stagiaire->save();
        return view('validationview')->with('p', $request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
