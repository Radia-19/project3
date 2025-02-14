@extends('layouts.userLayout')
@section('content')
<div class="container">
    <h2>{{ $quiz->title }}</h2>
    <form method="POST" action="{{ route('quiz.submit') }}">
        @csrf
        <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">
        @foreach($quiz->questions as $question)
            <div class="mb-4">
                <strong>{{ $loop->iteration }}. {{ $question['text'] }}</strong><br>
                @foreach($question['options'] as $optionKey => $optionValue)
                    <input type="radio" name="{{ $question['id'] }}" value="{{ $optionKey }}" required> {{ $optionValue }}<br>
                @endforeach
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
