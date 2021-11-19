<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * Yang di isi pada fillable hanya bagian field yang perlu di isi oleh user
     * untuk ID, updated_at, itu semua di isi otomatis oleh sistem
     * @var string[]
     */
    protected $fillable = [
        'users_id',
        'products_id',
        'transactions_id',
        'quantity',
    ];

    // Relasi Product
    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'products_id');
    }
}
