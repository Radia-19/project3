@extends('layouts.userLayout')

@section('title','Task')

@section('content')

<div class="container">
    <div class="row mt-3">
        <div class="col-8 offset-2">
            <h3 class="text-center text-secondary mt-3">Create Tasks/ Announcements</h3>
            <hr>
            @include('errors.error')
            <form class="" action="{{ route('task.create') }}" method="POST">
                @csrf
                <label for="" class="form-label">Task Title</label>
                <input type="text" name="name" placeholder="Enter Task Name" class="form-control">
                <label for="" class="form-label mt-3">Task Details</label>
                <textarea name="details" id="" placeholder="Enter Task Details"
                          cols="30" rows="10" class="form-control"></textarea>
                <div class="row">
                    <div class="mt-3">
                        <button type="submit" class="btn btn-info text-white w-100" name="submit" value="Create">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
