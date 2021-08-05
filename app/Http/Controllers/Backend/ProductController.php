<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{

    public function index()
    {
        if (can('product')) {
            $products = Product::select('id', 'slug', 'name', 'thumbnail', 'is_featured', 'is_active')->get();
            return view('backend.modules.product_management.index', compact('products'));
        } else {
            return view('errors.404');
        }

    }

    public function data()
    {
        if (can('product')) {
            $products = Product::orderBy('id', 'desc')->get();
            return DataTables::of($products)
                ->rawColumns(['action', 'is_active'])
                ->editColumn('is_active', function (Product $products) {
                    if ($products->is_active == true) {
                        return '<p class="badge badge-success">Active</p>';
                    } else {
                        return '<p class="badge badge-danger">Inactive</p>';
                    }
                })
                ->addColumn('action', function (Product $products) {
                    return '
                    <a data-toggle="modal" data-content="' . route('product.edit', $products->id) . '"  href="#modal1" >
                        <button class="btn btn-info btn-sm">Edit</button>
                    </a>

                    <a data-toggle="modal" data-content="' . route('product.show', $products->id) . '"  href="#modal1" >
                        <button class="btn btn-success btn-sm">View</button>
                    </a>
                ';
                })
                ->make(true);
        } else {
            return view("errors.404");
        }
    }

    public function create()
    {
        if (can('product')) {

            $categories = Category::all();
            $sub_categories = SubCategory::all();
            $brands = Brand::all();

            return view('backend.modules.product_management.inputs', compact('categories', 'sub_categories', 'brands'));
        } else {
            return view('errors.404');
        }
    }

    public function store(Request $request)
    {
        if (can('product')) {
            $this->validate($request, [
                'name' => 'required|unique:products',
                'description' => 'required',
                'short_description' => 'required',
                'thumbnail' => 'required|dimensions:min_width=270,max_width=270,min_height=204,max_height=204',
                'category_id' => 'required',
                'brand_id' => 'required',
                'price' => 'required',
                'qnty' => 'required',
            ]);
            $data = $request->all();
            $data['slug'] = Str::slug($request->name);

            // Thumbnail Image Processing Start
            if ($request->hasFile('thumbnail')) {
                $file = $request->file('thumbnail');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;

                $file->move('frontend/images/thumbnails/', $filename);
                $data['thumbnail'] = $filename;
            }
            // Thumbnail Image Processing End

            $add_product = Product::storeNewProduct($data);

            // Store Product Multiple Images on product_images DB Table
            if ($request->hasFile('Image')) {

                foreach ($request->file('Image') as $single_image) {

                    $product_image = new ProductImage();
                    $img = $single_image;
                    $extension = $img->getClientOriginalExtension();
                    $image = time() . '.' . $extension;
                    $img->move('frontend/images/product_images/', $image);

                    $product_image->product_id = $add_product->id;
                    $product_image->image = $image;

                    $product_image->save();
                }

            }

            if ($add_product) {
                // return response()->json(['success' => 'Product Successfully Created'], 200);
                return back();
            } else {
                return response()->json(['warning' => 'Something went wrong.Try Next time'], 200);
            }

        } else {
            return view('errors.404');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
