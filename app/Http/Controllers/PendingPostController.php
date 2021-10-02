<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PendingPostController extends Controller
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
        $data = $query->orderBy('id', 'DESC')->whereStatus(0)->paginate(50);

        $temp_data['data'] = $data;
        $temp_data['title'] = 'Pending Application List';
        $temp_data['body_title'] = 'Pending Application List';
        return view('pending-post.index', $temp_data);
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
            $data = $query->orderBy('id', 'DESC')->whereStatus(0)->paginate(50);

            $temp_data['data'] = $data;
            $temp_data['title'] = 'Pending Application List';
            $temp_data['body_title'] = 'Pending Application List';

            return view('pending-post.home', $temp_data)->render();
        }
    }
}