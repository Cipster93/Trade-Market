<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Seller extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;

    protected $fillable = ['seller_name', 'email', 'password', 'profile'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'seller_product')->withPivot('price');
    }
    public function isAdmin(): bool
    {
        return $this->is_admin === 0;
    }
}
