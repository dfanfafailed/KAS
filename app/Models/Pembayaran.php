<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pembayaran extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'pembayaran';

    function pengeluaran() : BelongsTo {
        return $this->belongsTo(Pengeluaran::class,'id_pengeluaran','id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_siswa', 'id');
    }
}
