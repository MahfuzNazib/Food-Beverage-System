@extends('backend.layouts.app')

@section('content')
@include('backend.layouts.headers.cards')

{{-- Page Header Start --}}

<style>
    /* Style the tab */
    .tab {
        float: left;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
        width: 100%;
        height: 300px;
    }

    /* Style the buttons inside the tab */
    .tab button {
        display: block;
        background-color: inherit;
        color: black;
        padding: 16px 16px;
        width: 100%;
        border: none;
        outline: none;
        text-align: left;
        cursor: pointer;
        transition: 0.3s;
        font-size: 15px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current "tab button" class */
    .tab button.active {
        background-color: #5E72E4;
    }

    /* Style the tab content */
    .tabcontent {
        float: left;
        padding: 0px 12px;
        width: 100%;
        border-left: none;
        height: auto;
    }

    .hide-block {
        display: none;
    }

</style>
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i
                                        class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create Product</li>
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
                <div class="row">
                    <div class="col-sm-3">
                        <div class="tab">
                            <button class="tablinks" onclick="openTab(event, 'basic_info')" id="defaultOpen">Basic
                                Info</button>
                            <button class="tablinks" onclick="openTab(event, 'descriptions')">Description</button>
                            <button class="tablinks" onclick="openTab(event, 'product_gallery')">Product
                                Gallery</button>
                            <button class="tablinks" onclick="openTab(event, 'product_status')">Status</button>
                        </div>
                    </div>


                    <div class="col-sm-9">
                        <form>
                            <div id="basic_info" class="tabcontent mt-2">
                                <label>Product Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" name="name">

                                <label>Product Specification <span class="text-danger">*</span></label>
                            </div>

                            <div id="descriptions" class="tabcontent hide-block">
                                <h3>Product Basic description</h3>
                                <p>descriptions is the capital of France.</p>
                            </div>

                            <div id="product_gallery" class="tabcontent hide-block">
                                <h3>product_gallery</h3>
                                <p>product_gallery is the capital of Japan.</p>
                            </div>

                            <div id="product_status" class="tabcontent hide-block">
                                <h3>Product Status</h3>
                                <p>product_gallery is the capital of Japan.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content End -->

@endsection


<script>
    function openTab(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();

</script>
