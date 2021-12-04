<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

    <div class="container">
        @if(session('message'))

		     <p class ="alert alert-success">
		     	{{session('message')}}
		     </p>

		@endif
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <br><br><br><br>
                <div class="card">
                    <div class="card-body">
                        <form id="login-form" class="form" action="{{url('data_check')}}" method="post">
                            @csrf
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Email</label><br>
                                <input type="text" name="mail" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md form-control" value="Submit">
                            </div>

                            <div class="form-group text-center">
                                <p style="color: rgb(65, 140, 236);">------OR-------</p>
                            </div>

                            <div class="form-group">
                                <a href="{{url('/register')}}"><input class="btn btn-info btn-md form-control text-light btn-succes" value="Register Your Self"></a>
                            </div>

                            <div class="form-group text-center">
                                <p style="color: rgb(65, 140, 236);">------OR-------</p>
                            </div>

                            <div class="form-group">
                                <a href="{{url('login/google')}}"><input class="btn btn-info btn-md form-control text-light btn-danger" value="Login With Google"></a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

</body>
</html>
