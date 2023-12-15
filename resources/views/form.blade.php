<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


    <a href="{{url('/')}}" class="text-center p-5">
        <button class="btn btn-primary float-center mt-3 d-inline-block">Home</button>
    </a>
    {{-- <form action="{{ url('/') }}/register" method="POST"> --}}
    <form action="{{$url}}" method="POST">
        @csrf

        <div class="container w-50">
            <h1 class="text-center mt-2 text-primary" >{{$title}}</h1>

            {{-- <x-input type="text" name="name" label="Name" value="{{$user->name??''}}"/> --}}
            <x-input type="text" name="name" label="Name" value="{{$user->name??''}}"/>
                <span class="text-danger">
                    @error('name')
                        {{$message}};
                    @enderror
                </span>
            {{-- <x-input type="email" name="email" label="Email Address"  value="{{isset($user->email)?$user->email:''}}"/> --}}
            <x-input type="email" name="email" label="Email Address"  value="{{$user->email??''}}"/>
                <span class="text-danger">
                    @error('email')
                        {{$message}};
                    @enderror
                </span>
            {{-- <x-input type="password" name="password" label="Password" value="{{$user->password}}/> --}}
            {{-- <x-input type="password" name="password_confirmation" label="Confirm Password" /> --}}

            {{-- <div class="form-group mt-1 mb-2">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name" aria-describeby="helpId">
                <span class="text-danger">
                    @error('name')
                        {{$message}};
                    @enderror
                </span>
            </div>

            <div class="form-group mt-1 mb-2">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" aria-describeby="helpId">
                <span class="text-danger">
                    @error('email')
                        {{$message}};
                    @enderror
                </span>
            </div> --}}

            <div class="form-group mt-1 mb-2">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-describeby="helpId">
                <span class="text-danger">
                    @error('password')
                        {{$message}};
                    @enderror
                </span>
            </div>

            <div class="form-group mt-1 mb-2">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password" aria-describeby="helpId">
                <span class="text-danger">
                    @error('password_confirmation')
                        {{$message}};
                    @enderror
                </span>
            </div>

            <div class="text-center mt-3 mb-2 ">
                <button type="submit" class="btn btn-primary w-25">{{$button}}</button>
            </div>
            {{-- <button class="btn btn-primary mt-1 mb-2 w-25 "></button> --}}

        </div>
    </form>
</body>
</html>
