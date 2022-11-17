@extends('layout.index')
@section('content')
    <x-ticket_elements>
        <h1 class="text-8xl my-8 ">Hlášení o problémech</h1>
        @foreach($tickets as $ticket)
            <div class=" my-3 mx-5 block w-1/2 p-6 bg-white border border-black rounded-lg @if($ticket->ticket_status_id == 1) bg-red-200 @elseif($ticket->ticket_status_id == 2) bg-yellow-200 @else bg-green-200  @endif">
                <div class="grid gap-6 md:grid-cols-2">
                    <div>
                        <div class="w-fit text-3xl">{{$ticket->title}}</div>
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
