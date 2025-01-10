@extends('layouts.userLayout')

@section('title','Files')

@push('css')

@endpush


@section('content')
   <div class="container">
       <div class="row">

           <div class="col-8 offset-2 mt-4">
            @include('errors.error')
             Upload Files :
             <hr>
             <form action="{{ route('books.update',[$book->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label class="form-label mt-3">File Title:</label>
                <input class="form-control" type="text" name="name" value="{{ $book->name }}">
                <label class="form-label mt-2">Details:</label>
                <input class="form-control" type="text" name="details" value="{{ $book->details }}">
                <input class="form-control mt-4" type="file" name="book" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx" value="{{ $book->name }}">
                <div class="mt-3">
                    <button class="btn btn-outline-info mt-2 mb-5 w-100" type="submit" value="Update" name="submit">Update</button>
                </div>
             </form>
           </div>
       </div>
   </div>
@endsection

@push('js')

@endpush
