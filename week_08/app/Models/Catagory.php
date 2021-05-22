<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    protected $table = 'catagory';
    public function getAllCategories(){
        $categories = $this->all();
        return $categories;
    }

    public function getPluckCategories(){
        $categories = $this->pluck( 'category_name','category_id');
        return $categories;
    }
}

