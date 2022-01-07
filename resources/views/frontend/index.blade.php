@extends('frontend.master');
@section('title')
Developers forum
@endsection
@section('content')
<div class="container-fluid homeimgs"style="background-image:url({{asset('img/hero-bg.png')}})" >
   <div class="col">
    @if (Auth::user())
    <p>{{Auth::user()->name}} Welcome to Bright C Web Deveopers Forum </p>
        @else
        <p class="welcome">Welcome to Bright C Web Deveopers Forum </p>
    @endif
   </div>
    <div class="row indeximg">
        <div class="col-md-4">
            Ask Questions
        </div>
        <div class="col-md-4">
            Help your fellow developers by answering questions
        </div>
        <div class="col-md-4">
            Share you it with other developers
        </div>

    </div>
</div>

<div class="container mt-5">
<div class="row">
    <div class="col-md-3 cartlink">

    <h4 class="text-center text-small"> Categories</h4>
    @forelse ($category as $cart)
    <li><a href="allcategory/{{$cart->id}}">{{$cart->name}}</a></li>
    @empty
@endforelse

    </div>
    <div class="col-md-9">
        @forelse ($question as $item)
        <hr>
        <div class="col-md-12 indexquestion">

            <h5 class="text-center title">{{$item['title']}}</h5>
            <div class="maincontent">
                <a href="readmore/{{$item->id}}" class="questionlink">
                    <h4 class="question">{{Str::limit($item['question'],50,$end="...")}}</h4>
                </a>
            </div>
            <div class="tags">
                <div class="cartlink">
                    <li><a href="/allcategory/{{$item->category->id}}"><p>Category/{{$item->category->name}}</p></a></li>
                </div>
                <div class="cartlink">
                    @if ($item->user->role_as===1)
                    <p>Posted by Admin:{{$item->user->name}}</p>
                    @else
                    <p>Posted by:{{$item->user->name}}</p>
                    @endif
                </div>
                <div class="cartlink"><p>{{$item->created_at->diffForHumans()}}</p></div>
               @if (Auth::user())
               @if (Auth::user()->id === $item->user->id)
               <a href="readmore/{{$item->id}}" class="questionlink">
                <h4 class="question"><a href="/deleteq/{{$item->id}}" class="btn btn-danger">Delete</a></h4>
            </a>
            <a href="readmore/{{$item->id}}" class="questionlink">
                <h4 class="question"><a href="/editpostpage/{{$item->id}}" class="btn btn-danger">Edit</a></h4>
            </a>
               @else

               @endif
               @endif
            </div>
        </div>
        @empty
        <h4>No question avialabe</h4>
        @endforelse

    </div>
</div>

</div>
@endsection
