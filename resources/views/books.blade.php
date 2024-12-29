@extends('layouts.userLayout')

@section('title','Books')

@push('css')

@endpush


@section('content')
   <div class="container">
       <div class="row">
        <div class="col-8 offset-2 mt-4">
            @include('errors.error')
             Books :
             <hr>

                <!-- Section-->
                <section class="py-2">
                    <div class="container px-4 px-lg-5 mt-5">
                        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3 justify-content-center">
                            @foreach($books as $book)
                            <div class="col mb-5">
                                <x-card :bookData="$book" :bookName="$book->name" :bookDetails="$book->details" :book="$book->book" :status="$book->status" />
                            </div>
                            @endforeach
                        </div>
                        {{ $books->links() }}
                    </div>
                </section>

           </div>
       </div>
   </div>
@endsection

@push('js')

@endpush

