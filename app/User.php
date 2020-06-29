<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Role;
class User extends Authenticatable
{
    use Notifiable;
   public $timestamps=false;
   const CREATED_AT='createdAt';
   const UPDATED_AT='updatedAT';
   protected $table='users';
   /** 
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'family', 'email', 'password', 'phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];
    public function roles()
    {
        return $this->belongsToMany(Role::class,'roles_user', 'userId','roleId');
    }
     public function hasAccess(array $permissions):bool
     {
         foreach($this->roles as $role)
         {
             if ($role->hasAccess($permissions))
             {
                 return true;
             }
         }
          return false;
     }
      public function hasRole($roleSlug):bool
         {
             return $this->roles()->where('slug',$roleSlug)->count()==1;
         }
    }     
