<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class ProductGallery extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     * Yang di isi pada fillable hanya bagian field yang perlu di isi oleh user
     * untuk ID, updated_at, itu semua di isi otomatis oleh sistem
     * @var string[]
     */
    protected $fillable = [
        'products_id',
        'url',
    ];

    // Untuk Melengkapi URL pada API
    public function getUrlAttribute($url)
    {
        return config('app.url') . Storage::url($url);
    }
}
