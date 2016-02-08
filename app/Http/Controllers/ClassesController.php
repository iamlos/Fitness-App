<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Classes;
use Session;
use Validator;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Classes::orderBy('id', 'desc')->get();

        return view('classes.index', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('classes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'class_name' => 'required|unique:classes',
        ]);

        if ( $validator->fails() ) {

            return redirect('classes/create')
                        ->withErrors($validator)
                        ->withInput();

        }

        $input = $request->all();

        Classes::create($input);

        Session::flash('message', 'Data successfully added');

        return redirect('classes');
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
        $classes = Classes::findOrFail($id);

        return view('classes.edit', compact('classes'));
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
        $validator = Validator::make($request->all(),[
            'class_name' => 'required',
        ]);

        if ( $validator->fails() ) {

            return redirect()->back()
                        ->withErrors($validator);

        }

        $classes = Classes::findOrFail($id);

        $input = $request->all();

        $classes->fill($input)->save();

        Session::flash('message', 'Data successfully updated');

        return redirect('classes');
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

    public function delete($id)
    {
        Classes::findOrFail($id)->delete();

        Session::flash('message', 'Data successfully deleted');

        return redirect('classes');
    } 
}
