@component('mail::message')
New registration to InfiniteFood

Welcome and thank you for joning this healthy campaign.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
