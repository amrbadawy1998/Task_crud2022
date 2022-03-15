<?php
namespace modules\users\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class user extends Model
{
    use HasFactory , SoftDeletes ;
    protected $fillable =
        [
          'name', 'email' , 'password' ,
        ];
    public  $timestamps = true;
}
