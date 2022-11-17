@extends('layout.index')
@section('content')
    <x-ticket_elements>
        <div>
            <a href="{{route('profile.index')}}" class="text-gray-500  hover:text-blue-500 font-bold w-auto  m-1">
                Profile
            </a>
            <label class="w-4 h-4 text-gray-500" >/</label>
            <a href="{{route('user.tickets.index')}}" class="text-gray-500  hover:text-blue-500 font-bold w-auto  m-1">
                Hlášení o problémech
            </a>
            <label class="w-4 h-4 text-gray-500" >/</label>
            <a href="{{route('user.tickets.show',$ticket->id)}}" class="text-black  hover:text-blue-500 font-bold w-auto  m-1">
                Informace o hlášení
            </a>
        </div>
        <h1 class="text-8xl mb-8 mt-4 ">Informace o hlášení </h1>


        <h1>{{$ticket->title}}</h1>
        <div>{{$ticket->description}}</div>

        @foreach($images as $image)
{{--            @dd(storae($image->path))--}}
        <img src="{{asset('/storage/'.$image->path)}}" />
        @endforeach
    </x-ticket_elements>
@endsection
