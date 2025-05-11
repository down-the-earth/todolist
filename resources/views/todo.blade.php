<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <style>
    body {
        font-family: 'Poppins', sans-serif;
    }
    </style>

    <body>
        @if(session('success'))
        <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">

        </div> -->
        <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "success",
            title: "{{ session('success') }}"
        });
        </script>
        @endif
        <form action="{{route('add')}}" method="post">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="text-left col-8 mt-4">
                        <h1>Todo List</h1>
                        <h4>Laravel 10 CRUD Application</h4>
                    </div>
                    <div class="text-right col-4 mt-4">
                        <h4>Welcome {{ session('user_name') }}</h4>
                        <h3>Role: {{ session('role') }}</h3>

                        <a href="{{ route('logout') }}" class="btn btn-danger mt-4">Logout</a>
                    </div>
                </div>


                <div class="mb-3">
                    <label for="todo" class="form-label">Todo</label>
                    <input type="text" class="form-control mb-10" id="todo" name="todo" required>
                    <textarea class="form-control" name="description" placeholder="Description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="language" class="form-label">Language</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="PHP" id="php" name="language[]">
                        <label class="form-check-label" for="php">PHP</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="JavaScript" id="javascript" name="language[]">
                        <label class="form-check-label" for="javascript">JavaScript</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Python" id="python" name="language[]">
                        <label class="form-check-label" for="python">Python</label>
                    </div>
                
                <button type="submit" class="btn btn-primary">Add Todo</button>
            </div>

            <div class="container mt-4">
                <h2>Todo List</h2>
                <table border="1" class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Sr.No</th>
                            <th scope="col">Task</th>
                            <th scope="col">Description</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Action</th>
                        </tr>

                    </thead>
                    <tbody class="table-group-divider">
                        @if ( count($tasks) > 0)
                        @foreach($tasks as $todo)
                        <tr>
                            <th scope="row">{{ $loop->iteration; }}</th>
                            <td>{{ $todo->task }}</td>
                            <td>{{ $todo->description }}</td>
                            <td>{{ $todo->created_at->format('d-m-Y') }}</td>
                            <td>{{ $todo->created_at->diffForHumans() }}</td>
                            <td>
                                <a href="{{ route('edit', $todo->id) }}" class="btn btn-primary ">Edit</a>
                                <a href="{{ route('delete', $todo->id) }}" class="btn btn-danger ml-10">Delete</a>

                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="4" class="text-center">No tasks available</td>
                        </tr>
                        @endif
                    </tbody>
                </table>

            </div>

        </form>
    </body>

</html>