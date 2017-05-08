@if($title)
    <title>{{ $title }}</title>
@else
    <title>{{ config('app.name', 'Laravel') }}</title>
@endif

@if($description)
    <meta name="description" content="{{ $description }}">
@endif