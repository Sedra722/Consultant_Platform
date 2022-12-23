<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expert;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $name =  $request -> only(['name']);
        $experts = Expert::select('*')
        ->where(['name'=> $name] )->get();
         return response() -> json(['experts' => $experts] , 200);




        // $name = $request->get('name');
        //  if($name && !empty($name))
        //  {
        //    $query = $query->where('name', 'LIKE', '$'.$name.'$');
           
        //   }                  
        //    $result = $query->first();
        //     return response() -> json(['experts' => $result] , 200);

         

          
    }
}



        











      // $name = $request -> only(['name']);
      //       if($name && !empty($name)){
      //       $query = $query->where('name', 'LIKE', '$'.$name.'$');// where clause for name column
      //          }
      //       $result = $query->first();
      //       return response() -> json(['experts' => $result] , 200);




















            # great for relationships
      // $name = $request -> only(['name'],);
      //           if($name)
      //           $query = $query->whereHas('name', function($namequery) use ($request){
      //           $namequery->where('name', '=', $name); 
      //           });

      //           $result = $query->get(); 
      //            return response() -> json(['experts' => $result] , 200);



























//       $searchFields = ['name','ratings','specialization'];

//       $query->where(function($query) use($request, $searchFields)
//       {
       
//        $searchWildcard = '%' . $request->search . '%';

//     foreach($searchFields as $field)
//     {
//       $query->orWhere($field, 'LIKE', $searchWildcard)
//       ->paginate(10);
//     }

//   });

// }
//     return response() -> json(['experts' => $query] , 200);























