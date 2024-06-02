<x-mail::message>
    # {{ $contact['subject'] }}

    {{ $contact['message'] }}

    - Name: {{ $contact['name'] }}

    - Email: {{ $contact['email'] }}

    - Phone: {{ $contact['phone'] }}

</x-mail::message>
