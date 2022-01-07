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
    <th scope="col">Question</th>
    <th scope="col">Action</th>
</tr>
</thead>
<tbody>
    @forelse ($question as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{Str::limit($item->question,70,$end="...")}}</td>
        <td><a href="/deleteq/{{$item->id}}" class="btn btn-danger">Delete</a></td>
        @empty

    </tr>
    @endforelse

</tbody>
</table>

</div>
@endsection
