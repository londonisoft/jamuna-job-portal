<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class addPostController extends Controller
{
    
    public function index(Request $request)
    {
        $query = Post::query();
        if ($request->phone_number) {
            $query->where('phone_number', $request->phone_number);
        }
        if ($request->roll_number) {
            $query->where('roll_number', $request->roll_number);
        }
        
        if ($request->national_id) {
            $query->where('national_id', $request->national_id);
        }
        if ($request->position_name) {
            $query->where('position_name', $request->position_name);
        }
        $data = $query->orderBy('id', 'DESC')->paginate(50);



        $temp_data['data'] = $data;
        $temp_data['page'] = $data->currentPage();
        $temp_data['title'] = 'Application List';
        $temp_data['body_title'] = 'Application List';
        return view('post.index', $temp_data);
    }

    function pagination(Request $request)
    {
        if ($request->ajax()) {

            $query = Post::query();
            if ($request->phone_number) {
                $query->where('phone_number', $request->phone_number);
            }
            if ($request->roll_number) {
                $query->where('roll_number', $request->roll_number);
            }
            
            if ($request->national_id) {
                $query->where('national_id', $request->national_id);
            }
            if ($request->position_name) {
                $query->where('position_name', $request->position_name);
            }
            $data = $query->orderBy('id', 'DESC')->paginate(50);

            $temp_data['data'] = $data;
            $temp_data['page'] = $data->currentPage();
            $temp_data['title'] = 'Application List';
            $temp_data['body_title'] = 'Application List';

            return view('post.home', $temp_data)->render();
        }
    }

   


    public function edit(Request $request)
    {
        $id = $request->id;

        try {
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
            )->findOrFail($id);
            $temp_data['data'] = $data;
            $temp_data['title'] = 'Application show';
            return view('post.edit', $temp_data);
        } catch (\Exception $e) {
            $result['error'] = $e->getMessage();
            return json_encode($result);
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rule = [
            'title' => 'required|unique:posts,title,' . $request->id,
            'status' => 'required'
        ];

        $errors = inputValidator($request->all(), $rule);
        if ($errors == 'success') {

            try {
                $post = Post::findOrFail($request->id);
                $input = $request->all();

                if ($request->hasFile('image')) {
                    $image = $request->file('image')->store('image');
                    $input['image'] = $image;
                } else {
                    $input['image'] = $post->image;
                }

                $input['slug'] = Str::slug($request->title);
                $input['user_id'] = auth()->user()->id;
                $input['tag'] = json_encode(explode(',', $request->tag));
                $post->update($input);

                $result['success'] = 'Record successfully updated.';
                return json_encode($result);
            } catch (\Exception $e) {
                $result['error'] = $e->getMessage();
                return json_encode($result);
            }
        } else {
            return json_encode($errors);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show_delete(Request $request)
    {
        $data['title'] = 'Delete Application';
        $data['del_id'] = $request->id;
        return view('post.delete', $data);
    }

    public function destroy(Request $request)
    {
        try {
            $post = Post::find($request->id);
            $status = $post->status == 0 ? 1 : 0;
            $post->status = $status;
            $post->save();
            $result['success'] = 'Application Status Change Successfully.';
            return json_encode($result);
        } catch (\Exception $e) {
            $result['error'] = $e->getMessage();
            return json_encode($result);
        }
    }
}