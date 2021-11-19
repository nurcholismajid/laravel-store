<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
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
        'prices',
        'description',
        'tags',
        'categories_id',
    ];

    // Relasi Ke Galleries
    public function galleries() 
    {
        return $this->hasMany(ProductGallery::class, 'products_id', 'id');
    }

    // Relasi Ke Category
    public function category() 
    {
        return $this->belongsTo(ProductCategory::class, 'categories_id', 'id');
    }
}
