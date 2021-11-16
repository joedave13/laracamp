@component('mail::message')
# Register Camp: {{ $checkout->camp->title }}

Hi, {{ $checkout->user->name }}.
<br>
Thank you for register on {{ $checkout->camp->title }}, please check the payment instruction by clicking the button below.

@component('mail::button', ['url' => route('dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
Laracamp
@endcomponent