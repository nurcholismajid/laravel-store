<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     * Yang di isi pada fillable hanya bagian field yang perlu di isi oleh user
     * untuk ID, updated_at, itu semua di isi otomatis oleh sistem
     * @var string[]
     */
    protected $fillable = [
        'name',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'categories_id', 'id');
    }
}
