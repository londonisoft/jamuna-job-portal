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
                            <div class="form-group">
                                <label class="lavel-form">Title : <span class="text-danger">*</span></label>
                                <input  type="text" name="title" placeholder="Enter Title" class="form-control">
                                <span class="text-danger" id='title'></span>
                            </div>
                            <div class="form-group">
                                <label class="lavel-form">Select Category : <span class="text-danger">*</span></label>
                                <select class="form-control category_id" name='category_id'>
                                    <option>---Select One---</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger" id='category_id'></span>
                            </div>
                            <div id='subcategories'>
                                <div class="form-group">
                                    <label class="lavel-form">Select Sub Category : <span class="text-danger">*</span></label>
                                    <select class="form-control" name='sub_category_id'>
                                        <option>---Select One---</option>
                                    </select>
                                    <span class="text-danger" id='sub_category_id'></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="lavel-form">Short Desctiption : <span class="text-danger">*</span></label>
                                <textarea name='short_description'  rows="3" class="form-control"></textarea>
                                <span class="text-danger" id='short_description'></span>
                            </div>
                            <div class="form-group">
                                <label class="lavel-form">Desctiption : <span class="text-danger">*</span></label>
                                <textarea name='description'  rows="3" class="form-control"></textarea>
                                <span class="text-danger" id='description'></span>
                            </div>
                            <div class="form-group">
                                <label class="lavel-form">{{ "Enter Tag (If multiple use comma) :" }}</label>
                                <input  type="text" name="tag" placeholder="html,css,php" class="form-control">
                                <span class="text-danger" id='tag'></span>
                            </div>
                            <div class="form-group">
                                <label class="lavel-form">Image :</label>
                                <input  type="file" name="image"  class="form-control">
                                <span class="text-danger" id='image'></span>
                            </div>
                            <div class="form-group">
                                <label class="lavel-form">Status : <span class="text-danger">*</span></label><br>
                                <input  value='1' checked type="radio" name="status"> <span>  Active</span>
                                <input value='0'  type="radio" name="status"> <span>  Inactive</span>
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
                url: "{{ route('posts.store') }}",
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


        $('.category_id').change(function(){

            var category_id=$('.category_id').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('posts.sub_categories') }}",
                type: 'post',
                data: {category_id:category_id},
                dataType: 'text',
                beforeSend: function(){
                    $("#load_active").addClass('is-active');
                },
                success: function(response){
                    $('#subcategories').html(response) ;
                },
                complete:function(data){
                    $("#load_active").removeClass('is-active');
                }
            });






        })


 </script>



<script>



    $('#add_new').click(function(){
        var random_id=Math.floor(Math.random() * 100) + 1;
        var random_id_two=Math.floor(Math.random() * 100) + 1;

        var data ='<div class="row">\
            <div class="col-10">\
                <label class="lavel-form mt-3">Desctiption : <span class="text-danger">*</span></label>\
                <textarea name="description[]" id="'+random_id+'" rows="6" class="form-control"></textarea>\
                <span class="text-danger" id="description"></span>\
                <label class="lavel-form mt-3">Code : <span class="text-danger">*</span></label>\
                <textarea name="code[]" id="'+random_id_two+'" rows="6" class="form-control"></textarea>\
                <span class="text-danger" id="code"></span>\
            </div>\
            <div class="col-2">\
                <button type="button" onclick="remove_item('+random_id+')" class="btn btn-danger mt-5">Remove</button>\
            </div>\
        </div>';

        const ids='#'+random_id;
        $('#append_data').append(data);

        $(ids).summernote({
            styleTags: [
            'p',
                { title: 'Blockquote', tag: 'blockquote', className: 'blockquote', value: 'blockquote' },
                'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
            ],
            placeholder: 'Enter Desctiption',
            tabsize: 2,
            height: 300
          });

          var ids_two='#'+random_id_two;

          $(ids_two).summernote({

            toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']]
            ],
            height: 300

        });



    })


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



    $('#summernote_code').summernote({

        toolbar: [
        // [groupName, [list of button]]
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']]
        ],
        height: 300

    });







    function remove_item(random_id){
        $('#'+random_id).parent().parent().remove();
    }
</script>
