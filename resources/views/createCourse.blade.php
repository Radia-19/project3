@extends('layouts.userLayout')

@section('title','Add Course')

@section('content')

<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            @include('errors.error')
            <form class="" action="{{ route('course.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="" class="form-label">Course Title</label>
                <input type="text" name="name" placeholder="Enter Course Name" class="form-control">

                <label for="" class="form-label mt-3">Course Details</label>
                <textarea name="details" id="" placeholder="Enter Course Details" cols="30" rows="1" class="form-control"></textarea>

                <label for="" class="form-label mt-3">Course Image</label>
                <input type="file" name="image" accept="image/*" class="form-control">

                <label for="" class="form-label mt-3">Course Video</label>
                <input type="file" name="video" accept="video/*" class="form-control">

                <label for="" class="form-label mt-3">Batch Start Date</label>
                <input type="date" name="batch_start" class="form-control">

                <label for="" class="form-label mt-3">Admission End Date</label>
                <input type="date" name="admission_end" class="form-control">

                <label for="" class="form-label mt-3">Live Class Time</label>
                <input type="text" name="live_class_time" placeholder="Enter Live Class Time" class="form-control">

                <label for="" class="form-label mt-3">Number of Live Classes</label>
                <input type="number" name="live_classes" placeholder="Enter Number of Live Classes" class="form-control">

                <label for="" class="form-label mt-3">Number of Projects</label>
                <input type="number" name="projects" placeholder="Enter Number of Projects" class="form-control">
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









                {{-- <label for="" class="form-label mt-3">Video URL</label>
                <input type="text" name="video" placeholder="Enter Video URL" class="form-control"> --}}
