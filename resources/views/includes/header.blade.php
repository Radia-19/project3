
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center ps-5 ms-4">
        <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i><small>Learning Management System</small>(LMS)</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <form action="{{ route('search') }}" method="GET" class="d-flex align-items-center">
        <!-- Hidden input field -->
        <input type="text" name="query" id="query-input" class="form-control me-2 search-input" placeholder="Type to search...">

        <!-- Search button -->
        <button type="submit" id="search-button" class="btn p-0">
            <img style="height: 35px; width: 35px;" src="{{ asset('image/icons8-search-64.png') }}" alt="Search">
        </button>
    </form>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
            <a href="{{ route('course') }}" class="nav-item nav-link">Courses</a>

            @if(Auth::check())
            @if (Auth::user()->role === 'user')
                <!-- User Navigation -->
                <a href="{{ route('addStudent') }}" class="nav-item nav-link">Enrollment</a>
                {{-- <a href="{{ route('payment.show') }}" class="nav-item nav-link">Payment</a> --}}
                <a href="{{ route('logout') }}" class="nav-item nav-link pe-3 me-5">
                    ({{ Auth::user()->username }}) Logout
                </a>
            @elseif (Auth::user()->role === 'trainer')
                <!-- Trainer Navigation -->
                <a href="{{ route('task.create.show') }}" class="nav-item nav-link">Task</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Files</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{ route('upload.show') }}" class="dropdown-item">Upload</a>
                        <a href="{{ route('books.show') }}" class="dropdown-item">All Files</a>
                        <a href="{{ route('approval.show') }}" class="dropdown-item">Approval</a>
                    </div>
                </div>
                <a href="{{ route('logout') }}" class="nav-item nav-link pe-3 me-5">
                    ({{ Auth::user()->username }}) Logout
                </a>
            @endif
        @else
            <!-- Guest Navigation -->
            <a href="{{ route('login.show') }}" class="nav-item nav-link me-4 ps-0">Login</a>
            <a href="{{ route('register.show') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">
                Join Now<i class="fa fa-arrow-right ms-3"></i>
            </a>
        @endif

        </div>
    </div>
</nav>
<!-- Navbar End -->

@push('js')

<script>
document.getElementById('search-button').addEventListener('click', function (e) {
    const queryInput = document.getElementById('query-input');
    if (!queryInput.value.trim()) {
        e.preventDefault();
        alert('Please enter a search term.');
    }
});
</script>
@endpush
