<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expert;

class ExpertDetailsController extends Controller
{
    public function expert_details($expert_id)
    {
        $experts = Expert::where(['id'=> $expert_id])
            ->first();
            return response() -> json(['experts' => $experts] , 200);
          

        
    }
}
