<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body style="background-color: rgb(143, 202, 241)">

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <br><br><br><br>
                <div class="card">
                    <div class="card-body w-100">

                        <h2 class="text-center"><b>Preference Search Result</b></h2>

                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Annual Income</th>
                                <th scope="col">Email</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                @foreach ($data1 as $a)
                                  <td>{{$a->first_name}}</td>
                                  <td>{{$a->annual_income}}</td>
                                  <td>{{$a->email}}</td>
                                @endforeach
                              </tr>

                            </tbody>
                          </table>
                          <a href="{{url('dashboard/preference')}}"><button type="button" class="btn btn-primary btn-lg btn-block">Return TO Search</button></a>

                    </div>




                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

</body>
</html>
