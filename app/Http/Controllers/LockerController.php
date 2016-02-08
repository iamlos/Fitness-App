<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Locker;
use Session;
use Validator;

class LockerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locker = Locker::orderBy('id', 'desc')->get();

        return view('locker.index', compact('locker'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('locker.create');
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
            'locker_no' => 'required'
        ]);

        if ( $validator->fails() ) {

            return redirect('locker/create')
                        ->withErrors($validator)
                        ->withInput();

        }

        $input = $request->all();

        Locker::create($input);

        Session::flash('message', 'Data successfully added');

        return redirect('locker');
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
        $locker = Locker::findOrFail($id);

        return view('locker.edit', compact('locker'));
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
            'locker_no' => 'required'
        ]);

        if ( $validator->fails() ) {

            return redirect()->back()
                        ->withErrors($validator);

        }

        $locker = Locker::findOrFail($id);

        $input = $request->all();

        $locker->fill($input)->save();

        Session::flash('message', 'Data successfully updated');

        return redirect('locker');
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
        Locker::findOrFail($id)->delete();

        Session::flash('message', 'Data successfully deleted');

        return redirect('locker');
    }
}
