<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contactUs()
    {
        $data = 'Cloudways';
        Mail::to('CoffeeAddicted420@coffee.nl')->send(new ContactUs($data));

        return 'Email sent Successfully';
    }
}
