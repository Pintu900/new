<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
 use Redirect,Response;

class RazorpayController extends Controller
{
    public function index()
    {
    return view('payments.razorpay');
    }
    public function razorPaySuccess(Request $request){
    $data = [
              'user_id' => '1',
              'payment_id' => $request->razorpay_payment_id,
              'amount' => $request->amount,
           ];
    $getId = Payment::create($data);  
    $arr = array('msg' => 'Payment successfully credited', 'status' => true);
    return response()->json($arr);    
    }
    public function RazorThankYou()
    {
    return view('payments.thankyou');
    }
}
