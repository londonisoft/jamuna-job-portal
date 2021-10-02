@extends('master')
@section('title',$title)
@section('body')
<div id='main_contant'>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h5>{{  $title }}</h5>
                    </div>
                    <div class="col-md-6 ">

                    </div>
                </div>
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <form action='' method='post' id='form_submit' enctype="multipart/form-data">

                            <img src="{{ image_url($setting->favicon) }}" width="20px" height="20px">
                            <div class="form-group">
                                <label class="lavel-form">Favicon :</label>
                                <input  type="file" name="favicon"  class="form-control">
                                <span class="text-danger" id='favicon'></span>
                            </div>
                            <img src="{{ image_url($setting->logo) }}" width="150px">
                            <div class="form-group">
                                <label class="lavel-form">Logo :</label>
                                <input  type="file" name="logo"  class="form-control">
                                <span class="text-danger" id='logo'></span>
                            </div>
                            <img src="{{ image_url($setting->home_banner) }}" width="200px">
                            <div class="form-group">
                                <label class="lavel-form">Home banner :</label>
                                <input  type="file" name="home_banner"  class="form-control">
                                <span class="text-danger" id='home_banner'></span>
                            </div>
                            <div class="form-group">
                                <label class="lavel-form">Phone : <span class="text-danger">*</span></label>
                                <input  type="text" value="{{ $setting->phone }}" name="phone" placeholder="Enter phone" class="form-control">
                                <span class="text-danger" id='phone'></span>
                            </div>

                                <div class="form-group">
                                <label class="lavel-form">Email : <span class="text-danger">*</span></label>
                                <input  type="text" value="{{ $setting->email }}" name="email" placeholder="Enter email" class="form-control">
                                <span class="text-danger" id='email'></span>
                            </div>

                            <div class="form-group">
                                <label class="lavel-form mt-3">Address : <span class="text-danger">*</span></label>
                                <textarea name='address' id='summernote4' rows="6" class="form-control">{!! $setting->address !!}</textarea>
                                <span class="text-danger" id='address'></span>
                            </div>

                            <div class="form-group">
                                <label class="lavel-form">Facebook link : <span class="text-danger">*</span></label>
                                <input  type="text" value="{{ $setting->facebook_link }}" name="facebook_link" placeholder="Enter facebook link" class="form-control">
                                <span class="text-danger" id='facebook_link'></span>
                            </div>
                            <div class="form-group">
                                <label class="lavel-form">Youtube link : <span class="text-danger">*</span></label>
                                <input  type="text" value="{{ $setting->youtube_link }}" name="youtube_link" placeholder="Enter youtube link" class="form-control">
                                <span class="text-danger" id='youtube_link'></span>
                            </div>
                            <div class="form-group">
                                <label class="lavel-form">Github link : <span class="text-danger">*</span></label>
                                <input  type="text" value="{{ $setting->github_link }}" name="github_link" placeholder="Enter github link" class="form-control">
                                <span class="text-danger" id='github_link'></span>
                            </div>
                            <div class="form-group">
                                <label class="lavel-form">Twitter link: <span class="text-danger">*</span></label>
                                <input  type="text" value="{{ $setting->twitter_link }}" name="twitter_link" placeholder="Enter twitter link" class="form-control">
                                <span class="text-danger" id='twitter_link'></span>
                            </div>
                            <div class="form-group">
                                <label class="lavel-form">Instagram link: <span class="text-danger">*</span></label>
                                <input  type="text" value="{{ $setting->instagram_link }}" name="instagram_link" placeholder="Enter instagram link" class="form-control">
                                <span class="text-danger" id='instagram_link'></span>
                            </div>
                            <div class="form-group">
                                <label class="lavel-form">Copy right: <span class="text-danger">*</span></label>
                                <input  type="text" value="{{ $setting->copy_right }}" name="copy_right" placeholder="Enter copy right" class="form-control">
                                <span class="text-danger" id='copy_right'></span>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                <button type="button" id='btn_submit' class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection







@section('page_script')

    <script>
        $('#form_submit').on('click','#btn_submit',function(){
            var formData = new FormData($('#form_submit')[0]);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('setting.store') }}",
                type: 'post',
                data: formData,
                dataType: 'json',
                contentType: false,
                processData: false,
                beforeSend: function(){
                    $("#load_active").addClass('is-active');
                },
                success: function(response){
                    if(response.success){
                        setSuccess(response.success);
                        close_btn();

                    }else{
                        $.each(response, function( index, value ) {
                            $('#'+index).html(value);
                        });
                    }
                    return false
                },
                complete:function(data){
                    $("#load_active").removeClass('is-active');
                }
            });
        });




 </script>



<script>





    $('#summernote4').summernote({
        styleTags: [
        'p',
            { title: 'Blockquote', tag: 'blockquote', className: 'blockquote', value: 'blockquote' },
            'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
        ],
        placeholder: 'Enter Desctiption',
        tabsize: 2,
        height: 400
      });



 function setError(error_data){
        Command: toastr["error"](error_data);
    }
    function setSuccess(success_data){
        Command: toastr["success"](success_data);
    }
 function close_btn(){
        location.reload();
        setSuccess(response.success);

    }
</script>

@endsection

