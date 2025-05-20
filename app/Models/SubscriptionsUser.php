<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionsUser extends Model
{

    use HasFactory;

    protected $table = 'subscriptions_users';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class,  'user_id', 'id');
    }

    public function subscription()
    {
        return $this->belongsTo(Subscription::class, 'subscription_id', 'id');
    }
}
