<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $fillable = [
        'titre','image','resume','categorie_id','description','tags','slug'
    ];

    public function categorie(){
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
}
