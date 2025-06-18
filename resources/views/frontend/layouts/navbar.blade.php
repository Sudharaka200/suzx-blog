<!-- navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Left: Logo -->
                <a class="navbar-brand me-auto" href="{{ url('/') }}">
                    <img src="frontend/images/Logo.png" alt="Logo" class="home-main-logo">
                </a>

                <!-- Center: Nav Links -->
                <div class="mx-auto">
                    <ul class="navbar-nav d-flex flex-row gap-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Right: Search Box -->
                <form class="d-flex align-items-center search-form">
                    <input class="form-control search-input" type="search" placeholder="Search" aria-label="Search">
                </form>

            </div>
        </nav>
        <!-- navbar -->