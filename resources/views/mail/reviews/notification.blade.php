<x-mail::message>
# {{$title}}

{{$message}}

@if($link)
<x-mail::button :url="$link">
View Details
</x-mail::button>
@endif


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
