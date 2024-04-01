<?php

namespace App\Livewire\Pages;

use App\Models\Contact;
use App\Notifications\AdminContactNotification;
use App\Notifications\CustomerContactNotification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;
use Illuminate\Support\Str;

class ContactUs extends Component
{
    public $subject;
    public $phone_number;
    public $email;
    public $message;

    public $ticket_id;
    public $full_name;

    protected $rules = [
        'subject' => 'required|string|min:5',
        'phone_number' => 'required|numeric',
        'email' => 'required|email',
        'message' => 'required|string',
        'full_name' => 'required',
    ];

    public function updated($fields)
    {
        $this->validate($fields);
    }

    public function generateTicket()
    {
        $this->ticket_id = Str::random(5);
    }

    public function sendMessage()
    {
        $this->generateTicket();
        $this->validate();
        try {
            $message = new Contact();
            $message->full_name = $this->full_name;
            $message->subject = $this->subject;
            $message->phone_number = $this->phone_number;
            $message->email = $this->email;
            $message->message = $this->message;
            $message->ticket_id = $this->ticket_id;
            $message->save();
            Notification::route('mail', $this->email)
                ->notify(new CustomerContactNotification($message));
            Notification::route('mail', env('ADMIN_EMAIL'))
                ->notify(new AdminContactNotification($message));
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addSuccess('Thank you for contacting us. We will reply the soonest.');
            return redirect(request()->header('Referer'));
        } catch (\Exception $e) {
            Log::error('Unexpected Exception on creating contact message: ' . $e->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('Unexpected error occurred. Please try again later.');
            return redirect(request()->header('Referer'));
        } catch (\Throwable $th) {
            Log::error('Throwable Error on creating contact message: ' . $th->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('Unexpected error occurred. Please try again later.');
            return redirect(request()->header('Referer'));
        }
    }
    public function render()
    {
        return view('livewire.pages.contact-us')->layout('layouts.base');
    }
}
