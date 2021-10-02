<?php

use Illuminate\Support\Facades\Validator;


if (!function_exists('setSuccess')) {
    function setSuccess($message)
    {
        Session::flash('type', 'success');
        Session::flash('message', $message);
    }
}

if (!function_exists('image_url')) {
    function image_url($url)
    {
        $file_url = 'uploads/' . $url;
        if (!empty($url) && file_exists($file_url)) {
            return asset($file_url);
        } else {
            return asset('/frontend/assets/img/image-not-available.png');
        }
    }
}

if (!function_exists('file_remove')) {
    function file_remove($url)
    {
        $file_url = 'core/public/' . $url;
        if (!empty($url) && file_exists($file_url)) {
            unlink($file_url);
        }
    }
}

if (!function_exists('setError')) {
    function setError($message)
    {
        Session::flash('type', 'error');
        Session::flash('message', $message);
    }
}

if (!function_exists('inputValidator')) {
    function inputValidator($input = [], $rule)
    {
        $validator = Validator::make($input, $rule);
        if ($validator->passes()) {
            return 'success';
        } else {
            if ($validator->fails()) {
                return $validator->errors();
            }
        }
    }
}
// if(! function_exists('inputValidator')){
//     function inputValidator($input=[],$rule){
//         $validator=Validator::make($input,$rule);
//         if($validator->passes()){
//             return true;
//         }else{
//             return redirect()->back()
//                 ->withErrors($validator)
//                 ->withInput();
//         }
//     }
// }

if (!function_exists('respondWithSuccess')) {

    function respondWithSuccess($data = [])
    {
        return response()->json($data);
    }
}

if (!function_exists('respondWithError')) {

    function respondWithError($message = '', $data = [], $code = 400)
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $data
        ], $code);
    }
}

/*if(!function_exists('respondWithError')){

    function respondWithError($message='',$data=[],$code=400){
        return response()->json([
            'success'=>true,
            'message'=>$message,
            'data'=>$data
        ],$code);
    }
}
*/

if (!function_exists('sms_onnorokom')) {

    function sms_onnorokom($sms_user, $password, $text, $number)
    {

        $soapClient = new SoapClient("https://api2.onnorokomsms.com/sendsms.asmx?wsdl");
        $paramArray = array(
            'userName' => $sms_user,
            'userPassword' => $password,
            'messageText' => $text,
            'numberList' => "01730233032,01846528240",
            'smsType' => "TEXT",
            'maskName' => "",
            'campaignName' => '',
        );


        $value = $soapClient->__call("OneToMany", $paramArray);
    }
}