@extends('layouts.userLayout')

@section('content')
<div class="container mt-5">
    <h1>Search Results for "{{ $query }}"</h1>

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @if($results->isEmpty())
        <p>No results found.</p>
    @else
        <ul class="list-group">
            @foreach($results as $result)
                <li class="list-group-item">
                    <strong>{{ $result->username }}</strong> ({{ $result->email }})
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection


