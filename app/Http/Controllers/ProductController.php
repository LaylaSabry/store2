<?php

namespace App\Http\Controllers;
use App\Models\Artical;
use App\Models\Category;

use Illuminate\Http\Request;

class ProductController extends Controller
{
     // get list of the articls inside each category 
     // get list of the cateories 
     public function list($id)
     {
         $articls = Artical::where('category_id','=', $id)->get(); // SELECT * from categories;
       
         return view('article',['articls'=>$articls ]);
        //  return $articls;
     }

     
     public function showDetails($id)
     {
          $articls = Artical::find($id);
         
         return view('details',['articls'=>$articls ]);
     //     return $articls;
     }

     public function update($id)
     {
          $articls = Artical::find($id);
         
         return view('updateArticle',['articls'=>$articls ]);
                 // return $categories;
 
     }
 
     public function edite(Request $request)
     {
         $articls=Artical::where('id', $request->id)
         ->update([
             'name' => $request -> name ,

          ]);
         return redirect('/article/'.$request->category_id);
     //     return $articls;
         // save new category
     }


     public function delete($id)
     {
         // $category = Category::where('id','=', $id)->get(); 
                 $articls = Artical::findOrFail($id);
 
 
         if($articls)
         {
             $articls -> delete();
         }
 
         return redirect()->route('/cats');
 
     }


     public function create()
     {
         return view('creatArticle');
     }
 
     public function save(Request $request)
     {
         $articls = new Artical;
         $articls -> name = $request -> name;
         $articls -> category_id = $request -> category_id;
         $articls -> details = $request -> details;
         $articls -> is_used = $request -> is_used;
         $articls -> slug = $request -> slug;


         $articls->save(); // INSERT INTO TABLE 
 
         return redirect('/cats');
         // return $category;
         // save new category
     }
}
