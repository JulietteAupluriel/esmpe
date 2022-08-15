@component('mail::message')
# {{ $content['name'] }},
# Votre demande d'inscription a bien été enregistrée pour la formation "{{ $content['event'] }}" qui aura lieu le {{ $content['date']->format('d/m/Y') }}. 
# Nous ne manquerons pas de reprendre contact avec vous pour confirmer votre inscription.

Bien à vous,<br>
{{ config('app.name') }}
@endcomponent
