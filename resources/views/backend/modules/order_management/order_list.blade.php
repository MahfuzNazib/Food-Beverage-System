@extends('backend.layouts.app')

@section('content')
@include('backend.layouts.headers.cards')

{{-- Page Header Start --}}
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i
                                        class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Order Management</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Page Header End --}}

<!-- Main Content Start -->
<div class="container-fluid mt--6">
    <div class="row justify-content-center">
        <div class=" col ">
            <div class="card">
                <div class="card-header bg-transparent">
                    <h3 class="mb-0">All Order List</h3>
                </div>
                <div class="card-body">
                    <div class="row icon-examples">
                        <div class="table-responsive col-md-12">
                            <table class="table table-bordered order-datatable" id="datatable">
                                <thead>
                                    <th>OrderID</th>
                                    <th>Date</th>
                                    <th>Phone</th>
                                    <th>Amount</th>
                                    <th>Shipping</th>
                                    <th>Payment Mode</th>
                                    <th>Delivered Status</th>
                                    <th>Verified</th>
                                    <th>Action</th>
                                </thead>

                                <tbody>
                                    @foreach($orders as $order)
                                        <tr>
                                            <td>{{ $order->order_id }}</td>
                                            <td>{{ $order->created_at }}</td>
                                            <td>{{ $order->phone }}</td>
                                            <td>{{ $order->amount }}</td>
                                            <td>{{ $order->shipping_charge }}</td>
                                            <td>{{ $order->paid_by }}</td>
                                            <td>
                                                @if($order->is_delivered == 1)
                                                <span class="badge badge-success">Yes</span>
                                                @else
                                                <span class="badge badge-danger">No</span>
                                                @endif
                                            </td>
                                            <td> 
                                                @if($order->is_verified == 1)
                                                <span class="badge badge-success">Yes</span>
                                                @else
                                                <span class="badge badge-danger">No</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('order-details', $order->id) }}">
                                                    <button class="btn btn-info btn-sm">View</button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content End -->

@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush

@section("per_page_css")
<link href="{{ asset('argon/css/datatable/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ asset('argon/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section("per_page_js")
<script src="{{ asset('argon/js/datatable/jquery.validate.js') }}"></script>
<script src="{{ asset('argon/js/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('argon/js/datatable/dataTables.bootstrap4.min.js') }}"></script>

@endsection
