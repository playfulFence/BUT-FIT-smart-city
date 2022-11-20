@extends('layout.index')
@section('content')
    <x-profile_elements>
        <h1 class="text-8xl mt-8">Uživatelský účet</h1>
        <div class="px-10 mt-20">
            <x-profile_elements.header :user="$user"/>
            <x-profile_elements.tabs>
                <x-profile_elements.tab href="{{route('profile.index')}}">Uživatel
                </x-profile_elements.tab>
                @if($is_admin)
                <x-profile_elements.tab href="#">Administrátor</x-profile_elements.tab>
                @endif
                <x-profile_elements.tab color="text-blue-700 border-b-blue-700" href="#">Správce města</x-profile_elements.tab>
                @if($is_tech)
                    <x-profile_elements.tab href="#">Servisní technik</x-profile_elements.tab>
                @endif
                <x-profile_elements.tab href="{{route('profile.edit')}}">Změny profilu</x-profile_elements.tab>
            </x-profile_elements.tabs>


            <x-profile_elements.action>

                <x-profile_elements.action_list class="mr-5">

                    <x-profile_elements.action_card href="{{route('citymanager.new_tickets_list')}}">
                        <x-profile_elements.title_action_card>Zobrazit seznam nových hlášení</x-profile_elements.title_action_card>
                        <x-profile_elements.discription_action_card>Nově podáné hlášení o problémech ve městě</x-profile_elements.discription_action_card>
                    </x-profile_elements.action_card>

                    <x-profile_elements.action_card href="#">
                        <x-profile_elements.title_action_card>Výtvořit nový technický požádavek</x-profile_elements.title_action_card>
                        <x-profile_elements.discription_action_card>Výtvoření a odesilání nového požadavku pro techniky</x-profile_elements.discription_action_card>
                    </x-profile_elements.action_card>

                    <x-profile_elements.action_card href="#">
                        <x-profile_elements.title_action_card>Zobrazit seznam techniků</x-profile_elements.title_action_card>
                        <x-profile_elements.discription_action_card>Seznam aktualních techických pracovníků<br><br></x-profile_elements.discription_action_card>
                    </x-profile_elements.action_card>

                </x-profile_elements.action_list>


                <x-profile_elements.action_list class="mr-5">

                    <x-profile_elements.action_card href="#">
                        <x-profile_elements.title_action_card>Zobrazit seznam problemů</x-profile_elements.title_action_card>
                        <x-profile_elements.discription_action_card><S></S>Seznam všech nahlášených <br>
                                                                        a dosud nevyřešených problémů
                        </x-profile_elements.discription_action_card>
                    </x-profile_elements.action_card>

                    <x-profile_elements.action_card href="#">
                        <x-profile_elements.title_action_card>Zobrazit seznam odeslaných techických požadavků</x-profile_elements.title_action_card>
                        <x-profile_elements.discription_action_card>Seznam odeslaných technických požadavků</x-profile_elements.discription_action_card>
                    </x-profile_elements.action_card>

                    <x-profile_elements.action_card href="#">
                    <x-profile_elements.title_action_card>Zobrazit kandidáty na techického pracovníka</x-profile_elements.title_action_card>
                    <x-profile_elements.discription_action_card>Seznam lidí, kteří se přihlásili <br>
                                                                na pozici technikého pracovníka
                    </x-profile_elements.discription_action_card>
                    </x-profile_elements.action_card>

                </x-profile_elements.action_list>


                <x-profile_elements.action_list class="mr-5">

                    <x-profile_elements.action_card href="#">
                        <x-profile_elements.title_action_card>Zobrazit archivované problémy</x-profile_elements.title_action_card>
                        <x-profile_elements.discription_action_card><S></S>Archiv problémů <br><br></x-profile_elements.discription_action_card>
                    </x-profile_elements.action_card>

                    <x-profile_elements.action_card href="#">
                        <x-profile_elements.title_action_card>Zobrazit archivované technické požadavky</x-profile_elements.title_action_card>
                        <x-profile_elements.discription_action_card> Archiv technických požadavků<br><br> </x-profile_elements.discription_action_card>
                    </x-profile_elements.action_card>

                </x-profile_elements.action_list>

            </x-profile_elements.action>


        </div>
    </x-profile_elements>
@endsection
