<!DOCTYPE html>
<html lang="en">

<head>
    <link href="{{URL::asset('css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
</head>
<body>
    <div class='container'>
        <h2>
            <center>Login</center>
            <hr>
        </h2>
        <form action="{{ url('auth') }}" method='post'>
            @csrf
            @method('PUT')
            <div class='image'>
                <img alt='Login image' src="{{('image/login.svg')}}">
            </div>
            <div class='form-group'>
                <input type='text' name='email' class='form-control' placeholder='Email' required value="" />
                <span class='Error'></span>
            </div>
            <div class='form-group'>
                <input type='password' name='password' class='form-control' placeholder='Password' />
                <span class='Error'> </span>
            </div>

            <div class='form-button'>
                <input type='submit' name='login' class='btn btn-primary' value='Login' /><br>

            </div>
    </div>
    {{session('error')}}
    </form>

</body>

</html>