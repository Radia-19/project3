@extends('layouts.userLayout')

@section('title','Update Course')

@section('content')

<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            @include('errors.error')
            <form class="" action="{{ route('course.update', $course->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="" class="form-label">Course Title</label>
                <input type="text" name="name" placeholder="Enter Course Name" class="form-control" value="{{ $course->name }}">

                <label for="" class="form-label mt-3">Course Details</label>
                <textarea name="details" id="" placeholder="Enter Course Details" cols="30" rows="1" class="form-control">{{ $course->details }}</textarea>

                <label for="" class="form-label mt-3">Course Image</label>
                <input type="file" name="image" accept="image/*" class="form-control">

                <label for="" class="form-label mt-3">Course Video</label>
                <input type="file" name="video" accept="video/*" class="form-control">

                <label for="" class="form-label mt-3">Batch Start Date</label>
                <input type="date" name="batch_start" class="form-control" value="{{$course->batch_start}}">

                <label for="" class="form-label mt-3">Admission End Date</label>
                <input type="date" name="admission_end" class="form-control" value="{{$course->admission_end}}">

                <label for="" class="form-label mt-3">Live Class Time</label>
                <input type="text" name="live_class_time" placeholder="Enter Live Class Time" class="form-control" value="{{$course->live_class_time}}">

                <label for="" class="form-label mt-3">Number of Live Classes</label>
                <input type="number" name="live_classes" placeholder="Enter Number of Live Classes" class="form-control" value="{{$course->live_classes}}">

                <label for="" class="form-label mt-3">Number of Projects</label>
                <input type="number" name="projects" placeholder="Enter Number of Projects" class="form-control" value="{{$course->projects}}">

                <label for="" class="form-label mt-3">Course Fee</label>
                <input type="number" name="fee" placeholder="Enter Course Fee" class="form-control" value="{{$course->fee}}" required>

                <div class="row">
                    <div class="mt-3">
                        <button type="submit" class="btn btn-info w-100" name="submit" value="Create">Update Course</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
