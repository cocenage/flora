<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Feedback;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\Rule;

class FeedbackForm extends Component
{
    public $phone = '';
    public $email = '';
    public $message = '';
    public $honeypot = '';
    public $form_time;

    protected function rules()
    {
        return [
            'phone' => [
                'required',
                'nullable',
                'string',
                'max:20',
                'regex:/^[\d\s\(\)\+-]*$/',
            ],
            'email' => [
                'required',
                'nullable',
                'email:rfc,dns',
                'max:255',
            ],
            'message' => [
                'required',
                'string',
                'min:10',
                'max:1000',
                Rule::notIn(['http://', 'https://', 'www.']),
                function ($attribute, $value, $fail) {
                    if (preg_match('/<[^>]*>/', $value)) {
                        $fail('Сообщение не должно содержать HTML-теги.');
                    }
                },
            ],
        ];
    }

    protected function messages()
    {
        return [
            'phone.regex' => 'Номер телефона содержит недопустимые символы.',
            'phone.max' => 'Номер телефона не должен превышать :max символов.',
            'email.email' => 'Введите корректный email адрес.',
            'email.max' => 'Email не должен превышать :max символов.',
            'phone.required' => 'Поле номера телефона обязательно для заполнения.',
            'email.required' => 'Поле почты обязательно для заполнения.',
            'message.required' => 'Поле сообщения обязательно для заполнения.',
            'message.min' => 'Сообщение должно содержать не менее :min символов.',
            'message.max' => 'Сообщение не должно превышать :max символов.',
            'message.not_in' => 'Сообщение содержит запрещённые слова.',
        ];
    }

    public function mount()
    {
        $this->form_time = microtime(true);
    }

    public function submit()
    {
        $this->validate();

        // Honeypot проверка
        if ($this->honeypot !== '') {
            return;
        }

        // Проверка времени заполнения
        if ((microtime(true) - $this->form_time) < 3) {
            $this->addError('form', 'Форма заполнена слишком быстро. Пожалуйста, заполняйте форму внимательнее.');
            return;
        }

        // Ограничение частоты запросов
        $executed = RateLimiter::attempt(
            'feedback-form:' . request()->ip(),
            3,
            function () {
                Feedback::create([
                    'phone' => strip_tags($this->phone),
                    'email' => filter_var($this->email, FILTER_SANITIZE_EMAIL),
                    'message' => htmlspecialchars($this->message, ENT_QUOTES, 'UTF-8'),
                ]);
            },
            60
        );

        if (!$executed) {
            $this->addError('form', 'Слишком много попыток отправки. Пожалуйста, попробуйте позже.');
            return;
        }

        $this->reset(['phone', 'email', 'message']);
        session()->flash('success', 'Спасибо! Ваше сообщение успешно отправлено. Мы свяжемся с вами в ближайшее время.');
    }

    public function render()
    {
        return view('livewire.feedback-form');
    }
}
