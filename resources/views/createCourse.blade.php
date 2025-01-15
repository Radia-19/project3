@extends('layouts.userLayout')

@section('title','Add Course')

@section('content')

<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            @include('errors.error')
            <form class="" action="{{ route('course.create') }}" method="POST">
                @csrf
                <label for="" class="form-label">Course Title</label>
                <input type="text" name="name" placeholder="Enter Course Name" class="form-control">
                <label for="" class="form-label mt-3">Course Details</label>
                <textarea name="details" id="" placeholder="Enter Course Details"
                          cols="30" rows="10" class="form-control"></textarea>
                <div class="row">
                    <div class="mt-3">
                        <button type="submit" class="btn btn-info w-100" name="submit" value="Create">Add Course</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
