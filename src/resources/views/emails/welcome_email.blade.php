@component('mail::message')
# Message de Bienvenue

Bienvenue Mr/me {{ $user->name }} au sein de la communaute Goaubled.
Nous vous souhaitons un agreable Moment parmis nous.

@component('mail::button', ['url' => "{{ route('accueil') }}"])
accueil
@endcomponent

Merci,<br>
La Team Goaubled
@endcomponent
