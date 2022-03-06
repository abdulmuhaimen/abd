<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
        public function viewproduct(){
            $pro=Product::all();
            $arr=array('p'=>$pro);
            return view('products.view',$arr);

        }


         public function addProduct(Request $req){
           if($req->isMethod('POST')){
               $newproduct=new Product();
               $newproduct->name=$req->input('name');
               $newproduct->price=$req->input('price');
               $newproduct->save();

           }
        return view('products.add');

        }

      public function delete($id){
            $deletepro= Product::find($id);
            $deletepro->delete();
            return redirect("product");
          }




          public function EditProduct(Request $req,$id){
            if($req->isMethod('POST')){
                $newproduct=Product::find($id);
                $newproduct->name=$req->input('name');
                $newproduct->price=$req->input('price');
                $newproduct->save();


                return redirect('product');

            }else{
                $edit=Product::find($id);

                $arr=Array('pr'=>$edit);

                return view('products.edit',$arr);
                }



         }

}
