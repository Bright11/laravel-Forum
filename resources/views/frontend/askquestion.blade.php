@extends('frontend.master')
@section('title')
    Ask Question
@endsection
@section('content')
<div class="container">
    @include('frontend.askmodal')
    <form action="{{route('insertq')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">title</label>
            <input type="text" class="form-control" name="title" placeholder="Post title">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Question related to</label>
            <select class="form-control" name="cart_id" required>
            <option>Select question category</option>
            @forelse ($cart as $item)
                <option value="{{$item['id']}}">{{$item['name']}}</option>
            @empty

            @endforelse
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Type your question</label>
            <textarea placeholder="Ask Question" class="form-control" name="question"></textarea>
          </div>
          <div class="mb-3">
            <input type="submit" value="Submit" class="btn btn-primary"/>
          </div>
    </form>
</div>
@endsection
