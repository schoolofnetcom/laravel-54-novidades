@component('mail::message')
# Olá, {{ $user->name }}

Bem vindo a SON.

@component('mail::button', ['url' => 'http://schoolofnet.com'])
Veja nosso site
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
