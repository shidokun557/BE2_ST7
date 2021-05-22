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
    function searchCompanies(Request $request){
        $categoryModel = new Categories();
        $categories = $categoryModel->getPluckCategories();

        if($request->input('k') && $request->input('catagory_name')){
            $key = $request->input('k');
            $categoryName = $request->input('catagory_name');

            $companyModel = new Companies();
            $result = $companyModel->search($key, $categoryName);

            return view('search_companies',[
                'companies' => $result, 
                'key' => $key,
                'categories' => $categories
                ]);
        }
        return view('search_companies',['catagory' => $categories]);
    }
    
}
