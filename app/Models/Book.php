<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
        public function author() {
            return $this->belongsTo(Author::class);
        }
    
        public function genre() {
            return $this->belongsTo(BookGenre::class);
        }
    
        public function checkouts() {
            return $this->hasMany(BookCheckout::class);
        }
    }
    
