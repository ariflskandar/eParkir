<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookParking extends Model
{
    use HasFactory;
    protected $table = 'book_parking';
    protected $fillable = ['book_id','matric_no','plate_no','area_id','lot_id','lot_status','matric_image','license_image'];
    protected $primaryKey = 'book_id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function getRouteKeyName()
    {
        return 'book_id';
    }
}