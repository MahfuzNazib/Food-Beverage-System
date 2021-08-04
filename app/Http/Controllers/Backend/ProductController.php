<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(can('product')){

            $categories = Category::all();
            $sub_categories = SubCategory::all();
            $brands = Brand::all();

            return view('backend.modules.product_management.inputs', compact('categories', 'sub_categories', 'brands'));
        }else{
            return view('errors.404');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(can('product')){

            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'description' => 'required',
                'short_description' => 'required',
                'thumbnail' => 'required',
                'category_id' => 'required',
                'brand_id' => 'required',
                'price' => 'required',
                'qnty' => 'required'
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            } else {
                $data = $request->all();
                $data['slug'] = Str::slug($request->name);

                // Image Processing Start
                if ($request->hasFile('thumbnail')) {
                    $file = $request->file('thumbnail');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . '.' . $extension;

                    $file->move('frontend/images/products/', $filename);
                    $data['thumbnail'] = $filename;

                } else {
                    $data['thumbnail'] = null;
                }
                // Image Processing End

                $add_product = Product::storeNewProduct($data);

                if ($add_product) {
                    return response()->json(['success' => 'Product Successfully Created'], 200);
                } else {
                    return response()->json(['warning' => 'Something went wrong.Try Next time'], 200);
                }
            }
        }else{
            return view('errors.404');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
