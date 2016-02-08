<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Registration;
use App\Card;
use App\Payment;
use Session;
use Validator;
use DB;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $last_no = DB::table('transactions')
                            ->select(DB::raw('substring(transaction_no FROM 5 FOR 6) as transaction_no'))
                            ->where('transaction_desc', 'Registration')
                            ->first();
        
        if ($last_no == '') {
            
            $transaction_no = 'REG-000001';
        
        } else {

            $lastno = $last_no->transaction_no + 1;
            $transaction_no = 'REG-'.str_pad($lastno,'6','0',STR_PAD_LEFT);

        }

        $data = [
            'transaction_no' => $transaction_no,
            'card'           => Card::orderBy('id', 'desc')->get(),
            'payment'        => Payment::orderBy('id', 'desc')->get()
        ];

        return view('registration.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function delete()
    {
        // 
    }

    public function ajax_card(Request $request)
    {
        if (Request::ajax())
        {
            $card_id = $request->all();

            $data = Card::where('id', $card_id)->first();

            dd($data);
        }
        
    }
}
