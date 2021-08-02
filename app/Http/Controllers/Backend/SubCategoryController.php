<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (can('sub_categories')) {
            return view('backend.modules.sub_category_management.index');
        } else {
            return view('errors.404');
        }
    }

    public function data()
    {
        if (can('sub_categories')) {
            $sub_categories = SubCategory::orderBy('id', 'desc')->get();
            
            return DataTables::of($sub_categories)
                ->rawColumns(['action', 'is_active'])
                ->editColumn('is_active', function (SubCategory $sub_categories) {
                    if ($sub_categories->is_active == true) {
                        return '<p class="badge badge-success">Active</p>';
                    } else {
                        return '<p class="badge badge-danger">Inactive</p>';
                    }
                })
                ->addColumn('action', function (SubCategory $sub_categories) {
                    return '
                    <a data-toggle="modal" data-content="' . route('sub-category.edit', $sub_categories->id) . '"  href="#modal1" >
                        <button class="btn btn-info btn-sm">Edit</button>
                    </a>
                ';
                })
                ->make(true);
        } else {
            return view("errors.404");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(can('sub_categories')){
            $categories = Category::all();
            return view('backend.modules.sub_category_management.modals.inputs', compact('categories'));
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
        if(can('sub_categories')){

            $validator = Validator::make($request->all(), [
                'category_id' => 'required',
                'name' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            } else {
                try {
                    $data = $request->all();
                    $data['slug'] = Str::slug($request->name);
                    $update_sub_category = SubCategory::storeNewSubCategory($data);

                    if ($update_sub_category) {
                        return response()->json(['success' => 'Sub Ctaegory Successfully Created'], 200);
                    } else {
                        return response()->json(['warning' => 'Something went wrong.Try Next time'], 200);
                    }
                } catch (\Exception $e) {
                    throw new \Exception($e->getMessage(), 1);
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
        if(can('sub_categories')){
            $editRow = SubCategory::find($id);
            $categories = Category::all();
            return view('backend.modules.sub_category_management.modals.inputs', compact('editRow', 'categories'));
        }else{
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
        if(can('sub_categories')){

            $validator = Validator::make($request->all(), [
                'category_id' => 'required',
                'name' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            } else {
                try {
                    $data = $request->all();
                    $data['slug'] = Str::slug($request->name);
                    $update_sub_category = SubCategory::updateSubCategory($data, $id);

                    if ($update_sub_category) {
                        return response()->json(['success' => 'Sub Ctaegory Successfully Updated'], 200);
                    } else {
                        return response()->json(['warning' => 'Something went wrong.Try Next time'], 200);
                    }
                } catch (\Exception $e) {
                    throw new \Exception($e->getMessage(), 1);
                }
            }

        }else{
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
