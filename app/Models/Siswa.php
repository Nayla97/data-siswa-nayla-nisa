<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Siswa extends Model
{
    protected $fillable = [
        'kelas_id',
        'nis',
        'nama',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'sosial_media',
        'alamat',
        'foto'    
    ];

    protected $table = 'siswa';

    protected $casts = [
        'tanggal_lahir' => 'date',
    ];

    public function Kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }
}
