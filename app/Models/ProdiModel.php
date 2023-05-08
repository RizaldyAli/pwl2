<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdiModel extends Model
{
    use HasFactory;
    protected $table = 'prodi';
    protected $primaryKey = 'prodi_id';
    protected $fillable = ['prodi'];

    public function mahasiswa(){
        return $this->hasMany(MahasiswaModel::class, 'prodi_id', 'prodi_id');
    }
}
