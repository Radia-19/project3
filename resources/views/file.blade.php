@extends('layouts.userLayout')

@section('title','File')

@section('content')
    <!-- File Start -->

    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach($randomBooks as $book)
                <div class="col mb-5 ">
                    <x-card  :bookName="$book->name" :bookDetails="$book->details" :book="$book->book" />
                        <div class="text-center">
                            <a class="btn btn-outline-info text-center mt-3" href="{{ asset('uploads').'/'.$book }}" download="">Download</a>
                        </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- File Start -->
@endsection
