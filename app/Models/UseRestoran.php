<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UseRestoran extends Model
{
     //protected $table ='use_restorans';
        protected $fillable=[
      
                'title',
                'description', 
                'inn',
                'useRest_phone', 
                'address',
                'site',
                'useRest.email',
                'col_board',
                'kitchen'
        ];

             /*   const rules = [
        'name' => 'Required|max:50|min:2',
        'description' => 'Required|max:10000|min:10',
        'inn' => 'Required|size:12',
        'phone' => 'size:10',
        'address' => 'max:500|min:10',
        'site' => 'url',
        'email' => 'email:rfc,dns',
         'col_board'=>'size:100',
         'kitchen' => 'Required|max:10000|min:10'
//        DANGER включить правило
//        'r_tables' => 'Required|JSON',
    ];*/


}
