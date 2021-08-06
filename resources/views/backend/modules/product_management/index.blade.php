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
                            <li class="breadcrumb-item active" aria-current="page">Product Management</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{route('product.create')}}"><button class="btn btn-info btn-sm"> New Product</button></a>
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
                    <h3 class="mb-0">All Product List</h3>
                </div>
                <div class="card-body">
                    <div class="row icon-examples">
                        <div class="table-responsive col-md-12">
                            <table class="table table-bordered product-datatable" id="datatable">
                                <thead>
                                    <th>ID</th>
                                    <th>Thumbnail</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Offer</th>
                                    <th>IsFeatured</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </thead>

                                <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>
                                                <img src="{{ asset('frontend/images/thumbnails/'.$product->thumbnail) }}" height="100px" width="100px">
                                            </td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>
                                                @if($product->offer_status == 1)
                                                <span class="badge badge-success">Yes</span>
                                                @else
                                                <span class="badge badge-danger">No</span>
                                                @endif
                                            </td>
                                            <td> 
                                                @if($product->is_featured == 1)
                                                <span class="badge badge-success">Yes</span>
                                                @else
                                                <span class="badge badge-danger">No</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($product->is_active == 1)
                                                <span class="badge badge-success">Active</span>
                                                @else
                                                <span class="badge badge-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <button class="btn btn-info btn-sm">View</button>
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
