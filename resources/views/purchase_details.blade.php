@component('mail::message')
<h4>ITEMS RECIEVED </h4>
<br>
{{$deposit['transaction_id']}}<br>
{{$deposit['paystack_reference']}}<br>
{{$deposit['description']}}<br>
{{$deposit['quantity']}}<br>
{{$deposit['deposit']}}<br>
{{$deposit['status']}}<br>



@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
