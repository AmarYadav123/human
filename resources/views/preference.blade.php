@extends('master');
@section('title','Preference')
@section('content')



    <div class="card">
        @if(session('message'))

		     <p class ="alert alert-success">
		     	{{session('message')}}
		     </p>

		@endif
        <div class="card-body  text-dark m-100">

            <h2 class="text-center">Enter Your Preference</h2>

            <form action="{{url('preference')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Expected Income</label>
                    <input type="text" name="income" class="form-control" class="form-control">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect2">Occupation</label>
                    <select name="occupation" id="exampleFormControlSelect2" class="form-control">
                        <option value="select">Select</option>
                        <option value="private">Private Job</option>
                        <option value="government">Government Job</option>
                        <option value="business">Business</option>

                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Family Type</label>
                    <select name="family" class="form-control" id="exampleFormControlSelect1">
                      <option value="select"></option>
                      <option value="joint">Joint family</option>
                      <option value="nuclear">Nuclear family</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect3">Manglik</label>
                    <select name="manglik" class="form-control" id="exampleFormControlSelect3">
                      <option value="select">Select</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>
                    </select>
                </div>


                <button type="submit" class="btn btn-primary">Search</button>

            </form>

        </div>
    </div>




@endsection
