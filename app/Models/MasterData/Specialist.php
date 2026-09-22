<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialist extends Model
{
   //use HasFactory;
    use SoftDeletes;

    public $table = 'specialist';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'price',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    //one to many
    public function doctor(){
      return $this->hasMany('App\Models\Operational\Doctor', 'specialist_id');
        //2 parameter (path model yang dituju, foreign key yang dituju)
    }
}
