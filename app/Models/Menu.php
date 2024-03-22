<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\Cart;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'image',
        'name',
        'description',
        'price',
        'content',
    ];
    
// public function carts() {
//     return $this->belongsTo(Cart::class);
// }

    
//     protected function fullTextWildcards($term)
//    {
//        // removing symbols used by MySQL
//        $reservedSymbols = ['-', '+', '<', '>', '@', '(', ')', '~'];
//        $term = str_replace($reservedSymbols, '', $term);

//        $words = explode(' ', $term);

//        foreach ($words as $key => $word) {
//            /*
//             * applying + operator (required word) only big words
//             * because smaller ones are not indexed by mysql
//             */
//            if (strlen($word) >= 1) {
//                $words[$key] = '+' . $word  . '*';
//            }
//        }
       
//        $searchTerm = implode(' ', $words);

//        return $searchTerm;
//    }

//    public static function FullTextSearch($query, $columns, $term)
//    {
//        $query->whereRaw("MATCH ({$columns}) AGAINST (? IN BOOLEAN MODE)", $this->fullTextWildcards($term));

//        return $query;
//    }

}
