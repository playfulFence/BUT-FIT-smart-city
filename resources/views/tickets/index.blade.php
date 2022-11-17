@extends('layout.index')
@section('content')
    <x-ticket_elements>
        <div>
            <a href="{{route('profile.index')}}" class="text-gray-500  hover:text-blue-500 font-bold w-auto  m-1">
                Profile
            </a>
            <label class="w-4 h-4 text-gray-500" >/</label>
            <a href="{{route('user.tickets.index')}}" class="text-black  hover:text-blue-500 font-bold w-auto  m-1">
                Hlášení o problémech
            </a>
        </div>
        <h1 class="text-8xl mb-8 mt-4 ">Hlášení o problémech</h1>
        @foreach($tickets as $ticket)
{{--            @dd($tickets)--}}
{{--            @dump($ticket)--}}
            <div class=" my-3 mx-5 min-w-3/4 p-6 bg-white border border-black rounded-lg @if($ticket->ticket_status_id == 1) bg-red-100 @elseif($ticket->ticket_status_id == 2) bg-yellow-100 @else bg-green-100  @endif">
                <div class="grid gap-6 md:grid-cols-2">
                    <div>
                        <label class="w-fit break-all text-3xl mr-2">Nazev:  {{$ticket->title}}</label>
                        <div class="w-fit text-xl">Status: {{$ticket->name}}</div>
                    </div>
                    <div>
                        <div class="flex items-end justify-end">
                            <x-ticket_elements.buttom href="{{route('user.tickets.show',$ticket->id)}}">Podívat se</x-ticket_elements.buttom>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

        <x-paginator :tickets="$tickets" rout="{{route('user.tickets.index')}}"></x-paginator>

    </x-ticket_elements>
@endsection
