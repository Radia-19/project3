@extends('layouts.userLayout')

@section('title','Task')

@section('content')

  <div class="container">
    <div class="row mt-3">
        <div class="col-8 offset-2 mt-3">

            @if(session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @endif
            @if($allTasks->isEmpty())
                <p class="alert alert-warning">No tasks available.</p>
            @else
            @foreach($allTasks as $task)
                    <div class="card-header">
                     Task ID: {{ $task->id }}
                     <div class="float-end">
                        @if(Auth::check() && Auth::user()->role === 'trainer')
                            @if($task->status == 'pending')
                                <a class="btn btn-info btn-sm me-2" href="{{ route('task.updateStatus',[$task->id,'completed']) }}">Mark as complete</a>
                            @else
                                <a class="btn btn-danger btn-sm me-2" href="{{ route('task.updateStatus',[$task->id,'pending']) }}">Back to pending</a>
                            @endif
                            <a class="text-info-emphasis ms-2 me-2" href="{{ route('task.show',[$task->id]) }}">Edit</a>
                            <a class="text-danger " onclick="return confirm('Are you sure?')" href="{{ route('task.delete',[$task->id]) }}">Delete</a>
                        @endif
                     </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $task->name }}</h5>
                        <p class="card-text">{{ $task->details }}</p>
                    </div>

            @endforeach
        </div>
            {{ $allTasks->links() }}
            @endif
        </div>
    </div>
</div>

@endsection
