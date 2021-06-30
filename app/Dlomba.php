<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dlomba extends Model
{
    protected $table = 'dlombas';
    protected $fillable = ['pelogin', 'tim', 'anggota1', 'anggota2', 'anggota3', 'anggota4', 'bukti', 'status', 'user_id', 'lomba_id'];

    public function getUser()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function getLomba()
    {
        return $this->belongsTo(Lomba::class, 'lomba_id');
    }
}
