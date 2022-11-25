@extends('layout.index')
@section('content')
    <x-ticket_elements>
        <div>
            <a href="{{route('profile.cityman')}}" class="text-gray-500  hover:text-blue-500 font-bold w-auto  m-1">
                Citymanager Page
            </a>
            <label class="w-4 h-4 text-gray-500" >/</label>
            <a href="{{route('citymanager.new_tickets_list')}}" class="@if(!isset($old))text-black @else text-gray-500  @endif  hover:text-blue-500 font-bold w-auto  m-1">
                Nově podáné
            </a>
        </div>
        <h1 class="text-8xl mb-8 mt-4 ">Hlášení o problémech</h1>

        <br>
        <br>
        <br>

        @foreach($tickets as $ticket)
            {{--            @dd($tickets)--}}
            {{--            @dump($ticket)--}}
            <div class=" my-3 mx-5 min-w-3/4 p-6 bg-white border border-black rounded-lg @if($ticket->ticket_status_id == 1) bg-red-100 @elseif($ticket->ticket_status_id == 2) bg-yellow-100 @else bg-green-100  @endif">
                <div class="grid gap-6 md:grid-cols-2">
                    <div>
                        <label class="w-fit break-all text-3xl mr-2">Nazev:  {{$ticket->title}}</label>
                        @if ($ticket->ticket_status_id == 1)
                            <div class="w-fit text-xl">Status: Podáno</div>
                        @elseif($ticket->ticket_status_id == 2)
                            <div class="w-fit text-xl">Status: V průběhu</div>
                        @elseif($ticket->ticket_status_id == 3)
                            <div class="w-fit text-xl">Status: Vyřešeno</div>
                        @endif
                    </div>
                    <div>
                        <div class="flex items-end justify-end">
                            <x-ticket_elements.buttom href="{{route('citymanager.ticketDetailed',$ticket->id)}}">Podívat se</x-ticket_elements.buttom>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach


        @php
            $rout = route('user.tickets.index');
            if(isset($old)){
                $rout = route('user.tickets.index.old');
            }
        @endphp

        <x-paginator  :tickets="$tickets" rout='{{$rout}}' ></x-paginator>

    </x-ticket_elements>
@endsection
