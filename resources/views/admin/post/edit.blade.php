<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h5>{{  $title }}</h5>
                    </div>
                    <div class="col-md-6 ">
                        <div class="float-right">
                            <button onclick="close_btn()" class="btn btn-primary btn-icon text-center"><i class="fa fa-list"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <form action='' method='post' id='form_submit' enctype="multipart/form-data">
                           <input type="hidden" value="{{ $data->id }}" name="id">
                            <div class="form-group">
                                <label class="lavel-form">Title : <span class="text-danger">*</span></label>
                                <input  type="text" name="title" value="{{ $data->title }}" placeholder="Enter Title" class="form-control">
                                <span class="text-danger" id='title'></span>
                            </div>
                            <div class="form-group">
                                <label class="lavel-form">Select Category : <span class="text-danger">*</span></label>
                                <select class="form-control category_id" name='category_id'>
                                    <option>---Select One---</option>
                                    @foreach($categories as $category)
                                    <option @if($data->category_id==$category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger" id='category_id'></span>
                            </div>
                            <div class="form-group">
                                <label class="lavel-form">Short Desctiption : <span class="text-danger">*</span></label>
                                <textarea name='short_description' rows="3" class="form-control">{{ $data->short_description }}</textarea>
                                <span class="text-danger" id='short_description'></span>
                            </div>
                            <div class="form-group">
                                <label class="lavel-form">Desctiption : <span class="text-danger">*</span></label>
                                <textarea name='description' id='summernote' rows="3" class="form-control">{{ $data->description }}</textarea>
                                <span class="text-danger" id='description'></span>
                            </div>
                            <div class="form-group">
                                <label class="lavel-form">{{ "Enter Tag (If multiple use comma) :" }}</label>
                                @php
                                    if($data->tag!=''){
                                        $exp_tags='';
                                        foreach(json_decode($data->tag) as $value){
                                            $exp_tags.=$value.',';
                                        }
                                        $exp_tags=rtrim($exp_tags,',');
                                    }else{
                                        $exp_tags='';
                                    }
                                @endphp
                                <input  type="text" name="tag" value="{{ $exp_tags  }}" placeholder="html,css,php" class="form-control">
                                <span class="text-danger" id='tag'></span>
                            </div>
                            <div class="form-group">
                                <img src="{{ image_url($data->image) }}" height="40" width="100"><br>
                                <label class="lavel-form">Image :</label>
                                <input  type="file" name="image"  class="form-control">
                                <span class="text-danger" id='image'></span>
                            </div>
                            <div class="form-group">
                                <label class="lavel-form">Status :</label><br>
                                <input  value='1' @if($data->status==1)checked @endif type="radio" name="status"> <span>  Active</span>
                                <input value='0' @if($data->status==0)checked @endif  type="radio" name="status"> <span>  Inactive</span>
                                <span class="text-danger" id='status'></span>
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
    <script>
        $('#form_submit').on('click','#btn_submit',function(){
            var formData = new FormData($('#form_submit')[0]);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('posts.update') }}",
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

        $('#summernote').summernote({
        styleTags: [
        'p',
            { title: 'Blockquote', tag: 'blockquote', className: 'blockquote', value: 'blockquote' },
            'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
        ],
        placeholder: 'Enter Desctiption',
        tabsize: 2,
        height: 300
      });


    </script>