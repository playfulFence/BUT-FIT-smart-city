@extends('layout.index')
@section('content')
    <x-ticket_elements>
        <div>
            <a href="{{route('profile.manager')}}" class="text-gray-500  hover:text-blue-500 font-bold w-auto  m-1">
                Správce města
            </a>
            <label class="w-4 h-4 text-gray-500" >/</label>
            <a href="{{route('manager.problems.index')}}" class="text-gray-500  hover:text-blue-500 font-bold w-auto  m-1">
                Aktuální problémy
            </a>
            <label class="w-4 h-4 text-gray-500" >|</label>
            <a href="#" class="text-black  hover:text-blue-500 font-bold w-auto  m-1">
                {{$problem->title}}
            </a>
        </div>
        <h1 class="text-8xl mb-8 mt-4 ">Informace o problému </h1>


        <lavel class="text-xl text-gray-600">Nazev:</lavel>
        <div class=" break-after-left break-all mb-4 pl-4 text-4xl rounded-lg ">
            <p>{{$problem->title}}</p>
        </div>


        <lavel class="text-xl text-gray-600">Stav:</lavel>
        <div class=" text-yellow-500 break-after-left mb-4 pl-4 text-4xl rounded-lg ">
            @if($status == 1) <p>Zpracovává se</p> @elseif($status == 2) <p>Vyřešen</p> @endif
        </div>

        <lavel class="text-xl text-gray-600">Adresa:</lavel>
        <div class="mb-4 pl-4 break-all text-3xl rounded-lg ">
            <div>{{$problem->address}}</div>
        </div>

        <lavel class="text-xl text-gray-600">Popis:</lavel>
        <div class="mb-4  break-all break-after-left pl-4 text-2xl rounded-lg ">
            <div>{{$problem->description}}</div>
        </div>

        <div class="flex items-start mb-6 pl-6">
            <a href="{{route('problem.solveProb', $problem)}}" class="bg-blue-700 text-center text-white  hover:bg-blue-500 px-5 py-2.5 rounded-lg font-bold  items-center justify-center">
                Provést změny
            </a>
        </div>

    </x-ticket_elements>
@endsection
