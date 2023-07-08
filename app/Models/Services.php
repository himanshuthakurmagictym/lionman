<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $table = "service";
    protected $fillable = ['service_name','service_image', 'service_content', 'slug'];
    public $timestamps = true;
}
