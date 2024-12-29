@extends('layouts.userLayout')

@section('title','Books Store')

@push('css')

@endpush


@section('content')
   <div class="container">
       <div class="row">

           <div class="col-8 offset-2 mt-4">
            @include('errors.error')
             Upload Books :
             <hr>
             <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label class="form-label mt-3">Book/File Title:</label>
                <input class="form-control" type="text" name="name">
                <label class="form-label mt-2">Details:</label>
                <input class="form-control" type="text" name="details">
                <input class="form-control mt-4" type="file" name="book" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx">
                <div class="mt-3">
                    <button class="btn btn-outline-info mt-2 mb-5 w-100" type="submit" value="Upload" name="submit">Upload</button>
                </div>
             </form>
           </div>
       </div>
   </div>
@endsection

@push('js')

@endpush
