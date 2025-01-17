<style>
    .highlight {
        background-color: yellow;
        font-weight: bold;
    }
</style>
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center ps-5 ms-4">
        <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i><small>Learning Management System</small>(LMS)</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <form id="search-form" class="d-flex align-items-center">
        <!-- Hidden input field -->
        <input type="text" name="query" id="search-input" class="form-control me-2 search-input" placeholder="Type to search...">
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
                <a href="{{ route('logout') }}" class="nav-item nav-link pe-3 me-5">
                    ({{ Auth::user()->username }}) Logout
                </a>
            @elseif (Auth::user()->role === 'trainer')
                <!-- Trainer Navigation -->
                <a href="{{ route('course.create.show') }}" class="nav-item nav-link">Create</a>
                <a href="{{ route('task.create.show') }}" class="nav-item nav-link">Task</a>
                <a href="{{ route('upload.create.show') }}" class="nav-item nav-link">File</a>
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Files</a>
                    <div class="dropdown-menu fade-down m-0">

                        <a href="{{ route('books.show') }}" class="dropdown-item">All Files</a>
                        <a href="{{ route('approval.show') }}" class="dropdown-item">Approval</a>
                    </div>
                </div>--}}
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
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('search-form').addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent form submission

            // Get the search query
            const queryInput = document.getElementById('search-input');
            const query = queryInput.value.trim().toLowerCase();

            // if (!query) {
            //     alert('Please enter a search term.');
            //     return;
            // }

            // Get all paragraphs inside #content
            const paragraphs = document.querySelectorAll('#content p');

            let found = false; // To check if a match is found

            paragraphs.forEach(paragraph => {
                if (found) return; // Stop after the first match

                const text = paragraph.textContent.toLowerCase();
                const index = text.indexOf(query);

                if (index !== -1) {
                    found = true;

                    // Scroll to the matched paragraph
                    paragraph.scrollIntoView({ behavior: 'smooth', block: 'center' });

                    // Highlight the matched word
                    const originalHTML = paragraph.innerHTML;
                    const regex = new RegExp(`(${query})`, 'gi');
                    paragraph.innerHTML = originalHTML.replace(regex, '<span class="highlight">$1</span>');

                    // Optional: Remove the highlight after a delay
                    setTimeout(() => {
                        paragraph.innerHTML = originalHTML;
                    }, 2000);
                }
            });

            // if (!found) {
            //     alert(`No match found for "${query}".`);
            // }
        });
    });
</script>
@endpush

