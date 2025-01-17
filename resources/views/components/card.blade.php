<div class="card h-70">
    <div class="card-body p-3">
        <div class="text-center">
            <h5 class="fw-bolder mt-2">{{ $bookName }}</h5>
            <hr>
            <p>{{ $bookDetails }} </p>
        </div>
    </div>
    <div class="card-footer p-5 pt-0 border-top-0 bg-transparent">
        @if(Auth::check() && Auth::user()->role === 'trainer')
            File ID: {{ $bookData->id }}
            <a class="text-info-emphasis ms-2 me-2" href="{{ route('updatebooks.show',[$bookData->id]) }}">Edit</a>
            <a class="text-danger " onclick="return confirm('Are you sure?')" href="{{ route('books.delete',[$bookData->id]) }}">Delete</a>
        @endif
    </div>
</div>








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
