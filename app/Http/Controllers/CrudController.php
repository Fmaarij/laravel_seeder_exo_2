<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function homePage(){
        $company = Utilisateur::all();
        return view('home',compact('company'));
    }
}
