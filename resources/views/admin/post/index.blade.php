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
                        <div class="col-md-6 ">
                            @can('post-create')
                            <div class="float-right">
                                <button onclick="create_master()" class="btn btn-primary btn-icon text-center"><i class="fa fa-plus"></i></button>
                            </div>
                            @endcan
                        </div>
                    </div>
                </div>

                <div class="card-block">
                    <div class='row mb-3'>
                        <div class="col-md-4">
                            <div class="input-group mb-3">
                                <input type="text" id="search_value" class="form-control" placeholder="Search" >
                                <div class="input-group-append">
                                  <button id='btn_search' class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div id="field-content">
                        @include('post.home',compact('data'))
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



@section('page_script')

<script>
    $(document).ready(function(){

        $('#btn_search').click(function(){
            var value=$('#search_value').val();
            fetch_data(0,value);
        });

        $(document).on('click', '.pagination a', function(event){
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            var value=$('#search_value').val();

            fetch_data(page,value);
        });

        function fetch_data(page,search)
        {
                $.ajax({
                url:"{{ asset('/') }}admin/posts/fetch_data?page="+page + '&search=' + search,
                beforeSend: function(){
                    $("#load_active").addClass('is-active');
                },
                success:function(data)
                {
                    $('#field-content').html(data);
                },
                complete:function(data){
                    $("#load_active").removeClass('is-active');
                }

            });
        }

    });
</script>






<div class="modal" id="master_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div id='modal_data' class="modal-dialog" role="document">

    </div>
</div>
<script type='text/javascript'>
    function close_btn(){
        location.reload();
        setSuccess(response.success);

    }
    function create_master(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{ route('posts.create') }}",
            type: 'post',
            data: {},
            beforeSend: function(){
                $("#load_active").addClass('is-active');
            },
            success: function(response){
                $('#main_contant').html(response);
            },
            complete:function(data){
                $("#load_active").removeClass('is-active');
            }
        });
    }

    function show_master(id){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{ route('posts.show') }}",
            type: 'post',
            data: {id:id},
            beforeSend: function(){
                $("#load_active").addClass('is-active');
            },
            success: function(response){
                $('#main_contant').html(response);
            },
            complete:function(data){
                $("#load_active").removeClass('is-active');
            }
        });
    }

    function edit_master(id){
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
                $('#main_contant').html(response);
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
                    location.reload()
                }else{
                    setError(response.error)
                    location.reload()

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
