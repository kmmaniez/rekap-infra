<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infrastruktur extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['ruangans','penggunas'];

    public function ruangans()
    {
        return $this->belongsTo(Ruangan::class, 'id_ruang');
    }
    
    public function penggunas()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
