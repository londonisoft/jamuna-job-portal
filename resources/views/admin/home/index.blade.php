@extends('master')
@section('title','Home')
@section('body')
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total Users</h6>
                    <h2 class="text-right"><i class="ti-user f-left"></i><span>10</span></h2>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total Service</h6>
                    <h2 class="text-right"><i class="ti-tag f-left"></i><span>100</span></h2>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total Posts</h6>
                    <h2 class="text-right"><i class="ti-reload f-left"></i><span>100</span></h2>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total Client</h6>
                    <h2 class="text-right"><i class="ti-wallet f-left"></i><span>445</span></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total Order</h6>
                    <h2 class="text-right"><i class="ti-user f-left"></i><span>10</span></h2>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Pending Order</h6>
                    <h2 class="text-right"><i class="ti-tag f-left"></i><span>100</span></h2>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Received Order</h6>
                    <h2 class="text-right"><i class="ti-reload f-left"></i><span>100</span></h2>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total Income</h6>
                    <h2 class="text-right"><i class="ti-wallet f-left"></i><span>445</span></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-bordered table-striped ">
                <tr>
                    <th class="text-center" colspan="2">
                        Order Amount Summary
                    </th>
                </tr>
                <tr>
                    <th width="50%">Today Order</th>
                    <th>10</th>
                </tr>
                <tr>
                    <th width="50%">This Week Order</th>
                    <th>10</th>
                </tr>
                <tr>
                    <th width="50%">This Month Order</th>
                    <th>10</th>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
        <table class="table table-bordered table-striped ">
                <tr>
                    <th class="text-center" colspan="2">Order Summary</th>
                </tr>
                <tr>
                    <th width="50%">Today Order</th>
                    <th>10</th>
                </tr>
                <tr>
                    <th width="50%">This Week Order</th>
                    <th>10</th>
                </tr>
                <tr>
                    <th width="50%">This Month Order</th>
                    <th>10</th>
                </tr>
            </table>
        </div>
    </div>
@endsection
