<?php

namespace App\Http\Controllers\admin;

use App\Models\category;
use App\Models\question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class adminController extends Controller
{
    //
    public function category()
    {
        if(Auth::check() && Auth::user()->role_as == '1')
        return view('backend.category');

        else{
            return redirect('/')->with('status','You are not an admin of this site');
        }
    }

    public function insertcart(Request $req)
    {
       //$cart=category::where('name','=', input::get());
       $name = category::where(['name'=>$req->name])->first();
       // $cat = new category;
        if($name===null)
        {
            //return ('ok not in');
            $cat = new category;
            $cat->name=$req->name;
            $cat->save();
            return redirect('viewcategory')->with('status','Category inserted successfully!');
        }
        else{

            return redirect('category')->with('status','Category name already exist!');
        }

    }

    public function viewquestion()
    {
        if(Auth::check() && Auth::user()->role_as == '1')
        {
       //$question = question::latest()->first();
       $question = question::orderBy('created_at','desc')->get();
       return view('viewquestion',['question'=>$question]);
        }
        else
        {
            return redirect('/')->with('status','You are not an admin of this site');
        }

    }

    public function viewcategory()
    {
        if(Auth::check() && Auth::user()->role_as == '1')
        {
        $cart=category::all();

        return view('viewcategory',['cart'=>$cart]);

        }else{
            return redirect('/')->with('status','You are not an admin of this site');
        }
    }

    public function deleteq($id)

    {
       // return $id;
       question::destroy($id);
       return back();
    }
    public function deletecategory($id)
    {
        category::destroy($id);
        return back();
    }
}
