<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsedFeature extends Model
{
    use HasFactory;

    protected $fillable = [
        'feature_id',
        'used_id',
        'credits'
        ];


        protected function casts(): array
        {
            return [
                'data'=> 'array'
                ];
        }

        public function user()
        {
            return $this->belongsTo(User::class);
        }

        public function features()
        {
            return $this->belongsTo(Feature::class);
        }
}
