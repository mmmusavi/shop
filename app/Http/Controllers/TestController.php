<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cat;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function test(){
        $var=1000;
        return view('test',compact('var'));
    }

    public function add($name,$desc,$cat){

        $product_item=[
            'name'=>$name,
            'desc'=>$desc,
            'cat_id'=>$cat,
        ];

        $product=new Product();
        $product->insert($product_item);

        return redirect('/test');
    }

    public function product(Product $id){
        return view('test',compact('id'));
    }
    public function cat(Cat $id){
        return view('cat',compact('id'));
    }
}
