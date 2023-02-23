@component('mail::message')
<h4>YOU REQUESTED A REFUND </h4>
<h6>DETAILS OF THE REFUND YOU REQUESTED;</h6>
<br>
{{$refund['transaction_id']}}<br>
{{$refund['paystack_reference']}}<br>
{{$refund['description']}}<br>
{{$refund['quantity']}}<br>
{{$refund['deposit']}}<br>




@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
