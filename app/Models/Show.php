<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $fillable = [
        'title',
        'venue',
        'date',
        'capacity',
        'tickets_sold',
        'ticket_price',
    ];

    protected function casts(): array
    {
        return [
            'date' => 'datetime',
            'capacity' => 'integer',
            'tickets_sold' => 'integer',
            'ticket_price' => 'decimal:2',
        ];
    }

    public function fillRate(): float
    {
        return $this->capacity > 0
            ? round($this->tickets_sold / $this->capacity * 100, 1)
            : 0.0;
    }
}
