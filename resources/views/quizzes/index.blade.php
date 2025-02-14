@extends('layouts.userLayout')
@section('content')
<div class="container">
    <h2>Available Quizzes</h2>
    <ul class="list-group">
        @foreach($quizzes as $quiz)
            <li class="list-group-item">
                <a href="{{ route('quiz.show', $quiz->id) }}">{{ $quiz->title }}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
