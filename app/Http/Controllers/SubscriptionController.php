<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use App\Models\Promotion;
use Illuminate\Support\Facades\Mail;

class SubscriptionController extends Controller
{
    public function subscribe()
    {
        $user = Auth::user();

        $articles = Article::latest()->take(5)->get();
        $promotions = Promotion::latest()->take(5)->get();

        Mail::send('emails.subscription', [
            'articles' => $articles,
            'promotions' => $promotions
        ], function($message) use ($user) {
            $message->to($user->email);
            $message->subject('Подписка на новости и акции');
        });

        return back()->with('success', 'Письмо отправлено на ваш email!');
    }
}
