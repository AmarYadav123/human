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
        <br>
        <h2 class="text-center">Registraction Form</h2>
        <div class="card">
            <div class="card-body">


    <form action="{{url('insert_data')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputname" class="form-label">First Name</label>
            <input type="text" name="first name" class="form-control" id="exampleInputname" >
        </div>

        <div class="mb-3">
            <label for="exampleInputlast" class="form-label">Last Name</label>
            <input type="text" name="last name" class="form-control" id="exampleInputlast" >
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputdate" class="form-label">D.O.B</label>
            <input type="date" name="date of birth" class="form-control" id="exampleInputdate" >
        </div>

        <div class="mb-3 form-group">
            <label for="exampleInputgender" class="form-label">Gender</label>
            <select name="gender" id="exampleInputgender" class="form-control">
                <option value="select">Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="others">Others</option>
            </select>
        </div>


        <div class="mb-3">
            <label for="exampleInputincome" class="form-label">Annual Income</label>
            <input type="text" name="annual income" class="form-control" id="exampleInputincome" >
        </div>

        <div class="mb-3 form-group">
            <label for="exampleInputoccupation" class="form-label">Occupation</label>
            <select name="occupation" id="exampleInputoccupation" class="form-control">
                <option value="select">Select</option>
                <option value="private">Private job</option>
                <option value="government">Government Job</option>
                <option value="business">Business</option>
            </select>

        </div>


        <div class="mb-3 form-group">
            <label for="exampleInputfamily" class="form-label">Family type</label>
            <select name="family" id="exampleInputfamily" class="form-control">
                <option value="select">Select</option>
                <option value="joint">Joint family</option>
                <option value="nuclear">Nuclear family</option>
                <option value="others">Others</option>
            </select>

        </div>

        <div class="mb-3 form-group">
            <label for="exampleInputfamily" class="form-label">Manglik</label>
            <select name="manglik" id="exampleInputfamily" class="form-control">
                <option value="select">Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>

            </select>

        </div>




        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
        </div>
    </div>

</body>
</html>
