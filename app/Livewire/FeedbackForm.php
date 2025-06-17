<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Feedback;
use Illuminate\Support\Facades\Http;

class FeedbackForm extends Component
{
    public $phone;
    public $email;
    public $message;
    public $recaptchaToken;

    protected $rules = [
        'phone' => 'nullable|string|regex:/^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$/',
        'email' => 'nullable|email|max:255',
        'message' => 'required|string|min:10|max:1000',
        'recaptchaToken' => 'required|string',
    ];

    protected $listeners = [
        'recaptcha-verified' => 'setRecaptchaToken',
        'recaptcha-expired' => 'clearRecaptchaToken',
        'recaptcha-error' => 'handleRecaptchaError'
    ];

    public function setRecaptchaToken($event)
    {
        $this->recaptchaToken = $event['token'];
        $this->resetErrorBag('recaptchaToken');
    }

    public function clearRecaptchaToken()
    {
        $this->recaptchaToken = null;
        $this->addError('recaptchaToken', 'Проверка reCAPTCHA истекла. Пожалуйста, пройдите её снова.');
    }

    public function handleRecaptchaError()
    {
        $this->recaptchaToken = null;
        $this->addError('recaptchaToken', 'Произошла ошибка при проверке reCAPTCHA. Пожалуйста, попробуйте ещё раз.');
    }

    public function submit()
    {
        $this->validate();

        // Проверка reCAPTCHA на сервере
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('services.recaptcha.secret'),
            'response' => $this->recaptchaToken,
            'remoteip' => request()->ip(),
        ]);

        if (!$response->json('success')) {
            $this->addError('recaptchaToken', 'Не удалось проверить reCAPTCHA. Пожалуйста, попробуйте ещё раз.');
            $this->dispatch('reset-recaptcha');
            return;
        }

        // Сохранение данных
        Feedback::create([
            'phone' => $this->phone,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        $this->reset();
        $this->dispatch('reset-recaptcha');
        session()->flash('message', 'Спасибо! Мы свяжемся с вами в ближайшее время.');
    }

    public function render()
    {
        return view('livewire.feedback-form');
    }
}
