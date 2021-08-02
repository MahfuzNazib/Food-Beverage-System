<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (can('brands')) {
            return view('backend.modules.brand_management.index');
        } else {
            return view('errors.404');
        }
    }

    public function data()
    {
        if (can('brand')) {
            $brand = Brand::orderBy('id', 'desc')->get();
            return DataTables::of($brand)
                ->rawColumns(['action', 'is_active'])
                ->editColumn('is_active', function (Brand $brand) {
                    if ($brand->is_active == true) {
                        return '<p class="badge badge-success">Active</p>';
                    } else {
                        return '<p class="badge badge-danger">Inactive</p>';
                    }
                })
                ->addColumn('action', function (Brand $brand) {
                    return '
                    <a data-toggle="modal" data-content="' . route('brand.edit', $brand->id) . '"  href="#modal1" >
                        <button class="btn btn-info btn-sm">Edit</button>
                    </a>
                ';
                })
                ->make(true);
        } else {
            return view("errors.404");
        }
    }

    public function cat()
    {
        return "cat";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.modules.brand_management.modals.inputs');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (can('brand')) {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'slug' => 'required|unique:brands',
                'position' => 'required|unique:brands',
                'image' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            } else {
                try {
                    $data = $request->all();

                    // Image Processing Start
                    if ($request->hasFile('image')) {
                        $file = $request->file('image');
                        $extension = $file->getClientOriginalExtension();
                        $filename = time() . '.' . $extension;

                        $file->move('frontend/images/brands/', $filename);
                        $data['image'] = $filename;

                    } else {
                        $data['image'] = null;
                    }
                    // Image Processing End

                    $store_brand = Brand::storeNewBrand($data);

                    if ($store_brand) {
                        return response()->json(['success' => 'Brand Successfully Created'], 200);
                    } else {
                        return response()->json(['warning' => 'Something went wrong.Try Next time'], 200);
                    }
                } catch (\Exception $e) {
                    throw new \Exception($e->getMessage(), 1);
                }
            }
        } else {
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
        if (can('brand')) {
            $editRow = Brand::find($id);
            return view('backend.modules.brand_management.modals.inputs', compact('editRow'));
        } else {
            return view('errors.404');
        }
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
        if (can('brand')) {
            $brand = Brand::find($id);

            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'slug' => 'sometimes|required|unique:brands,slug,' . $id,
                'position' => 'sometimes|required|numeric|unique:brands,position,' . $id,
                'image' => 'required,' . $id,
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            } else {
                try {
                    $data = $request->all();

                    // Image Processing Start
                    if ($request->hasFile('image')) {
                        $file = $request->file('image');
                        $extension = $file->getClientOriginalExtension();
                        $filename = time() . '.' . $extension;

                        $file->move('frontend/images/brands/', $filename);
                        $data['image'] = $filename;

                    } else {
                        $data['image'] = $brand->image;
                    }
                    // Image Processing End

                    $update_brand = Brand::updateBrand($data, $id);

                    if ($update_brand) {
                        return response()->json(['success' => 'Brand Successfully Updated'], 200);
                    } else {
                        return response()->json(['warning' => 'Something went wrong.Try Next time'], 200);
                    }
                } catch (\Exception $e) {
                    throw new \Exception($e->getMessage(), 1);
                }
            }

        } else {
            return view('errors.404');
        }
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
