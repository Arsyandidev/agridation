<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lomba extends Model
{
    protected $table = 'lombas';
    protected $fillable = [
        'name', 'description', 'price'
    ];

    public function getDlomba()
    {
        return $this->hasMany(Dlomba::class, 'lomba_id', 'id');
    }
}
