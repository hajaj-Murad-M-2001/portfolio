<x-mail::message>
# وصلتك رسالة جديدة عبر موقعك! 🚀

**الاسم:** {{ $contactMessage->name }}  
**البريد الإلكتروني:** {{ $contactMessage->email }}  
**عنوان الـ IP:** {{ $contactMessage->ip_address ?? 'غير متوفر' }}  

**نص الرسالة:**  
> {{ $contactMessage->message }}

@component('mail::button', ['url' => url('/admin/messages')])
عرض الرسائل في لوحة التحكم
@endcomponent

شكراً لك،  
نظام الموقع الذكي 🛡️
</x-mail::message>