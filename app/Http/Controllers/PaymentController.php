<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //check all transaction
public function index()
{
    $user = auth()->user();
    return $user->transactions;
}
// store credit/debit transaction
public function store(Request $request)
{
     $user = auth()->user();
     $data = ['type'  =>  'credit',
             'amount' => $request->amount,
             'description' =>  $request->description,
             'status' => 1,
            ];
     $wallet = $user->transactions()
                    ->create($data);
     return $wallet;
}
//withdraw request
public function withdraw(Request $request)
{
     $user = auth()->user();
     if(!$user->allowWithdraw($request->amount)) {
        // return error
        return 'Invalid request';
     }
     $data = ['type'  =>  'debit',
              'amount' => $request->amount,
              'description' =>  $request->description,
              'status' => 1,
             ];
     $wallet = $user->transactions()
                   ->create($data);
     return $wallet;
}
//check available 
public function checkBalance()
{
     $user = auth()->user();
     return $user->balance();
}
public function transfer()
{
    DB::transaction(function(){
      Wallet::where('id' ,1)->decrement('amount' ,100 )
      Wallet::where('id' ,2)->decrement('amount' ,100 )
})


}
