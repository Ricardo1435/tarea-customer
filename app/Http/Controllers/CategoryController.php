<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = $this->read();
        return view('category.index', compact('categories'));
    }
    public function register(){
        return view('category.register');
    }

//Metodos de crud http
    public function create(Request $request)
    {
        $data = $this->validateForm($request);
        Category::insert($data);
        return redirect(route('categoryIndex'));
    }
    public function read(){
        return Category::all();
    }

    public function validateForm(Request $request){
        $validatedData = $request->validate([
            'description'=>'required|max:45'
        ]);
        return $validatedData;
    }

}
