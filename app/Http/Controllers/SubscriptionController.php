<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Models\Article;
use App\Models\Promotion;
use Illuminate\Support\Facades\Mail;


class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        $user = auth()->user();

        if (!Subscriber::where('email', $user->email)->exists()) {
            Subscriber::create([
                'email' => $user->email,
            ]);
        }
        $articles = Article::latest()->take(5)->get();
        $promotions = Promotion::latest()->take(5)->get();

        Mail::send('emails.subscription', [
            'articles' => $articles,
            'promotions' => $promotions
        ], function($message) use ($user) {
            $message->to($user->email);
            $message->subject('Подписка на новости и акции');
        });

        return back()->with('success', 'Вы успешно подписались.');
    }

    public function unsubscribe(Request $request)
    {
        $user = auth()->user();

        Subscriber::where('email', $user->email)->delete();

        return back()->with('success', 'Вы успешно отписались.');
    }
}
