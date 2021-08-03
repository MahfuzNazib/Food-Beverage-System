<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Exception;
use Illuminate\Support\Facades\Validator;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(can('attribute')){
            return view('backend.modules.attribute_management.index');
        }else{
            return view('errors.404');
        }
    }

    public function data()
    {
        if (can('attribute')) {
            $attributes = Attribute::orderBy('id', 'desc')->get();
            return DataTables::of($attributes)
                ->rawColumns(['action', 'is_active'])
                ->editColumn('is_active', function (Attribute $attributes) {
                    if ($attributes->is_active == true) {
                        return '<p class="badge badge-success">Active</p>';
                    } else {
                        return '<p class="badge badge-danger">Inactive</p>';
                    }
                })
                ->addColumn('action', function (Attribute $attributes) {
                    return '
                    <a data-toggle="modal" data-content="' . route('attribute.edit', $attributes->id) . '"  href="#modal1" >
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
        if(can('attribute')){
            return view('backend.modules.attribute_management.modals.inputs');
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
        if(can('attribute')){

            foreach($request['name'] as $key=> $single_attribute){

                $attribute = new Attribute();
                $attribute->is_active = $request['is_active'][$key];
                $attribute->name = $request['name'][$key];

                $attribute->save();
            }

            return response()->json(['success' => 'Attribute Successfully Created'], 200);
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
        if(can('attribute')){
            $editRow = Attribute::find($id);
            return view('backend.modules.attribute_management.modals.inputs', compact('editRow'));
            
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
        if(can('attribute')){

            $validator = Validator::make($request->all(), [
                'name' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            } else {
                try {

                    $attribute = Attribute::find($id);

                    $attribute->name = $request->name;
                    $attribute->is_active = $request->is_active;

                    $update_attribute = $attribute->save();

                    if ($update_attribute) {
                        return response()->json(['success' => 'Attribute Successfully Updated'], 200);
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
