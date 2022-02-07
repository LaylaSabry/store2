<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // get list of the cateories 
        public function list()
    {
        $categories = Category::all(); // SELECT * from categories;
        // $cat = Category::find(1);
        // $cat -> any_field_name = 'any value';
        return view('category',['categories'=>$categories ]);
        // return $categories;
    }

    public function create()
    {
        return view('creatCat');
    }

    public function save(Request $request)
    {
        $category = new Category;
        $category -> name = $request -> name;
        $category->save(); // INSERT INTO TABLE 

        return redirect('/cats');
        // return $category;
        // save new category
    }
    public function update($id)
    {
        $categories = Category::find($id);
        
        return view('update',['categories'=>$categories ]);
                // return $categories;

    }

    public function edite(Request $request)
    {
        $category=Category::where('id', $request->id)
        ->update([
            'name' => $request -> name
         ]);
        return redirect('/cats');
        // return $category;
        // save new category
    }


    public function delete($id)
    {
        // $category = Category::where('id','=', $id)->get(); 
                $category = Category::findOrFail($id);


        if($category)
        {
            $category -> delete();
        }

        return redirect()->route('categories.list');

    }
}
