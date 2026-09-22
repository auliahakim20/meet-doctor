<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    //use HasFactory;
    use SoftDeletes;

    public $table = 'role';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    //one to many
    public function role_user(){
        return $this->hasMany('App\Models\ManagementAccess\RoleUser', 'role_id');
        //2 parameter (path model, foreign key)
    }
    public function permission_role(){
        return $this->hasMany('App\Models\ManagementAccess\PermisionRole', 'role_id', 'id');
    }
}
