<div class="row">
    <style>
          .table.table-sm td, .table.table-sm th {
              padding: 0.1rem .1rem;
              font-size: 12px;
              word-break: break-all;
                overflow-wrap: break-word;

          }
         table {
          max-width: 100%; 
        }
        table td {
          word-break: break-all;
        }
    </style>
    <div class="col-sm-12">
        <input type="button" class="btn btn-success btn-sm" onclick="printDiv('printableArea')" value="Print" />
            <div class="row">
                <div id="printableArea" class="col-xs-8 col-sm-8 col-md-8 offset-md-2" style="border: 1px solid gray; padding: 10px">
                    <table class="table">
                        <tr>
                            <td width="160px">
                                <img width="100px" class="mt-4" src="{{asset('assets/images/Jamuna logo.png')}}" }}">
                            </td>
                            <td>
                                <h4 class="mt-5 text-center" style="margin-right: 160px;">Jamuna Star Save Guard Services Ltd</h4>
                                <p class="text-center text-primary" style="margin-right: 160px;"><u>www.jssgservices.com</u></p>
                            </td>
                        </tr>
                    </table>
                    <div class="text-center">
                        <p class="text-bold"><b><u>Application Form (Applicant's Copy)</u></b></p>
                    </div>
                    <table class="table table-sm table-bordered table-striped">
                        <tr>
                            <td width="50%"><b>Roll</b> : {{ $data->roll_number }}</td>
                            <td class="text-right"><b>Date</b> : {{ Carbon\Carbon::parse($data->date)->format('d-m-Y')  }}</td>
                        </tr>
                    </table>
                    <table class="table table-sm table-bordered table-striped" width="100%">
                        <tr>
                            <td width="18%" rowspan="10">
                                <img class="p-3" width="200px" height="220px" src="{{ image_url($data->applicant_image) }}"/>
                            </td>
                        </tr>
                        <tr>
                            <td width="25%">Position name</td>
                            <td>
                            @if($data['position_name'] == 1)
                                Paking Supervisors
                            @elseif($data['position_name'] == 2)
                                Machine Supervisors
                            @elseif($data['position_name'] == 3)
                                Machine Operator
                            @elseif($data['position_name'] == 4)
                                Despatched Operator
                            @elseif($data['position_name'] == 5)
                                Paking Operator
                            @elseif($data['position_name'] == 6)
                                Quality Assurance Incharge
                            @elseif($data['position_name'] == 7)
                                Scanning Operator
                            @elseif($data['position_name'] == 8)
                                Quality Assurance Operator
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td width="25%">Candidate name</td>
                            <td>{{ $data->candidate_name }}</td>
                        </tr>
                        <tr>
                            <td width="25%">Father name</td>
                            <td>{{ $data->father_name }}</td>
                        </tr>
                        <tr>
                            <td width="25%">Mother name</td>
                            <td>{{ $data->mother_name }}</td>
                        </tr>
                        <tr>
                            <td width="25%">Phone Number</td>
                            <td>{{ $data->phone_number }}</td>
                        </tr>
                        <tr>
                            <td width="25%">Email Adress</td>
                            <td>{{ $data->email }}</td>
                        </tr>
                        <tr>
                            <td width="25%">Date Of Birth</td>
                            <td>{{ $data->dob }}</td>
                        </tr>
                        <tr>
                            <td width="25%">Age </td>
                            <td>{{ $data->age }}</td>
                        </tr>
                        <tr>
                            <td width="25%">Religion  </td>
                            <td>{{ $data->religion }}</td>
                        </tr>
                    </table>
                    <table class="table table-sm table-bordered table-striped">
                        <tr>
                            <td width="25%">Gender</td>
                            <td>{{ $data->gender }}</td>
                            <td width="25%">Marital Status</td>
                            <td>{{ $data->marital_status }}</td>
                        </tr>
                        <tr>
                            <td width="25%">Nationality</td>
                            <td>{{ $data->nationality }}</td>
                            <td width="25%">Blood Group</td>
                            <td>{{ $data->blood_group }}</td>
                        </tr>
                        <tr>
                            <td width="25%">National Id</td>
                            <td>{{ $data->national_id }}</td>
                            <td width="25%">Birth Registration </td>
                            <td>{{ $data->birth_number }}</td>
                        </tr>
                    </table>
                    <p style="font-size: 15px;" class="p-0 m-0"><b>Address Information:</b></p>
                    <table class="table table-sm table-bordered table-striped">
                        <tr>
                            <th width="25%" class="text-center" colspan="2">Present Address</th>
                            <th width="25%" class="text-center" colspan="2">Permanent Address</th>
                        </tr>
                        <tr>
                            <td>Village</td>
                            <td>{{ $data->present_village }}</td>
                            <td>Village</td>
                            <td>{{ $data->permanent_village }}</td>
                        </tr>
                        <tr>
                            <td>Post Office</td>
                            <td>{{ $data->present_post_office }}</td>
                            <td>Post Office</td>
                            <td>{{ $data->permanent_post_office }}</td>
                        </tr>
                        <tr>
                            <td>Thana/Upazila</td>
                            <td>{{ $data->present_thana }}</td>
                            <td>Thana/Upazila</td>
                            <td>{{ $data->permanent_thana }}</td>
                        </tr>
                        <tr>
                            <td>District</td>
                            <td>{{ $data->present_district }}</td>
                            <td>District</td>
                            <td>{{ $data->permanent_district }}</td>
                        </tr>
                    </table>
                    <p style="font-size: 15px;" class="p-0 m-0"><b>Academic Qualification:</b></p>
                    <table class="table table-sm table-bordered table-striped">
                        <tr>
                            <th width="18%" >Examination</th>
                            <th width="15%">Roll Number</th>
                            <th width="25%">Group/Subject/Degree</th>
                            <th>University/Board</th>
                            <th>Passing Year</th>
                            <th>Result/GPA</th>
                        </tr>
                        <tr>
                            <td>SSC</td>
                            <td>{{ $data->ssc_roll }}</td>
                            <td>{{ $data->ssc_group }}</td>
                            <td>{{ $data->ssc_board }}</td>
                            <td>{{ $data->ssc_year }}</td>
                            <td>{{ $data->ssc_result }}</td>
                        </tr>
                        <tr>
                            <td>HSC</td>
                            <td>{{ $data->hsc_roll }}</td>
                            <td>{{ $data->hsc_group }}</td>
                            <td>{{ $data->hsc_board }}</td>
                            <td>{{ $data->hsc_year }}</td>
                            <td>{{ $data->hsc_result }}</td>
                        </tr>
                        <tr>
                            <td>Diploma</td>
                            <td>{{ $data->diploma_roll }}</td>
                            <td>{{ $data->diploma_group }}</td>
                            <td>{{ $data->diploma_board }}</td>
                            <td>{{ $data->diploma_year }}</td>
                            <td>{{ $data->diploma_result }}</td>
                        </tr>
                        <tr>
                            <td>Diploma In Computer	</td>
                            <td>{{ $data->diploma_com_roll }}</td>
                            <td>{{ $data->diploma_com_group }}</td>
                            <td>{{ $data->diploma_com_board }}</td>
                            <td>{{ $data->diploma_com_year }}</td>
                            <td>{{ $data->diploma_com_result }}</td>
                        </tr>
                        <tr>
                            <td>Diploma In Mechanical	</td>
                            <td>{{ $data->diploma_mech_roll }}</td>
                            <td>{{ $data->diploma_mech_group }}</td>
                            <td>{{ $data->diploma_mech_board }}</td>
                            <td>{{ $data->diploma_mech_year }}</td>
                            <td>{{ $data->diploma_mech_result }}</td>
                        </tr>
                        <tr>
                            <td>Degree</td>
                            <td>{{ $data->degree_roll }}</td>
                            <td>{{ $data->degree_group }}</td>
                            <td>{{ $data->degree_board }}</td>
                            <td>{{ $data->degree_year }}</td>
                            <td>{{ $data->degree_result }}</td>
                        </tr>
                        <tr>
                            <td>Honours</td>
                            <td>{{ $data->honours_roll }}</td>
                            <td>{{ $data->honours_group }}</td>
                            <td style="word-wrap: break-word">{{ $data->honours_board }}</td>
                            <td>{{ $data->honours_year }}</td>
                            <td>{{ $data->honours_result }}</td>
                        </tr>
                        <tr>
                            <td>Masters</td>
                            <td>{{ $data->masters_roll }}</td>
                            <td>{{ $data->masters_group }}</td>
                            <td>{{ $data->masters_board }}</td>
                            <td>{{ $data->masters_year }}</td>
                            <td>{{ $data->masters_result }}</td>
                        </tr>
                    </table>
                    <div class="row mt-0">
                        <div class="col-md-12">
                            <p style="font-size: 12px;" class="p-0 m-0"><b>Experience:</b> {{ $data->experience }}</p>
                        </div>
                        <div class="col-md-12 text-right">
                            <img class="p-3" width="150px" height="80px" src="{{ image_url($data->signature) }}"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    @foreach(App\Models\File::where('app_id', $data->id)->get() as $file)
                    <a href="{{ image_url($file->filenames) }}" class="btn btn-success btn-sm ml-2" download>Download</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
