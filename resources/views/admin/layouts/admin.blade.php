<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Admin Panel')</title>

        <!-- Bootstrap 5 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles -->


        @stack('styles')
    </head>

    <body>

        <!-- Navbar -->
        <nav class="navbar bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand">Navbar</a>


                <button class="btn btn-outline-danger" type="submit">Logout</button>

            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">

                <!-- Sidebar -->
                <nav class="col-md-2 d-none d-md-block bg-light sidebar py-3">
                    <div class="position-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
                            <li class="nav-item"><a class="nav-link text-danger" href="#">Logout</a></li>
                        </ul>
                    </div>
                </nav>

                <!-- Main Content -->
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                    <h2>@yield('page-title', 'Dashboard')</h2>
                    @yield('content')
                </main>
            </div>
        </div>

        <!-- Bootstrap 5 JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        @stack('scripts')
    </body>

</html>