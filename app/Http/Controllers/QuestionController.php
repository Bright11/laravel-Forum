<?php

namespace App\Http\Controllers;

use App\Models\profile;
use App\Models\question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    //
   /*
     public function insertprofile(Request $req)
    {
        $profile = new profile;
        $oneuser = profile::where(['user_id'=>$req->user()->id])->first();
        $nameuser = profile::where(['name'=>$req->name])->first();
        if($oneuser=== null)
        {
            if($nameuser===null)
            {

        if($req->hasFile('image'))
        {
            $path=$profile->image=$req->image->store('public/profileimg');
            $profile->user_id=$req->user()->id;
            // return $userid;
             $profile->name=$req->name;
             $profile->technology=$req->technology;
             $profile->$path;
            //$profile->$userid;
             $profile->save();
             return redirect('profile')->with('status','Profile updated successfully');
        }
        else{
            $profile = new profile;
            $profile->user_id=$req->user()->id;
            // return $userid;
             $profile->name=$req->name;
             $profile->technology=$req->technology;
             //$profile->$userid;
             $profile->save();
             return redirect('profile')->with('status','Profile updated successfully');
        }

    }

    else{
        return redirect('profile')->with('status','User name already exist!');
    }
}
else{
    return redirect('profile')->with('status','You have done it before!');
}

    }

   /*/

    public function insertq(Request $req)
    {
        if(Auth::user())
        {
         $q = new question;
         $q->user_id=$req->user()->id;
         $q->title=$req->title;
         $q->cart_id=$req->cart_id;
         $q->question=$req->question;
         $q->save();
         return redirect('askquestion')->with('status','Your question is wating for admin review!');
        }
        else{
            return redirect('login')->with('status','Login first!');
        }
    }
}
