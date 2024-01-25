<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
    <a href="index.html" class="navbar-brand">
        <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Kider</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    
        <div class="navbar-nav mx-auto">
            <a href="{{ route('Test') }}" class="nav-item nav-link {{ request()->routeIs('Test') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
            <a href="{{ route('Classes') }}" class="nav-item nav-link {{ request()->routeIs('Classes') ? 'active' : '' }}">Classes</a>
            <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle {{ (request()->routeIs('facilities') || request()->routeIs('teachers') || request()->routeIs('become_teacher') || request()->routeIs('appointment') || request()->routeIs('callToAction') ) ? 'active' : '' }}" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                    <a href="{{ route('facilities') }}" class="dropdown-item {{ request()->routeIs('facilities') ? 'active' : '' }}">School Facilities</a>
                    <a href="{{ route('popularteachers') }}" class="dropdown-item {{ request()->routeIs('popularteachers') ? 'active' : '' }}">Popular Teachers</a>
                    <a href="{{ route('become_teacher') }}" class="dropdown-item {{ request()->routeIs('become_teacher') ? 'active' : '' }}">Become A Teacher</a>
                    <a href="{{ route('appointment') }}" class="dropdown-item {{ request()->routeIs('appointment') ? 'active' : '' }}">Make Appointment</a>
                    <a href="{{ route('callToAction') }}" class="dropdown-item {{ request()->routeIs('callToAction') ? 'active' : '' }}">Testimonial</a>
                    <!-- <a href="{{ route('404') }}" class="dropdown-item {{ request()->routeIs('404') ? 'active' : '' }}">404 Error</a> -->
                </div>
            </div>
            <a href="{{ route('contactUs') }}" class="nav-item nav-link {{ request()->routeIs('contactUs') ? 'active' : '' }}">Contact Us</a>
        </div>
        <a href="" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Join Us<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->