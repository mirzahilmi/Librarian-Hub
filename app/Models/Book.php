<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'name',
        'cover_url',
        'release_year',
        'publisher',
        'published_from',
        'language',
        'total_page',
        'synopsis',
        'rating',
        'hard_copy_available',
        'ebook_available',
        'audio_book_available',
        'status',
        'bookshelf'
    ];

    public function borrowed_book(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(BorrowedBook::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function author() {
        return $this->belongsTo(Author::class);
    }
}
