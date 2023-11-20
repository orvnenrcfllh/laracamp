<x-mail::message>
# Welcome

Hi {{ $user->name }}
<br>
Welcome to Laracamp, your account has been craeted successfully. Now you can choose you best match camp!

<x-mail::button :url="route('login')">
Login Here
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
