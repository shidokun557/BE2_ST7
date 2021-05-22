<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainers extends Model
{
    protected $table = 'trainers';
        
    public function search($input) 
    {
        // $data = self::where('trainer_name', 'like', "%".$input."%")->paginate(10);
        // return $data;
        $trainers = $this->query()
                        ->where('trainer_name','LIKE', "%{$key}%")
                        ->orWhere('trainer_phone','LIKE',"%{$key}%")
                        ->orWhere('trainer_email','LIKE',"%{$key}%")
                        ->paginate(15);
            $trainers->withPath(route('search') . "?k=" . str_replace(' ','+',$key));
            return $trainers;
    }
}
