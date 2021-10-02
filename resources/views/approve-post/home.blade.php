<div class="table-responsive">
<table class="table table-sm table-bordered">
    <thead>
      <tr>
        <th scope="col">Sl No</th>
        <th scope="col">Position Name</th>
        <th scope="col">Applicant Name</th>
        <th scope="col">Mobile</th>
        <th scope="col">Nid</th>
        <th scope="col">Roll</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $key=>$value)
            <tr>
                <td>{{  (($data->currentPage() - 1) * 50) + ($key+1)  }}</td>
                <td>
                    @if($value['position_name'] == 1)
                        Paking Supervisors
                    @elseif($value['position_name'] == 2)
                        Machine Supervisors
                    @elseif($value['position_name'] == 3)
                        Machine Operator
                    @elseif($value['position_name'] == 4)
                        Despatched Operator
                    @elseif($value['position_name'] == 5)
                        Paking Operator
                    @elseif($value['position_name'] == 6)
                        Quality Assurance Incharge
                    @elseif($value['position_name'] == 7)
                        Scanning Operator
                    @elseif($value['position_name'] == 8)
                        Quality Assurance Operator
                    @endif
                </td>
                <td>{{ $value['candidate_name'] }} </td>
                <td>{{ $value['phone_number'] }} </td>
                <td>{{ $value['national_id'] }} </td>
                <td>{{ $value['roll_number'] }} </td>
                <td>
                    @if($value['status']=='1')
                        <span class="badge badge-success">Approve</span>
                    @else
                    <span class="badge badge-danger">Pending</span>
                    @endif
                </td>
                <td width='15%'>
                    <button type="button" onclick="edit_master({{ $value['id'] }})" class="btn btn-action btn-info">View</button>
                     @if($value['status']=='1')
                        <button type="button" onclick="delete_master({{ $value['id'] }})" class="btn btn-action btn-danger">Discard</button>
                    @else
                    <button type="button" onclick="delete_master({{ $value['id'] }})" class="btn btn-action btn-info">Approve</button>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
  {!! $data->links('pagination::bootstrap-4') !!}

  <div>

