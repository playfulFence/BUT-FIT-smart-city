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

        </x-authentication.form>
    </x-authentication>
@endsection
