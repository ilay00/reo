<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UseAdmin extends Model
{
  public $timestamps = false;

   public $table ='use_admins';
  
   protected $fillable=[
        'admin_name',
        'patronymic',
        'family', 
        'email',
        'phone',
        'Photo_file',
        'userId'
];
           public function user()
           {
               return $this->belongsTo(User::class, 'id' );
           }
    /*  const rules = [
        'name' => 'Required|max:50|min:2',
         'patronymic' => 'Required|max:50|min:2',
          'family' => 'Required|max:50|min:2',
         'phone' => 'size:10',
         'email' => 'email:rfc,dns'
//        DANGER включить правило
//        'r_tables' => 'Required|JSON',
      ];*/
}
 
