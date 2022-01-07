@extends('frontend.master')
@section('title')
    Ask Question
@endsection
@section('content')
<div class="container">
    @include('frontend.askmodal')
    <form action="{{route('editq',$editq->id)}}" method="post">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">title</label>
            <input type="text" class="form-control" name="title" value="{{$editq->title}}">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Type your question</label>
            <textarea class="form-control" name="question">{{$editq->question}}</textarea>
          </div>
          <div class="mb-3">
            <input type="submit" value="Submit" class="btn btn-primary"/>
          </div>
    </form>
</div>
@endsection
