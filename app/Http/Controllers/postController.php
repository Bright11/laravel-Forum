<?php

namespace App\Http\Controllers;

use App\Models\reply;
use App\Models\answers;
use App\Models\profile;
use App\Models\category;
use App\Models\question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class postController extends Controller
{
    //
    public function index()
    {

        $question = question::orderBy('created_at','desc')->get();
        $category=category::all();
        return view('frontend.index',['question'=>$question,'category'=>$category]);
    }

    public function readmore($id)
    {
            $question = question::find($id);
            $category=category::all();
            //$reply = reply::get();
            $answer = answers::find($id);
            return view('frontend.readmore',['question'=>$question,'answers'=>$question->answers()->get(),'answer'=>$answer,'category'=>$category]);
    }
    public function askquestion()
    {
        if(Auth::user())
        {
            $cart = new category;
            $cart=category::all();
            return view('frontend.askquestion',['cart'=>$cart]);
        }else{
            return redirect('login')->with('status','Login first!');
        }
    }
    public function submitanswer(Request $req, $id)
    {
        if(Auth::user())
        {
        $answer= new answers;
        $answer->user_id=$req->user()->id;
        //$answer->question_id=$id;
        $answer->id=$id;
        $answer->answers=$req->answers;
        $answer->save();
        return redirect()->back()->with('status','Comment received');
    }else{
        return redirect('login')->with('status','Login first!');
    }
    }

    public function allcategory($id)
    {
        //return $id;
        if(category::where('id',$id)->exists())
        {
            $categorys=category::all();
            $category = category::where('id',$id)->first();
            $question = question::where('cart_id',$category->id)->get();
            return view('frontend.allcategory',['question'=>$question,'categorys'=>$categorys]);
        }
    }

public function editpostpage ($id)
{
    //return $id;
    $editq = question::find($id);

    return view('frontend.editpostpage',['editq'=>$editq]);
}

public function editq(Request $req, $id)
{
    $editq = question::find($id);
    $editq->title=$req->title;
    $editq->question=$req->question;
    $editq->update();
    return redirect('/')->with('status','The update was successfully');
}
}
