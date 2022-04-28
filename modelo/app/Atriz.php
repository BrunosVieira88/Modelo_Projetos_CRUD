<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Atriz extends Model
{
   public $timestamps = false;
   protected $fillable = ['nome','idade','peito','bunda','rosto','capa'];
}
