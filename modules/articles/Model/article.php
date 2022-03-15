<?php

namespace modules\articles\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class article extends Model
{
    use HasFactory , SoftDeletes ;
    protected $fillable =[ "title", 'body' , 'image' , 'category_id' ];
    public $timestamps = true;
    protected $appends=["image_path"];
    public function getImagePathAttribute(){
        return asset('upload/articles/'. $this->image );
    }
}
