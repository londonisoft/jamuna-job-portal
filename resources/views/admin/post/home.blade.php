<div class="table-responsive">
<table class="table table-sm table-bordered">
    <thead>
      <tr>
        <th scope="col">Sl No</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $key=>$value)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $value['title'] }} </td>
                <td>{{ $value->category->name }} </td>
                <td>
                    @if($value['status']=='1')
                        <span class="badge badge-success">Active</span>
                    @else
                    <span class="badge badge-danger">Inactive</span>
                    @endif
                </td>
                <td width='15%'>
                    @can('post-edit')
                    <button type="button" onclick="edit_master({{ $value['id'] }})" class="btn btn-action btn-info"><i class="fa fa-edit"></i></button>
                    @endcan
                    @can('post-delete')
                    <button type="button" onclick="delete_master({{ $value['id'] }})" class="btn btn-action btn-danger"><i class="fa fa-remove"></i></button>
                    @endcan
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
  {!! $data->links() !!}

  <div>

