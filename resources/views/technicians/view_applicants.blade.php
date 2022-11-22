@extends('layout.index')
@section('content')
    <x-ticket_elements>
        <div>
            <a href="{{route('profile.cityman')}}" class="text-gray-500  hover:text-blue-500 font-bold w-auto  m-1">
                Citymanager page
            </a>
            <label class="w-4 h-4 text-gray-500" >/</label>
            <a href="{{route('citymanager.techs')}}" class="text-gray-500  hover:text-blue-500 font-bold w-auto  m-1">
                Aktuální technici
            </a>
            <label class="w-4 h-4 text-gray-500" >/</label>
            <a href="{{route('citymanager.techs')}}" class="@if(!isset($old))text-black @else text-gray-500  @endif  hover:text-blue-500 font-bold w-auto  m-1">
                Aktuální technici
            </a>
        </div>

        <div class="flex items-center justify-between">
            <h1 class="text-8xl mb-8 mt-4 ">Kandidáty na pozicí technika</h1>
        </div>

        <div class = "w-full h-16"> </div>

        @foreach($techs as $tech)
            {{--            @dd($tickets)--}}
            {{--            @dump($ticket)--}}
            <div class=" my-3 mx-5 min-w-3/4 p-6 bg-white border border-black rounded-l">
                <div class="grid gap-6 md:grid-cols-2">
                    <div>
                        <label class="w-fit break-all text-3xl mr-2">Jméno:  {{$tech->name}} {{$tech->lastname}}</label><br>
                        <label class="w-fit break-all text-2xl mr-2">Číslo:  {{$tech->phone}}</label><br>
                        <label class="w-fit break-all text-2xl mr-2">E-mail: {{$tech->email}}</label>
                    </div>
                    <div>
                        <div class="flex items-end justify-end mt-6">
                            <x-ticket_elements.buttom href="{{route('citymanager.accept_tech',$tech)}}">Přijmout</x-ticket_elements.buttom>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach


        @php
            $rout = route('citymanager.problems');
//            if(isset($old)){
//                $rout = route('user.tickets.index.old');
//            }
        @endphp

        <x-paginator  :tickets="$techs" rout='{{$rout}}' ></x-paginator>

    </x-ticket_elements>
@endsection
