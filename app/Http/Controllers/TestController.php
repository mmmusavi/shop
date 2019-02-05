<?php

namespace App\Http\Controllers;

use App\Item;
use App\Product;
use App\Cat;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{

    public function test(){
        $var=1000;
        return view('test',compact('var'));
    }

    public function form(){
        return view('form');
    }

    public function formPost(Request $request){
        $item=new Item();
        $item->fill($request->all());
        $item->save();
        return redirect('form');
    }

    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->pass])){
            return redirect('/profile');
        }else{
            \Session::flash('error','wrong');
            return redirect('/login');
        }
    }

    public function register(){
        return view('register');
    }

    public function registerPost(Request $request){

        $request->validate([
            'email' => 'required|email|unique:users',
            'pass' => 'required|min:6',
            'repass' => 'same:pass',
        ]);

        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->pass);
        $user->save();

        \Session::flash('test','با موفقیت انجام شد');

        return redirect('register');
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
