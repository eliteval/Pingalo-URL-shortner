<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortUrlVisits extends Model
{
    use HasFactory;

    protected $table = 'short_url_visits';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'short_url_id',
        'ip_address',
        'operating_system',
    ];
}
