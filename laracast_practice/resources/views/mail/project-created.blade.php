@component('mail::message')
# {{ $project->title }}

The body of your message.

@component('mail::button', ['url' => '/projects/'. $project->id])
Check Your project
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
