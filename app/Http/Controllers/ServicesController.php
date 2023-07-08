<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
class ServicesController extends Controller
{
    public function index($id){
    //  $service
       $details = Services::where('slug',$id)->first();
       return view('services', ['details'=>$details]);
    }
}
