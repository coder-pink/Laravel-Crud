<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div style="display: flex; gap: 2rem; justify-content: space-start;" class=" mt-4 mb-4">
        <a href="{{url('/register')}}">
            <button class="btn btn-primary  mt-3 ">Add</button>
        </a>

        <a href="{{url('/')}}">
            <button class="btn btn-primary mt-3 ">Home</button>
        </a>
        </div>

        <h1 class="text-primary text-center m-4">User List</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($register as $value)
                    <tr>
                        <td>{{$value->name}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->password}}</td>
                        <td>
                            <a href="{{url('/register/delete/')}}/{{$value->id}}">
                                <button class="btn btn-danger">Delete</button>
                            </a>
                            <a href="{{url('/register/edit/')}}/{{$value->id}}">
                                <button class="btn btn-success">Edit</button>
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</body>
</html>
