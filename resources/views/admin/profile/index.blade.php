@extends('master')
@section('title',$title)
@section('body')
<div id='main_contant'>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12">
                            <h5>{{ $body_title }}</h5>
                        </div>

                    </div>
                </div>

                <div class="card-block">

                    <div class="row">
                        <div class="col-lg-12 col-xl-12">
                            <ul class="nav nav-tabs md-tabs " role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><i class="fa fa-user">  </i>  Profile</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><i class="fa fa-lock"></i>  Password</a>
                                    <div class="slide"></div>
                                </li>

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content card-block">
                                <div class="tab-pane active" id="home7" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xs-2 col-md-2"></div>
                                        <div class="col-xs-8 col-sm-12 col-md-8">
                                            <div class="text-center">
                                                <img src="{{ image_url($data->image) }}" style="border-radius:50px;border:1px solid gray" width="100" height="100">
                                            </div>
                                            <form action='' method='post' id='form_submit' enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <label class="lavel-form">Image:</label>
                                                        <input   type="file" name="image" class="form-control">
                                                        <span class="text-danger" id='image'></span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <label class="lavel-form">Name:</label>
                                                        <input  value="{{  $data->name }}" type="text" name="name" placeholder="Enter name" class="form-control">
                                                        <span class="text-danger" id='name'></span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <label class="lavel-form">Email:</label>
                                                        <input value="{{  $data->email }}"  type="email" name="email" placeholder="Enter email" class="form-control">
                                                        <span class="text-danger" id='email'></span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                                    <button type="button" id='btn_submit' class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                        <div class="col-xs-2 col-md-2"></div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="profile7" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xs-2 col-md-2"></div>
                                        <div class="col-xs-8 col-sm-12 col-md-8">
                                            <form action='' method='post' id='form_password'>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <label class="lavel-form">Old Password:</label>
                                                        <input   type="password" name="old_password" placeholder="Enter old password" class="form-control">
                                                        <span class="text-danger" id='old_password'></span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <label class="lavel-form">New Password:</label>
                                                        <input   type="password" name="new_password" placeholder="Enter new password" class="form-control">
                                                        <span class="text-danger" id='new_password'></span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <label class="lavel-form">Confirm Password:</label>
                                                        <input   type="password" name="confirm_password" placeholder="Enter confirm password" class="form-control">
                                                        <span class="text-danger" id='confirm_password'></span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                                    <button type="button" id='btn_update' class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                        <div class="col-xs-2 col-md-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        console.log(formData)
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{ route('profile.update') }}",
            type: 'post',
            data: formData,
            dataType: 'json',
            contentType: false,
            processData: false,
            beforeSend: function(){
                $("#load_active").addClass('is-active');
            },
            success: function(response){
                if(response.error){
                    setError(response.error);
                }
                else if(response.success){
                    setSuccess(response.success);
                }else{
                    $.each(response, function( index, value ) {
                        $('#'+index).html(value);
                    });
                }
            },
            complete:function(){
                $("#load_active").removeClass('is-active');
            }
        });
    });


    $('#form_password').on('click','#btn_update',function(){
        data= $('#form_password').serialize();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{ route('password.update') }}",
            type: 'post',
            data: data,
            dataType: 'json',
            beforeSend: function(){
                $("#load_active").addClass('is-active');
            },
            success: function(response){
                if(response.error){
                    setError(response.error);
                }
                else if(response.success){
                    setSuccess(response.success);
                }else{
                    $.each(response, function( index, value ) {
                        $('#'+index).html(value);
                    });
                }
            },
            complete:function(){
                $("#load_active").removeClass('is-active');
            }
        });
    });

    function setError(error_data){
        Command: toastr["error"](error_data);
    }
    function setSuccess(success_data){
        Command: toastr["success"](success_data);
    }

</script>


@endsection
