<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (can('categories')) {
            return view('backend.modules.category_management.index');
        } else {
            return view('errors.404');
        }
    }

    public function data()
    {
        if (can('categories')) {
            $category = Category::orderBy('id', 'desc')->get();
            return DataTables::of($category)
                ->rawColumns(['action', 'is_active'])
                ->editColumn('is_active', function (Category $category) {
                    if ($category->is_active == true) {
                        return '<p class="badge badge-success">Active</p>';
                    } else {
                        return '<p class="badge badge-danger">Inactive</p>';
                    }
                })
                ->addColumn('action', function (Category $category) {
                    return '
                    <a data-toggle="modal" data-content="' . route('category.edit', $category->id) . '"  href="#modal1" >
                        <button class="btn btn-info btn-sm">Edit</button>
                    </a>

                    <a data-toggle="modal" data-content="' . route('category.show', $category->id) . '"  href="#modal1" >
                        <button class="btn btn-success btn-sm">View</button>
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
        if (can('categories')) {
            return view('backend.modules.category_management.modals.inputs');
        } else {
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

        if (can('categories')) {

            $validator = Validator::make($request->all(), [
                'name' => 'required|unique:categories',
                'position' => 'required|unique:categories',
                'image' => 'required|dimensions:min_width=370,max_width=375,min_height=170,max_height=192',
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

                        $file->move('frontend/images/categories/', $filename);
                        $data['image'] = $filename;
                    }
                    // Image Processing End

                    $data['slug'] = Str::slug($request->name);
                    $store_category = Category::storeNewCategory($data);

                    if ($store_category) {
                        return response()->json(['success' => 'Ctaegory Successfully Updated'], 200);
                    } else {
                        return response()->json(['warning' => 'Something went wrong.Try Next time'], 200);
                    }
                } catch (\Exception $e) {
                    throw new \Exception($e->getMessage(), 1);
                }
            }
        } else {

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
        $category = Category::find($id);
        return view('backend.modules.category_management.modals.view', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (can('categories')) {
            $editRow = Category::find($id);
            return view('backend.modules.category_management.modals.inputs', compact('editRow'));
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
        if (can('categories')) {
            $category = Category::find($id);

            $validator = Validator::make($request->all(), [
                'name' => 'required|unique:categories,name,' . $id,
                'position' => 'sometimes|required|numeric|unique:categories,position,' . $id,
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            } else {
                try {

                    $data = $request->all();
                    $data['slug'] = Str::slug($request->name);

                    // Image Processing Start
                    if ($category->image) {
                        if ($request->hasFile('image')) {
                            $file = $request->file('image');
                            $extension = $file->getClientOriginalExtension();
                            $filename = time() . '.' . $extension;

                            $file->move('frontend/images/categories/', $filename);
                            $data['image'] = $filename;
                        }
                    } else {
                        $data['image'] = $category->image;
                    }

                    // Image Processing End

                    $update_category = Category::updateCategory($data, $id);

                    if ($update_category) {
                        return response()->json(['success' => 'Category Successfully Updated'], 200);
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
