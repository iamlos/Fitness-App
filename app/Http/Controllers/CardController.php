<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Card;
use Session;
use Validator;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = Card::orderBy('id', 'desc')->get();
        return view('card.index', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('card.create');
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
            'card_name'      => 'required|unique:cards',
            'price'          => 'required',
            'admin_cost'     => 'required',
            'active_periode' => 'required'
        ]);

        if ( $validator->fails() ) {

            return redirect('card/create')
                        ->withErrors($validator)
                        ->withInput();

        }

        $input = $request->all();

        Card::create($input);

        Session::flash('message', 'Data successfully added');

        return redirect('card');
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
        $card = Card::findOrFail($id);

        return view('card.edit', compact('card'));
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
            'card_name'      => 'required',
            'price'          => 'required',
            'admin_cost'     => 'required',
            'active_periode' => 'required'
        ]);

        if ( $validator->fails() ) {

            return redirect()->back()
                        ->withErrors($validator);

        }

        $card = Card::findOrFail($id);

        $input = $request->all();

        $card->fill($input)->save();

        Session::flash('message', 'Data successfully updated');

        return redirect('card');
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
        Card::findOrFail($id)->delete();

        Session::flash('message', 'Data successfully deleted');

        return redirect('card');
    }
}
