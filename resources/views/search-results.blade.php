@extends('layouts.userLayout')

@section('title', 'Search')

@section('content')
<div id="content">
    @forelse ($articles as $article)
        <p>{{ $article->content }}</p>
    @empty
        <p>No articles found.</p>
    @endforelse
</div>
@endsection
