<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\File;
use Exception;
use Illuminate\Support\Facades\DB;
use Validator;
use Session;

class PostController extends Controller
{
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), 
        [
            'position_name' => 'required',
            'candidate_name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'gender' => 'required',
            'marital_status' => 'required',
            'present_village' => 'required',
            'present_post_office' => 'required',
            'present_thana' => 'required',
            'present_district' => 'required',
            'permanent_village' => 'required',
            'permanent_thana' => 'required',
            'permanent_post_office' => 'required',
            'permanent_district' => 'required',
            'dob' => 'required',
            'age' => 'required',
            'email' => 'required|unique:posts,email',
            'national_id' => 'required|unique:posts,national_id',
            // 'weight' => 'required',
            // 'height' => 'required',
            'religion' => 'required',
            'nationality' => 'required',
            'national_id' => 'required',
            // 'birth_number' => 'required',
            'phone_number' => 'required|unique:posts,phone_number',
            'applicant_image' => 'required|max:300|mimes:jpg,png,jpeg',
            'signature' => 'required|max:300|mimes:jpg,png,jpeg',
            'date' => 'required',
            'alldocument' => 'max:1000',
        ]);
        Session::flash('error', $validator->messages());

        if ($validator->fails()) {

            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }


        DB::beginTransaction();
        try {

        $post = new Post;
        $last_roll = DB::table('posts')->orderBy('id', 'desc')->get();
        // dd($last_roll[0]->roll_number);
        $post->position_name = $request->position_name;
        $post->candidate_name = $request->candidate_name;
        $post->father_name = $request->father_name;
        $post->mother_name = $request->mother_name;
        $post->present_village = $request->present_village;
        $post->present_post_office = $request->present_post_office;
        $post->present_thana = $request->present_thana;
        $post->present_district = $request->present_district;
        $post->permanent_village = $request->permanent_village;
        $post->permanent_thana = $request->permanent_thana;
        $post->permanent_post_office = $request->permanent_post_office;
        $post->permanent_district = $request->permanent_district;
        $post->dob = $request->dob;
        $post->age = $request->age;
        $post->religion = $request->religion;
        $post->nationality = $request->nationality;
        $post->blood_group = $request->blood_group;
        $post->national_id = $request->national_id;
        $post->birth_number = $request->birth_number;
        $post->experience = $request->experience;
        $post->gender = $request->gender;
        $post->marital_status = $request->marital_status;


       
        $post->phone_number = $request->phone_number;
        $post->email = $request->email;
        // $post->applicant_image = $request->applicant_image;

        // if ($validatedData->signature()) {
        $signature = 'sig_' . time() . '.' . $request->signature->extension();

        $request->signature->move(public_path('uploads'), $signature);
        $post->signature = $signature;
        $applicant_image = 'pho_' . time() . '.' . $request->applicant_image->extension();

        $request->applicant_image->move(public_path('uploads'), $applicant_image);
        $post->applicant_image = $applicant_image;

        // }
        $post->date = $request->date;
        // $post->alldocument = $request->alldocument;
        if (count($last_roll)) {
            $post->roll_number = $last_roll[0]->roll_number + 1;
        } else {
            $post->roll_number = 500000;
        }


            // dd($post);
            $post->save();

            $education = new Education();
            $education->app_id = $post->id;
            $education->ssc_result = $request->ssc_result;
            $education->ssc_board = $request->ssc_board;
            $education->ssc_group = $request->ssc_group;
            $education->ssc_year = $request->ssc_year;
            $education->ssc_roll = $request->ssc_roll;
        
            $education->hsc_result = $request->hsc_result;
            $education->hsc_board = $request->hsc_board;
            $education->hsc_group = $request->hsc_group;
            $education->hsc_year = $request->hsc_year;
            $education->hsc_roll = $request->hsc_roll;
        
            $education->diploma_result = $request->diploma_result;
            $education->diploma_board = $request->diploma_board;
            $education->diploma_group = $request->diploma_group;
            $education->diploma_year = $request->diploma_year;
            $education->diploma_roll = $request->diploma_roll;
        
            $education->diploma_com_result = $request->diploma_com_result;
            $education->diploma_com_board = $request->diploma_com_board;
            $education->diploma_com_group = $request->diploma_com_group;
            $education->diploma_com_year = $request->diploma_com_year;
            $education->diploma_com_roll = $request->diploma_com_roll;
        
            $education->diploma_mech_result = $request->diploma_mech_result;
            $education->diploma_mech_board = $request->diploma_mech_board;
            $education->diploma_mech_group = $request->diploma_mech_group;
            $education->diploma_mech_year = $request->diploma_mech_year;
            $education->diploma_mech_roll = $request->diploma_mech_roll;
        
            $education->degree_result = $request->degree_result;
            $education->degree_board = $request->degree_board;
            $education->degree_group = $request->degree_group;
            $education->degree_year = $request->degree_year;
            $education->degree_roll = $request->degree_roll;
        
            $education->honours_result = $request->honours_result;
            $education->honours_board = $request->honours_board;
            $education->honours_group = $request->honours_group;
            $education->honours_year = $request->honours_year;
            $education->honours_roll = $request->honours_roll;
        
            $education->masters_result = $request->masters_result;
            $education->masters_board = $request->masters_board;
            $education->masters_group = $request->masters_group;
            $education->masters_year = $request->masters_year;
            $education->masters_roll = $request->masters_roll;
            $education->save();
        

        if ($request->hasfile('alldocument')) {
            foreach ($request->file('alldocument') as $file) {
                $name = time() . rand(1, 100) . '.' . $file->extension();
                $file->move(public_path('uploads'), $name);

                $file = new File();
                $file->filenames = $name;
                $file->app_id = $post->id;
                $file->save();
                // $files[] = $name;
            }
        }

        DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return 'error';
        }
        
         $data = Post::leftJoin('educations', 'posts.id', 'educations.app_id')->select(
                "posts.*",
                "educations.*",
               "educations.ssc_result",
               "educations.ssc_board",
               "educations.ssc_group",
               "educations.ssc_year",
               "educations.ssc_roll",
               "educations.hsc_result",
               "educations.hsc_board",
               "educations.hsc_group",
               "educations.hsc_year",
               "educations.hsc_roll",
               "educations.diploma_result",
               "educations.diploma_board",
               "educations.diploma_group",
               "educations.diploma_year",
               "educations.diploma_roll",
               "educations.diploma_com_result",
               "educations.diploma_com_board",
               "educations.diploma_com_group",
               "educations.diploma_com_year",
               "educations.diploma_com_roll",
               "educations.diploma_mech_result",
               "educations.diploma_mech_board",
               "educations.diploma_mech_group",
               "educations.diploma_mech_year",
               "educations.diploma_mech_roll",
               "educations.degree_result",
               "educations.degree_board",
               "educations.degree_group",
               "educations.degree_year",
               "educations.degree_roll",
               "educations.honours_result",
               "educations.honours_board",
               "educations.honours_group",
               "educations.honours_year",
               "educations.honours_roll",
               "educations.masters_result",
               "educations.masters_board",
               "educations.masters_group",
               "educations.masters_year",
               "educations.masters_roll"
            )->findOrFail($post->id);
        
        
            return redirect('/application')->with('data', $data);

        
    }
}
