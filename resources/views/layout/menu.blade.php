{{-- <header class="masthead">
    <div class="container">
        <nav class="primary-nav">
            <h1 class="sr-only">Page Name</h1>
            <span class="edu">Edu<span class="world">WorlD</span></span>
            <ul class="nav-links"> --}}
                <nav class="section-container nav-container">
                    <div class="nav-logo">Edu<span>WorlD</span>
                        <ul class="nav-links">

                <li><a href="{{ route('home') }}"  class="nav-link">Home</a></li>
                <li><a href="{{ route('about') }}" class="nav-link">About</a></li>
                <li><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                {{-- <li><a href="{{ route('user.view') }}" class="nav-link">user_view</a></li> --}}
                <li><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                <li><a href="{{ route('login') }}" class="nav-link">Login</a></li>
            </ul>
        </nav>
    </div>
</header>
