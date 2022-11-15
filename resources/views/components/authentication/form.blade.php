@props([
    'action' => '#'
])
<form class="space-y-3 md:space-y-5" action="{{$action}}" method="POST" >
    @csrf
    {{$slot}}
</form>
