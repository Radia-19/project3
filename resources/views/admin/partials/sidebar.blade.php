<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon">
            {{-- <img style="height: 20px;"  src="{{ asset('admin/img/7j0XhM-LogoMakr.png')}}"  alt="Example Image"> --}}
            <i class="bi bi-book-fill"></i>
        </div>
        <div class="sidebar-brand-text mx-3">LMS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">


    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <div class="sidebar-heading">
        Files
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
           aria-expanded="true" aria-controls="collapseUtilities">
           <i class="fa fa-users mr-2"></i>
            <span>Files Info</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
             data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">All Files</h6>
                <a class="collapse-item" href="{{ route('admin.approval.show') }}"><i class="bi bi-door-open-fill"></i> Approval</a>
                {{-- <a class="collapse-item" href="{{ route('admin.buyout.show') }}"><i class="bi bi-bag-heart-fill"></i> Buyout</a>
                <a class="collapse-item" href="{{ route('admin.cashout.show') }}"><i class="bi bi-cash-coin"></i> Cashout</a>
            </div> --}}
        </div>
    </li>
    <!-- Heading -->
    <div class="sidebar-heading">
       Information
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
           aria-expanded="true" aria-controls="collapseTwo">
           <i class="bi bi-gem"></i>
            <span>Courses</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">All Courses</h6>
                <a class="collapse-item" href="{{ route('graph') }}">Graphic Design</a>
                <a class="collapse-item" href="{{ route('anime') }}">Animation</a>
                <a class="collapse-item" href="{{ route('web') }}">Web Development</a>
                <a class="collapse-item" href="{{ route('app') }}">Android App</a>
                <a class="collapse-item" href="{{ route('basic') }}">Basic Course</a>
                <a class="collapse-item" href="{{ route('cyber') }}">Cyber Security</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
           aria-expanded="true" aria-controls="collapseUtilities">
           <i class="fa fa-users mr-2"></i>
            <span>Student Info</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
             data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Students</h6>
                <a class="collapse-item" href="{{ route('allStudents') }}">All Students</a>
                <a class="collapse-item" href="{{ route('addStudent') }}">Add Student</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
           aria-expanded="true" aria-controls="collapseUtilities">
           <i class="bi bi-people-fill"></i>
            <span>Trainers Info</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
             data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Trainers</h6>
                <a class="collapse-item" href="{{ route('allTeacher') }}">All Trainers</a>
                <a class="collapse-item" href="{{ route('addTeacher') }}">Add Trainer</a>
            </div>
        </div>
    </li>





    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar --><?php
