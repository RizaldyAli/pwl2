<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';
    // protected $primaryKey = 'id';
    // protected $keyTyoe = 'int';
    protected $fillable = [
        'nim',
        'nama',
        'prodi_id',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'hp'
    ];

    public function prodi(){
        return $this->belongsTo(ProdiModel::class, 'prodi_id', 'prodi_id');
    }
}
