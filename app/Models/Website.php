<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;
    protected $fillable = [
        'website_name',
        'website_url',
        'website_bill',
        'website_end_date',
    ];

    public function customers()
    {
        return $this->belongsToMany(Customer::class);
    }
}
