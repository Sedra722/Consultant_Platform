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
public function Payment(Request $request)
{
    $quantitiy = $request(['quantitiy'])
   $expert_balance = ExpertWallet::query()->select('amount') 
   $user_balance = UserWallet::query()->select('amount') 
    $payment = DB::transaction(function () {
    DB::table('user_wallets')->where(['amount' =>$user_balance - $quantitiy]);
 
    DB::table('expert_wallets')->where(['amount' =>$expert_balance + $quantitiy]);
     return response() -> json(['message' => ['Payment is done.']], 200);

});
   


     $user = auth()->user();
     return $user->balance();
}
}
