@extends('layout.index')
@section('content')
    <x-profile_elements>
        <h1 class="text-8xl mt-8">Uživatelský účet</h1>
        <div class="px-10 mt-20">
            <x-profile_elements.header :user="$user"/>
            <x-profile_elements.tabs>
                <x-profile_elements.tab color="text-blue-700 border-b-blue-700" href="#">Uživatel
                </x-profile_elements.tab>
                <x-profile_elements.tab href="#">Administrátor</x-profile_elements.tab>
                <x-profile_elements.tab href="#">Správce města</x-profile_elements.tab>
                <x-profile_elements.tab href="#">Servisní technik</x-profile_elements.tab>
                <x-profile_elements.tab href="#">Změny profilu</x-profile_elements.tab>
            </x-profile_elements.tabs>


            <x-profile_elements.action>
                <x-profile_elements.action_list class="mr-5">
                    <x-profile_elements.action_card href="{{route('user.tickets.create')}}">
                        <x-profile_elements.title_action_card>Hlásit problémy</x-profile_elements.title_action_card>
                        <x-profile_elements.discription_action_card>Pokud ve městě, vidíte problém dejte nám prosím o
                            tom vědět
                        </x-profile_elements.discription_action_card>
                    </x-profile_elements.action_card>
                    <x-profile_elements.action_card href="#">
                        <x-profile_elements.title_action_card>Zobrazit vaše hlášení o problémech
                        </x-profile_elements.title_action_card>
                        <x-profile_elements.discription_action_card><S></S>eznam již nahlášených problémů
                        </x-profile_elements.discription_action_card>
                    </x-profile_elements.action_card>
                </x-profile_elements.action_list>
                <x-profile_elements.action_list class="mr-2">
                    <x-profile_elements.action_card href="#">
                        <x-profile_elements.title_action_card>Zobrazit již vyřešené problémy
                        </x-profile_elements.title_action_card>
                        <x-profile_elements.discription_action_card>Seznam již vyřešených problémů
                        </x-profile_elements.discription_action_card>
                    </x-profile_elements.action_card>
                </x-profile_elements.action_list>
            </x-profile_elements.action>


        </div>
    </x-profile_elements>
@endsection
