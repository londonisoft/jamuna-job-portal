@extends('master')
@section('title','Home')
@section('body')
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total Application</h6>
                    <h2 class="text-right"><i class="ti-user f-left"></i><span>{{ App\Models\Post::count(); }}</span></h2>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total Pending</h6>
                    <h2 class="text-right"><i class="ti-tag f-left"></i><span>{{ App\Models\Post::where('status', 0)->count(); }}</span></h2>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total Approve</h6>
                    <h2 class="text-right"><i class="ti-reload f-left"></i><span>{{ App\Models\Post::where('status', 1)->count(); }}</span></h2>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Paking Supervisors</h6>
                    <h2 class="text-right"><i class="ti-wallet f-left"></i><span>{{ App\Models\Post::where('position_name', 1)->count(); }}</span></h2>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Machine Supervisors</h6>
                    <h2 class="text-right"><i class="ti-wallet f-left"></i><span>{{ App\Models\Post::where('position_name', 2)->count(); }}</span></h2>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Machine Operator</h6>
                    <h2 class="text-right"><i class="ti-wallet f-left"></i><span>{{ App\Models\Post::where('position_name', 3)->count(); }}</span></h2>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Despatched Operator</h6>
                    <h2 class="text-right"><i class="ti-wallet f-left"></i><span>{{ App\Models\Post::where('position_name', 4)->count(); }}</span></h2>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Paking Operator</h6>
                    <h2 class="text-right"><i class="ti-wallet f-left"></i><span>{{ App\Models\Post::where('position_name', 5)->count(); }}</span></h2>
                </div>
            </div>
        </div>
    </div>    
    
    
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Quality Assurance Incharge</h6>
                    <h2 class="text-right"><i class="ti-wallet f-left"></i><span>{{ App\Models\Post::where('position_name', 6)->count(); }}</span></h2>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Scanning Operator</h6>
                    <h2 class="text-right"><i class="ti-wallet f-left"></i><span>{{ App\Models\Post::where('position_name', 7)->count(); }}</span></h2>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Quality Assurance Operator</h6>
                    <h2 class="text-right"><i class="ti-wallet f-left"></i><span>{{ App\Models\Post::where('position_name', 8)->count(); }}</span></h2>
                </div>
            </div>
        </div>
    </div>
   
@endsection
