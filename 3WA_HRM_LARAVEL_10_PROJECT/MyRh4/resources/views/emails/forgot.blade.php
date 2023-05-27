@component('mail::message')

Bonjour {{$user->name}},

<p>Vous pouvez réinitialiser votre mot de passe en appuyant sur le bouton ci-dessous</p>

@component('mail::button', ['url' => url('reset' , $user->remember_token)])

Réinitialiser votre mot de passe

@endcomponent

<p>Si vous rencontrez des problèmes pour récupérer votre mot de passe, veuillez nous contacter.</p>

Merci, <br>

{{ config('app.name') }}

@endcomponent