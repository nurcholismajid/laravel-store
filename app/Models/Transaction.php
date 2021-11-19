<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     * Yang di isi pada fillable hanya bagian field yang perlu di isi oleh user
     * untuk ID, updated_at, itu semua di isi otomatis oleh sistem
     * @var string[]
     */
    protected $fillable = [
        'users_id',
        'address',
        'payment',
        'total_price',
        'shipping_price',
        'status',
    ];

    // Relasi Kebalikan Karena ini miliknya User
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    // Relasi Transaction Items
    public function items()
    {
        return $this->hasMany(TransactionItem::class, 'transactions_id', 'id');
    }
}

