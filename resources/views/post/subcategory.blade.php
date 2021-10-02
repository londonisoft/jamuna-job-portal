<div class="form-group">
    <label class="lavel-form">Select Sub Category :</label>
    <select class="form-control" name='sub_category_id'>
        @foreach($sub_categories as $sub_category)
        <option value="{{ $sub_category->id }}">{{ $sub_category->name }}</option>
        @endforeach
    </select>
    <span class="text-danger" id='sub_category_id'></span>
</div>
