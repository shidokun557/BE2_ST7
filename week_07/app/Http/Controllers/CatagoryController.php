<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Catagory;
class CatagoryController extends Controller
{
    public function catagory() {
        $obj = new Catagory();
        $catagory = $obj->all();
        $catagory = $obj->paginate(10);
        return view('catagory', ['catagory' => $catagory]);
    }
}
