<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //add soft delete

class DetailUser extends Model
{
    //use HasFactory; //dikomen karena kita pakai softdeletes  
    use SoftDeletes; //panggil softdelete

    //declare table
    public $table = 'detail_user';

    //data yang bertipe date harus di protected semua
    //this field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    //declare fillable
    protected $fillable = [
        'user_id',
        'type_user_id',
        'contact',
        'address',
        'gender',
        'photo',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
