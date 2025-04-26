<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Admin Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>

        <div class="container mt-5">
            <h1 class="mb-4">Welcome to Admin Dashboard!</h1>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manage your app here</h5>
                    <p class="card-text">You can add, edit, delete users, tasks, and more from this panel.</p>
                    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>

    </body>

</html>