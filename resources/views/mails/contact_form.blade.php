@component('mail::message')
# New Contact Form Submission

**Name:** {{ $details['name'] }}  
**Email:** {{ $details['email'] }}  
**Phone:** {{ $details['phone'] }}  
**Interested Product:** {{ $details['product'] }}

@endcomponent 