<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HumanController extends Controller
{
    public function register(){
        return view('registraction');
    }
    public function insert_data(Request $a){

        // echo "<pre>";
        // print_r($a->all());
        $data = new User();
        $data->first_name=$a->first_name;
        $data->last_name =$a->last_name;
        $data->email=$a->email;
        $data->	date_of_birth=$a->date_of_birth;
        $data->gender=$a->gender;
        $data->annual_income=$a->annual_income;
        $data->occupation=$a->occupation;
        $data->family_type=$a->family;
        $data->Manglik=$a->manglik;
        $data->	password=Hash::make($a->password);
        $data->save();

        if($data){
            return redirect('/register');
        }

    }

    public function index(){
        return view('index');

    }

    // login

    public function data_check(Request $a){
        // echo "<pre>";
        // print_r($a->all());

        $data=$a->all();
        $check_type=User::where('email',$data['mail'])->first();

        if($check_type==!null){

            if(Auth::attempt(['email' => $a->mail, 'password' => $a->password])){

                return redirect('/index');

            }

            else{

                return redirect()->back()->with('message','password was wrong');


            }




        }

        else{
            return redirect()->back()->with('message','Email Was Not Correct');
        }





    }

    public function logout(){

        Auth::logout();
        return redirect('/')->with('message','Logout Successfully');  //reduct rout of url

    }

    public function preference(){
        return view('preference');
    }

    public function preferencedata(Request $a){

        //  echo "<pre>";
        // print_r($a->all());

        $data=User::where('Manglik',$a->manglik)->where('annual_income',$a->income)->where('occupation',$a->occupation)->where('family_type',$a->family)->get();
        // echo "<pre>";
        // print_r($data->all());
        // die();

        if($data=!null){

            $data1=User::where('Manglik',$a->manglik)->where('annual_income',$a->income)->where('occupation',$a->occupation)->where('family_type',$a->family)->get();
            return view('searchresult',compact('data1'));
        }

        else{

            return redirect('dashboard/preference')->with('message','Match Was Not Found');

        }



    }
}
