@extends('layout.forms')
@section('form_content')
    <x-authentication>
        <x-form_elements.title>Přihlásit se</x-form_elements.title>

            <x-authentication.form action="{{route('authentication.check')}}">

            <x-form_elements.email></x-form_elements.email>

            <x-form_elements.password>Heslo</x-form_elements.password>

            <x-form_elements.buttom class='flex items-center justify-center'>
              Přihlásit se
            </x-form_elements.buttom>
                <div class="flex items-center justify-center">Nemám účet.  <a href="{{route('registration.create')}}" class="text-blue-600 p-1"> Registrace</a></div>
        </x-authentication.form>
    </x-authentication>
@endsection
