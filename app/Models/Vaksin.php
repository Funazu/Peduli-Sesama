<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaksin extends Model
{
    use HasFactory;

    protected $table = 'vaksins';
    protected $primayKey = 'id';

    protected $fillable = [
        'nama_lengkap', 'nik', 'tanggal_lahir', 'jenis_kelamin', 'no_hp', 'alamat', 'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
