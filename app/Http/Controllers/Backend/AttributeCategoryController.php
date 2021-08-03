<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\AttributeCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Exception;
use Illuminate\Support\Facades\Validator;

class AttributeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(can('attribute_category')){
            $attribute_categories = AttributeCategory::orderBy('id', 'desc')->get();
            return view('backend.modules.attribute_category_management.index', compact('attribute_categories'));
        }else{
            return view('errors.404');
        }
    }

    public function data()
    {
        
            $attribute_categories = AttributeCategory::orderBy('id', 'desc')->get();
            return DataTables::of($attribute_categories)
                ->rawColumns(['action', 'is_active'])
                ->editColumn('is_active', function (AttributeCategory $attribute_categories) {
                    if ($attribute_categories->is_active == true) {
                        return '<p class="badge badge-success">Active</p>';
                    } else {
                        return '<p class="badge badge-danger">Inactive</p>';
                    }
                })
                ->addColumn('action', function (AttributeCategory $attribute_categories) {
                    return '
                    <a data-toggle="modal" data-content="' . route('attribute-category.edit', $attribute_categories->id) . '"  href="#modal1" >
                        <button class="btn btn-info btn-sm">Edit</button>
                    </a>
                ';
                })
                ->make(true);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(can('attribute_category')){

            $categories = Category::all();
            $attributes = Attribute::all();

            return view('backend.modules.attribute_category_management.modals.inputs', compact('categories', 'attributes'));

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
        if(can('attribute_category')){
            
            foreach($request['attribute_id'] as $key=> $single_attribute_category){

                $attribut_category = new AttributeCategory();
                $attribut_category->attribute_id = $request['attribute_id'][$key];
                $attribut_category->category_id = $request['category_id'][$key];

                $attribut_category->save();
            }

            return response()->json(['success' => 'Attribute Categories Successfully Created'], 200);

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
