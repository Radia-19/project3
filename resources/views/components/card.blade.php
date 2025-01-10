<div class="card h-100">
    {{-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> --}}

    <!-- Product book-->
    {{-- <img class="card-img-top" src="{{ asset('uploads').'/'.$book }}" alt="..." /> --}}
    <!-- Product details-->
    <div class="card-body p-4">
        <div class="text-center">
            <!-- Product name-->
            <h5 class="fw-bolder">{{ $bookName }}</h5>
            <!-- Product reviews-->
            <p>{{ $bookDetails }} </p>
    </div>
    </div>
    <!-- Product actions-->

    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">


        @if(Auth::user()->role === 'trainer')
            File ID: {{ $bookData->id }}
            <a class="text-info-emphasis ms-2 me-2" href="{{ route('updatebooks.show',[$bookData->id]) }}">Edit</a>
            <a class="text-danger " onclick="return confirm('Are you sure?')" href="{{ route('books.delete',[$bookData->id]) }}">Delete</a>
        @endif
        {{-- {{ $slot }} --}}
        {{-- @if(isset($status) && $status === 'approved')
            <div class="text-center">
                <a class="btn btn-outline-dark mt-auto disabled" href="{{ route('book.approved', [$bookData->id]) }}">{{ strtoupper($status) }}</a>
            </div>
        @elseif(isset($status) && $status === 'declined')
            <div class="text-center">
                <a class="btn btn-outline-danger mt-auto disabled" href="#">{{ strtoupper($status) }}</a>
            </div>
        @endif --}}

    </div>
</div>
