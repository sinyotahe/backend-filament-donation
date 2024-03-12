<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice', 'campaign_id', 'donatur_id', 'amount', 'pray', 'status', 'snap_token'
    ];
    public function campaign(): BelongsTo
    {
        return $this->belongsTo(Campaign::class);
    }

    public function donatur(): BelongsTo
    {
        return $this->belongsTo(Donatur::class);
    }
}
