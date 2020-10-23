<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light {{ isset($nav_class) ? $nav_class : 'bg-light' }}">
    <div class="container-lg">

        <!-- Brand -->
        <a class="navbar-brand d-lg-none" href="/">Saaze</a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Navigation -->
            <ul class="navbar-nav justify-content-end w-100">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="/#features">
                        Features
                    </a>
                </li>
            </ul>

            <!-- Brand -->
            <a class="navbar-brand d-none d-lg-block px-lg-6" href="/">Saaze</a>

            <!-- Navigation -->
            <ul class="navbar-nav justify-content-start w-100">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="/docs">
                        Docs
                    </a>
                </li>
            </ul>

        </div>

    </div>
</nav>
