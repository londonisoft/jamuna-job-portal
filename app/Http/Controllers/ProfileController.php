<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function index()
    {
        $data = Auth::user();
        $temp_data['data']=$data;
        $temp_data['title']='Update Profile';
        $temp_data['body_title']='Update Profile';
        return view('profile.index',$temp_data);
    }


    public function update(Request $request)
    {


      //  $id= $request->id;

        $rule=[
            'name' => 'required',
            'email' => 'required',
        ];

        $errors=inputValidator($request->all(),$rule);
        if($errors == 'success'){

            try{
                $input= $request->all();
                $user=Auth::user();

                if($request->hasFile('image')){
                    $image=$request->file('image')->store('image');
                    $user->image=$image;
                    $user->save();
                }

                $user->update($input);
                $result['success']='Record update successfully';
                return json_encode($result);
            }catch(Exception $e){

                $result['error']=$e->getMessage();
                return json_encode($result);
            }


        }else{
            return json_encode($errors);
        }




    }






    public function passwordUpdate(Request $request)
    {

        $id= $request->id;

        $rule=[
            'old_password'=>'required|min:6' ,
            'new_password'=>'required|min:6' ,
            'confirm_password'=>'required|min:6|same:new_password' ,
        ];

        $errors=inputValidator($request->all(),$rule);
        if($errors == 'success'){

            try{

                $user=Auth::user();
                if(password_verify($request->old_password,$user->password)){

                    Auth::user()->update([
                        'password'=>bcrypt($request->new_password),
                    ]);

                    $result['success']='Record update successfully';
                    return json_encode($result);
                }else{
                    $result['error']='Your old password incorrect.';
                    return json_encode($result);
                }



                $result['success']='Record update successfully';
                return json_encode($result);
            }catch(Exception $e){


                $result['error']=$e->getMessage();
                return json_encode($result);
            }





        }else{
            return json_encode($errors);
        }
    }
}
