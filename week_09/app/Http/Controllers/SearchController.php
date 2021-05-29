<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Trainers;
class SearchController extends Controller
{
    public function search(Request $request) {
        $name = $request->get('data');
        $obj = new Trainers();
        $trainers = $obj->search($name);
        return view('search', ['trainers' => $trainers]);
        
    }
    
}
