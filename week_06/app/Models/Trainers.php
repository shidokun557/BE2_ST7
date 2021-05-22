<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainers extends Model
{
    protected $table = 'trainers';
        
    public function search($input) {
        $data = self::where('trainer_name', 'like', "%".$input."%")->paginate(10);
        return $data;
    }
}
