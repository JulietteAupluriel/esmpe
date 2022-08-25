@component('mail::message')

{{ $content['name'] }}
 
# Votre demande d'inscription a bien été enregistrée pour l’activité «  {{ $content['event_fr'] }} » qui aura lieu le {{ $content['date']->format('d/m/Y') }}.
# Nous reprendrons contact avec vous au plus vite pour confirmer votre inscription.                            
# Cordialement,
                              
# Les partenaires de la Maison de l’Emploi d’Etterbeek

 ----------

{{ $content['name'] }}
  
# Uw inschrijvingsverzoek is geregistreerd voor de activiteit {{ $content['event_nl'] }} die zal plaatsvinden op {{ $content['date']->format('d/m/Y') }}.
# We nemen zo snel mogelijk contact met u op om uw inschrijving te bevestigen.                              
# Met vriendelijke groeten,
                              
# De partners van het Jobhuis van Etterbeek
@endcomponent