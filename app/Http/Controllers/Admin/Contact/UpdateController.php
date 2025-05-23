<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Contact\UpdateRequest;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Sales_statistics;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Contact $contact)
    {

        try {

            DB::transaction(function () use ($request, $contact) {
                $data = $request->validated();
                $contact->update($data);
            });

            return redirect()->route('admin.contacts.edit', $contact->id)->with('success', 'Контакт успешно обновлен!');
        } catch (Exception $e) {
            return redirect()
                ->route('admin.contacts.edit', $contact->id)
                ->with([
                    'error' => 'При обновлении произошла ошибка, обратитесь пожалуйста в поддержку.',
                    'telegram_link' => 'https://t.me/user_Kirillka',
                    'telegram_text' => 'Telegram - @user_Kirillka'
                ]);
        }
    }
}
//office@izhevsk.ru
//г. Ижевск, ул. Пушкинская, 268Ж
//+7 (912) 024-10-20
