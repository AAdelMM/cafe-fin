<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subscription extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
        'start_date',
        'end_date',
        'amount',
        'payment_method',
        'payment_received',
        'notes'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'payment_received' => 'boolean',
        'amount' => 'decimal:2'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
