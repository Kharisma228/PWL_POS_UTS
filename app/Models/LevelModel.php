<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LevelModel extends Model
{
    use HasFactory;

    protected $table = 'm_level';        // Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'level_id';  // Mendfinisikan primary key dari tabel yang digunakan

    /**
     * The attributes that are mass assignable
     * 
     * @var array
     */
     protected $fillable = ['level_id', 'level_kode', 'level_nama'];
}