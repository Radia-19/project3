<div class="card h-100">
    {{-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> --}}

    <!-- Product book-->
    <img class="card-img-top" src="{{ asset('uploads').'/'.$book }}" alt="..." />
    <!-- Product details-->
    <div class="card-body p-4">
        <div class="text-center">
            <!-- Product name-->
            <h5 class="fw-bolder">{{ $bookName }}</h5>
            <!-- Product reviews-->
            <p>{{ $bookDetails }} </p>
            <a class="btn btn-outline-info" href="{{ asset('uploads').'/'.$book }}" download="">Download</a>
    </div>
    </div>
    <!-- Product actions-->
    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        @if($status == 'approved')
           <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('user.mybooks.sale',[$bookData->id])
            }}">Send Sell Request</a></div>
        @else
            @if($status != null)
           <div class="text-center"><a class="btn btn-outline-dark mt-auto disabled" href="#">{{ strtoupper($status) }}</a></div>
           @endif
        @endif
    </div>
</div>
