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
            <div class="card mb-2">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="tab">
                            <button class="tablinks" onclick="openTab(event, 'basic_info')" id="defaultOpen">Basic
                                Info</button>
                            <button class="tablinks" onclick="openTab(event, 'descriptions')">Description</button>
                            <button class="tablinks" onclick="openTab(event, 'product_gallery')">Product
                                Gallery</button>
                            <button class="tablinks" onclick="openTab(event, 'details')">Details</button>
                        </div>
                    </div>


                    <div class="col-sm-9">
                        <form method="POST" action="{{ route('product.store') }}" accept-charset="utf-8" enctype="multipart/form-data">
                        @csrf
                            <!-- Basic Information Start -->
                            <div id="basic_info" class="tabcontent mt-2">
                                <label>Product Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" name="name">
                                <span class="text-danger">{{ $errors->first('name') }}</span>

                                <label>Product Specification <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="article-ckeditor" name="specification"></textarea>
                                <span class="text-danger">{{ $errors->first('specification') }}</span>                            
                            </div>
                            <!-- Basic Information End -->

                            <!-- Product Description Start -->
                            <div id="descriptions" class="tabcontent hide-block mt-2">
                                <label>Short Description <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="short_description"
                                    name="short_description"></textarea>
                                <span class="text-danger">{{ $errors->first('short_description') }}</span>                            
                                

                                <label>Description <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="description" name="description"></textarea>
                                <span class="text-danger">{{ $errors->first('description') }}</span>

                            </div>
                            <!-- Product Description End -->

                            <!-- Product Image Gallery Start -->
                            <div id="product_gallery" class="tabcontent hide-block mt-2">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Thumbnail Image <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control preview_image" name="thumbnail" accept="image/*">
                                        <span class="text-danger">{{ $errors->first('thumbnail') }}</span>

                                    </div>

                                    <div class="col-sm-4">
                                        <img id="frame" src="{{ asset('frontend') }}/images/product-demo.png"
                                            height="120px" width="120px">
                                    </div>
                                </div>

                                <div class="mt-3 w-100">
                                    <div class="card shadow-sm w-100">
                                        <div class="card-header d-flex justify-content-between">
                                            <h4>Product Images</h4>
                                            <div id="form">
                                                <input type="file" name="Image" id="image" multiple="" class="d-none"
                                                    onchange="image_select()" accept="image/*">
                                                <button class="btn btn-sm btn-primary" type="button"
                                                    onclick="document.getElementById('image').click()">Choose
                                                    Images</button>
                                            </div>
                                        </div>
                                        <div class="card-body d-flex flex-wrap justify-content-start" id="container">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Image Gallery End -->


                            <!-- Product Details Start -->
                            <div id="details" class="tabcontent hide-block mt-2 mr-4">
                                
                                <label>Category <span class="text-danger">*</span></label>
                                <select class="form-control form-control-sm" name="category_id">
                                    <option selected disabled>Select Product Category</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('category_id') }}</span>


                                <label class="mt-3">Sub Category <span class="text-danger">*</span></label>
                                <select class="form-control form-control-sm" name="sub_category_id">
                                    <option selected disabled>Select Product SubCategory</option>
                                    @foreach($sub_categories as $sub_category)
                                    <option value="{{ $sub_category->id }}">{{ $sub_category->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('sub_category_id') }}</span>


                                <label class="mt-3">Brand <span class="text-danger">*</span></label>
                                <select class="form-control form-control-sm" name="brand_id">
                                    <option selected disabled>Select Brand</option>
                                    @foreach($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('brand_id') }}</span>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label class="mt-3">Regular Price <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control form-control-sm" name="price">
                                        <span class="text-danger">{{ $errors->first('price') }}</span>
                                    </div>

                                    <div class="col-sm-6">
                                        <label class="mt-3">Quantity <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control form-control-sm" name="qnty">
                                        <span class="text-danger">{{ $errors->first('qnty') }}</span>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success ml-1 mt-3 mb-3">Add Product</button>
                            </div>
                            <!-- Product Details End -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content End -->

@endsection

@section("per_page_js")
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

<script>
    CKEDITOR.replace('article-ckeditor');
    CKEDITOR.replace('short_description');
    CKEDITOR.replace('description');

</script>

<script>
    var images = [];

    
    $('.preview_image').on('change', function () {
        frame.src = URL.createObjectURL(event.target.files[0]);
    })

    function image_select() {
        var image = document.getElementById('image').files;
        for (i = 0; i < image.length; i++) {
            if (check_duplicate(image[i].name)) {
                images.push({
                    "name": image[i].name,
                    "url": URL.createObjectURL(image[i]),
                    "file": image[i],
                })
            } else {
                alert(image[i].name + " is already added to the list");
            }
        }
        document.getElementById('form').value = '';
        document.getElementById('container').innerHTML = image_show();
    }

    function image_show() {
        var image = "";
        images.forEach((i) => {
            image += `<div class="image_container d-flex justify-content-center position-relative">
   	  	  	  	  <img src="` + i.url + `" alt="Image">
   	  	  	  	  <span class="position-absolute" onclick="delete_image(` + images.indexOf(i) + `)">&times;</span>
   	  	  	  </div>`;
        })
        return image;
    }

    function delete_image(e) {
        images.splice(e, 1);
        document.getElementById('container').innerHTML = image_show();
    }

    function check_duplicate(name) {
        var image = true;
        if (images.length > 0) {
            for (e = 0; e < images.length; e++) {
                if (images[e].name == name) {
                    image = false;
                    break;
                }
            }
        }
        return image;
    }

    function get_image_data() {
        var form = new FormData()
        for (let index = 0; index < images.length; index++) {
            form.append("file[" + index + "]", images[index]['file']);
        }
        return form;
    }

</script>
@endsection
