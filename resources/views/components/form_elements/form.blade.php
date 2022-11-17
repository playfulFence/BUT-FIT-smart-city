@props([
    'action' => '#',
    'enctype' => 'application/x-www-form-urlencoded'
])
<form class="space-y-3 md:space-y-5" action="{{$action}}" method="POST" enctype="{{$enctype}}" >
    @csrf
    {{$slot}}
</form>
