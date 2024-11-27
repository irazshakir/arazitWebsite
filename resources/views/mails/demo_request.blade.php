@component('mail::message')
# New Demo Request via Demo Model

**Name:** {{ $details['name'] }}  
**Email:** {{ $details['email'] }}  
**Phone:** {{ $details['phone'] }}  
**Industry:** {{ $details['industry'] }}

@endcomponent