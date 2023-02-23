@component('mail::message')
<h4>YOU REQUESTED A WITHDRAWAL OF $200 </h4>
<h6>DETAILS OF THE WITHDRAWAL IS;</h6>
<br>
{{$withdraw['amount']}}<br>
{{$withdraw['is_credit, 0']}}<br>
{{$withdraw['details']}}<br>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
