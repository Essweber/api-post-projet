<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\OrderShipped;

class HomeController extends Controller
{
    public function __invoke()
    {
        // return new OrderShipped;
        // Notification::route('mail', ['aessotchossim@gmail.com' => 'Aloua essotchossim'])
        // ->notify(new InvoicePaid);

        // dd('done');

        // $user->notify(new InvoicePaid);

        return [
            'success' => true,
            'status' => 'fullstack',
            'message' => __('message.welcome'),
            'data' => [
                'service' => 'API REST',
                'version' => '1.0',
                'language' => app()->getLocale(),
                'support' => 'contact@mtc',

            ]

        ];
    }
}
