<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PrintAdmit extends Controller
{
    
    public function index(Request $request)
    {
        $data = Post::orderBy('id', 'DESC')->whereStatus(1)->paginate(10);
        $temp_data['data'] = $data;
        $temp_data['title'] = 'Approve Application List';
        $temp_data['body_title'] = 'Approve Application List';
        return view('approve-post.index', $temp_data);
    }


    function pagination(Request $request)
    {
        if ($request->ajax()) {

            $searchQuery = trim($request->query('search'));

            $requestData = ['phone_number', 'roll_number', 'national_id', 'email'];
            $data = Post::where(function ($q) use ($requestData, $searchQuery) {
                foreach ($requestData as $field)
                    $q->orWhere($field, 'like', "%{$searchQuery}%");
            })->where('status', 1)->paginate(10);

            $temp_data['data'] = $data;
            $temp_data['title'] = 'Application List';
            $temp_data['body_title'] = 'Application List';

            return view('approve-post.home', $temp_data)->render();
        }
    }

}