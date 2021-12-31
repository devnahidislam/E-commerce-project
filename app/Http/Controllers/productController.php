<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    // home page controller
    public function home(){
        $products = product::all();
        return view('home',['products'=>$products]);
    }
    // product page controller
    public function index(){
        //dd(auth()->user());
        $products = product::all();
        return view('products.product',['products'=>$products]);
    }
    // Add product view show controller
    public function addProduct(){

        return view('products.addProduct');
    }
    // Add products store controller
    public function storeProduct(Request $req){
        //Validate registration form
        $this->validate($req,[
            'name' => 'required|min:3|max:50',
            'price' => 'required|max:50',
            'description' => 'required|min:10|max:250',
            'category' => 'required',
            'galleryimg' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:4048',
        ]);

        $product = new product;
        $product->name = $req->name;
        $product->price = $req->price;
        $product->description = $req->description;
        $product->category = $req->category;
        if($req->hasfile('galleryimg')) {
            $file = $req->file('galleryimg');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/products',$filename);
            $product->gallery = $filename;
        }

        $product->save();
        return redirect()->back()->withsuccess('Product added successfully');

    }

    // Product details controllers
    public function details($pid){
        $product = product::find($pid);
        return view('products.details',['product'=>$product]);
    }
}
