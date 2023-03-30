<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'group_id',
        'entry_year_id',
        'nisn',
        'nis',
        'nik',
        'no_akta',
        'nama_siswa',
        'panggilan',
        'jenis_kelamin',
        'tpa',
        'tempat_lahir',
        'tanggal_lahir',
        'nama_ayah',
        'pekerjaan_ayah',
        'nama_ibu',
        'pekerjaan_ibu',
        'alamat',
        'alamat_domisili',
        'no_telepon',
    ];

    protected $attributes = [
        'tpa' => '0',
    ];

    public function group() {
        return $this->belongsTo('App\Models\Group');
    }

    public function entryYear() {
        return $this->belongsTo('App\Models\EntryYear');
    }

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
}
