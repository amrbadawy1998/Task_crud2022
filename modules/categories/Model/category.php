<?php

namespace modules\categories\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class category extends Model
{
    use HasFactory , SoftDeletes ;
    protected $fillable =[ "name" ];
    public $timestamps = true;
}
