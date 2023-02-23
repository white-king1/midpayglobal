@component('mail::message')
<h4>YOUR DEPOSIT OF  {{$transactionWallet['amount']}} WAS SUCCESSFUL</h4>
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
