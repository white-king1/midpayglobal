@component('mail::message')
<h4>PAYMENT HAS BEEN SUCCESSFULLY MADE</h4>
<br>
{{$placeOrder['transaction_id']}}<br>
{{$placeOrder['paystack_reference']}}<br>
{{$placeOrder['description']}}<br>
{{$placeOrder['quantity']}}<br>
{{$placeOrder['deposit']}}<br>
{{$placeOrder['status']}}<br>



@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
