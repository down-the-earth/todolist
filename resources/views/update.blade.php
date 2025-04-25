<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>

    <body>
        <form action="{{route('update',$task->id)}}" method="post">
            @csrf
            <div class="container">
                <h1>Todo List</h1>
                <div class="mb-3">
                    <label for="todo" class="form-label">Todo</label>
                    <input type="text" class="form-control mb-10" id="todo" name="todo" value="{{$task->task}}"
                        required>
                    <textarea class="form-control" name="description"
                        placeholder="Description">{{$task->description}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Upate </button>
            </div>
        </form>
    </body>

</html>