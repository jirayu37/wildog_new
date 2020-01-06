@component('mail::message')
# อัพเดท

The body of your message.

{{ $user->mail }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
