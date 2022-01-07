@extends('frontend.master')
@section('title')
    Add Category
@endsection
@section('content')
<div class="container">
    <form action="{{route('insertcart')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Category Name</label>
            <input type="text" class="form-control" name="name" placeholder="name">
          </div>
          <div class="mb-3">
            <input type="submit" class="form-control btn btn-primary" value="Submit">
          </div>

    </form>
</div>
@endsection
