@extends('frontend.master');
@section('title')
{{$question['title']}}
@endsection
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-3 cartlink">

        <h4 class="text-center text-small"> Categories</h4>
        @forelse ($category as $cart)
        <li><a href="allcategory/{{$cart->id}}">{{$cart->name}}</a></li>
        @empty
    @endforelse

        </div>
    <div class="col-md-9">
        <div class="col-md-12">

        <p>{{$question['question']}}</p>
        <div class="maincontent">
            <div class="cartlink">
                <li><a href="/allcategory/{{$question->category->id}}"><p>Category/{{$question->category->name}}</p></a></li>
            </div>
            <div class="cartlink"><p>Posted By: {{$question->user->name}}</p></div>
            <div class="cartlink"><p>Comment:{{$answers->count()}}</p></div>
            <div class="cartlink"><p>{{$question->created_at->diffForHumans()}}</p></div>
        </div>


            <div class="row">
                <div class="col-md-12 text-center">

            @forelse ($answers as $answer)
            <p>{{$answer->user->name}}</p>
            <p>{{$answer['answers']}}</p>

            @empty
            <h4>no comment</h4>
            @endforelse

                </div>
            </div>
            <div class="col-md-12">
                <form action="/submitanswer/{{$question['id']}}" method="post">
                    @csrf
                    <textarea name="answers" class="form-control" placeholder="Answer question"></textarea>
                    <input type="submit" class="form-control btn btn-primary" value="Submit">
                </form>
            </div>
    </div>


</div>

</div>
@endsection
