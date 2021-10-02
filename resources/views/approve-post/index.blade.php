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
                            <h5>{{ $body_title }}</h5>
                        </div>
                        <div class="col-md-6 d-none " id ="edit_data">
                            <div class="float-right">
                                <button onclick="fetch_data()" class="btn btn-primary btn-icon text-center"><i class="fa fa-list"></i></button>
                                <input type="hidden" id="page_input">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-block">
                    <div id="list_data" class='row mb-3'>
                        <div class="col-md-4">
                            <div class="input-group">
                                <select name="position_name" id="position_name" class="form-control">
                                    <option value="">Select one</option>
                                    <option value="1">Paking Supervisors</option>
                                    <option value="2">Machine Supervisors</option>
                                    <option value="3">Machine Operator</option>
                                    <option value="4">Despatched Operator</option>
                                    <option value="5">Paking Operator</option>
                                    <option value="6">Quality Assurance Incharge</option>
                                    <option value="7">Scanning Operator</option>
                                    <option value="8">Quality Assurance Operator</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="text" id="phone_number" class="form-control" placeholder="Mobile No" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="text" id="national_id" class="form-control" placeholder="National ID" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="text" id="roll_number" class="form-control" placeholder="Roll Number" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <button id='btn_search' class="btn btn-sm btn-primary" type="button">Search</button>
                            </div>
                        </div>
                    </div>
                    <div id="field-content">
                        @include('approve-post.home',compact('data'))
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



@section('page_script')

<script>

        $('#btn_search').click(function(){
            $('#page_input').val(1);
            fetch_data();

        });

        $(document).on('click', '.pagination a', function(event){
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            $('#page_input').val(page)
            fetch_data();
        });

        function fetch_data()
        {
            var page=$('#page_input').val();
            var position_name =$('#position_name').val();
            var phone_number=$('#phone_number').val();
            var national_id=$('#national_id').val();
            var roll_number=$('#roll_number').val();
            $.ajax({
                url:"{{ asset('/') }}admin/posts-approve/fetch_data?page="+page + 
                '&position_name=' + position_name +
                '&phone_number=' + phone_number +
                '&national_id=' + national_id +
                '&roll_number=' + roll_number,
                beforeSend: function(){
                    $("#load_active").addClass('is-active');
                },
                success:function(data)
                {
                    $('#list_data').removeClass('d-none');
                    $('#edit_data').addClass('d-none');
                    $('#field-content').html(data);
                },
                complete:function(data){
                    $("#load_active").removeClass('is-active');
                }

            });
        }

    
</script>






<div class="modal" id="master_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div id='modal_data' class="modal-dialog" role="document">

    </div>
</div>
<script type='text/javascript'>
   

    function edit_master(id){
        $('#list_data').addClass('d-none');
        $('#edit_data').removeClass('d-none');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{ route('posts.edit') }}",
            type: 'post',
            data: {id:id},
            beforeSend: function(){
                $("#load_active").addClass('is-active');
            },
            success: function(response){

                $('#field-content').html(response);
            },
            complete:function(data){
                $("#load_active").removeClass('is-active');
            }
        });
    }


    function delete_master(id){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('posts.deleteShow') }}",
                type: 'post',
                data: {id:id},
                beforeSend: function(){
                    $("#load_active").addClass('is-active');
                },
                success: function(response){
                    $('#modal_data').html(response);
                    $('#master_modal').modal('show');
                },
                complete:function(data){
                    $("#load_active").removeClass('is-active');
                }
            });
    }


    function delete_record(id){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{ route('posts.destroy') }}",
            type: 'post',
            data: {id:id},
            dataType:'json',
            beforeSend: function(){
                $("#load_active").addClass('is-active');
            },
            success: function(response){
                if(response.success){
                    setSuccess(response.success)
                    fetch_data();
                    $('#master_modal').modal('hide');
                }else{
                    setError(response.error)
                }
            },
            complete:function(data){
                $("#load_active").removeClass('is-active');
            }
        });
    }




    function setError(error_data){
        Command: toastr["error"](error_data);
    }
    function setSuccess(success_data){
        Command: toastr["success"](success_data);
    }

</script>


@endsection
