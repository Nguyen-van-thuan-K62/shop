<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'image',
        'description',
        'price',
        'menu_id',
    ];
    
// public function menu() {
//     return $this->belongsTo(Menu::class);
// }
}
