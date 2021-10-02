<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::first();
        $temp_data['setting'] = $setting;
        $temp_data['title'] = 'Edit Setting';
        $temp_data['body_title'] = 'Edit Setting';

        return view('setting.index', $temp_data);
    }


    public function update(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('favicon')) {
            $image = $request->file('favicon')->store('favicon');
            $input['favicon'] = $image;
        }
        if ($request->hasFile('logo')) {
            $image = $request->file('logo')->store('logo');
            $input['logo'] = $image;
        }
        if ($request->hasFile('home_banner')) {
            $image = $request->file('home_banner')->store('home_banner');
            $input['home_banner'] = $image;
        }
        try {
            $data = Setting::first();
            $data->update($input);
            $result['success'] = 'Record successfully updated.';
            return json_encode($result);
        } catch (\Exception $e) {
            $result['error'] = $e->getMessage();
            return json_encode($result);
        }
    }
}
