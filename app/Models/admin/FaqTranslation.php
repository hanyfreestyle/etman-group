<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "faq_translations";
    protected $fillable = ['name'];

}
