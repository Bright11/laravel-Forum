@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
<table class="table">
<thead>
<tr>
    <th scope="col">number</th>
    <th scope="col">category</th>
    <th scope="col">Action</th>
</tr>
</thead>
<tbody>
    @forelse ($cart as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td><a href="deletecategory/{{$item->id}}" class="btn btn-danger">Delete</a></td>
        @empty

    </tr>
    @endforelse

</tbody>
</table>

</div>
@endsection
