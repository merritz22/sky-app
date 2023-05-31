<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Reabos extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'date_deb',
        'date_fin'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
