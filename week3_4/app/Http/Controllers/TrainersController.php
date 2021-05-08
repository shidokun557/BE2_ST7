<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Trainers;
class TrainersController extends Controller
{
    public function trainers() {
        $obj = new Trainers();
        $trainers = $obj->all();
        $trainers = $obj->paginate(10);
        return view('trainers', ['trainers' => $trainers]);
    }
}
