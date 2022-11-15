@extends('layout.forms')
@section('form_content')
    <x-authentication>
        <x-form_elements.title>Registrovat</x-form_elements.title>

        <x-authentication.form action="{{route('registration.store')}}">
            <div class="grid gap-6 md:grid-cols-2">
                <x-form_elements.universal name="name" placeholder="Jan">Jmeno*</x-form_elements.universal>

                <x-form_elements.universal name="lastname" placeholder="Novák">Příjmení*</x-form_elements.universal>

                <x-form_elements.email>*</x-form_elements.email>

                <x-form_elements.universal  name="phone" placeholder="787897543">Telefon</x-form_elements.universal>

                <x-form_elements.password>Heslo*</x-form_elements.password>
                <x-form_elements.password name="password_confirmation">Potvrzení hesla*</x-form_elements.password>

            </div>
            <div class="grid gap-6 md:grid-cols-2">
                <x-form_elements.universal type="date"  name="birthday" >Birthday</x-form_elements.universal>
            </div>
            <x-form_elements.buttom class="flex items-center justify-center">
                Registrovat
            </x-form_elements.buttom>
            <div class="flex items-center justify-center">Účet už mám. <a href="{{route('authentication.index')}}" class="text-blue-600 p-1"> Přihlásit se</a></div>

        </x-authentication.form>
    </x-authentication>
@endsection
