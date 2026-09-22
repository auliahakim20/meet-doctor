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

    //one to many
    public function type_user()
    {
        return $this->belongsTo('App\Models\MasterData\TypeUser', 'type_user_id', 'id');
        //tabel belongsto memiliki 3 parameter
        //(path model, 'field foreign key', 'field primary key from table hasmany/hasone')
    }

    //one to one
    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
