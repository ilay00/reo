<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class restaurant extends Model
{
    protected $fillable = [
        'r_name',
        'r_description',
        'r_picture',
        'r_restHolderId',
        'r_phone',
        'r_address',
        'r_site',
        'r_email',
        'r_tables',
    ];

    const rules = [
        'r_name' => 'Required|max:50|min:2',
        'r_description' => 'Required|max:10000|min:10',
        'r_inn' => 'Required|size:12',
        'r_phone' => 'size:10',
        'r_address' => 'max:500|min:10',
        'r_site' => 'url',
        'r_email' => 'email:rfc,dns',
//        DANGER включить правило
//        'r_tables' => 'Required|JSON',
    ];
}
