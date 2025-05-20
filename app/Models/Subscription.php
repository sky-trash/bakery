<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $table = 'subscriptions';
    protected $guarded = [];

    public function User()
    {
        return $this->belongsToMany(User::class,  'user_id', 'subscription_id', 'id');
    }
}
