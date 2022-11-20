
<div class="flex-row flex mt-8">
    <x-paginator.back page="{{$problems->currentPage()}}" rout="{{$rout}}" />
    @if($problems->currentPage() >= 5  && $problems->currentPage() <=  $problems->lastPage() - 4 )
        <div class="flex-row flex">
            <x-paginator.element page="{{$problems->currentPage()}}" number="{{$problems->currentPage()-4}}" rout="{{$rout}}" last="{{$problems->lastPage()}}" />
            <x-paginator.element page="{{$problems->currentPage()}}" number="{{$problems->currentPage()-3}}"  rout="{{$rout}}" last="{{$problems->lastPage()}}" />
            <x-paginator.element page="{{$problems->currentPage()}}" number="{{$problems->currentPage()-2}}" rout="{{$rout}}" last="{{$problems->lastPage()}}" />
            <x-paginator.element page="{{$problems->currentPage()}}" number="{{$problems->currentPage()-1}}" rout="{{$rout}}" last="{{$problems->lastPage()}}" />
            <x-paginator.element page="{{$problems->currentPage()}}" number="{{$problems->currentPage()-0}}" rout="{{$rout}}" last="{{$problems->lastPage()}}" />
            <x-paginator.element page="{{$problems->currentPage()}}" number="{{$problems->currentPage()+1}}" rout="{{$rout}}" last="{{$problems->lastPage()}}" />
            <x-paginator.element page="{{$problems->currentPage()}}" number="{{$problems->currentPage()+2}}" rout="{{$rout}}" last="{{$problems->lastPage()}}" />
            <x-paginator.element page="{{$problems->currentPage()}}" number="{{$problems->currentPage()+3}}" rout="{{$rout}}" last="{{$problems->lastPage()}}" />
            <x-paginator.element page="{{$problems->currentPage()}}" number="{{$problems->currentPage()+4}}" rout="{{$rout}}" last="{{$problems->lastPage()}}" />
        </div>
    @elseif($problems->currentPage() < 5 || $problems->lastPage() - 8 < 1)
        <div class="flex-row flex">
            <x-paginator.element page="{{$problems->currentPage()}}" number="{{1}}" rout="{{$rout}}" last="{{$problems->lastPage()}}" />
            <x-paginator.element page="{{$problems->currentPage()}}" number="{{2}}" rout="{{$rout}}" last="{{$problems->lastPage()}}"/>
            <x-paginator.element page="{{$problems->currentPage()}}" number="{{3}}" rout="{{$rout}}" last="{{$problems->lastPage()}}"/>
            <x-paginator.element page="{{$problems->currentPage()}}" number="{{4}}" rout="{{$rout}}" last="{{$problems->lastPage()}}"/>
            <x-paginator.element page="{{$problems->currentPage()}}" number="{{5}}" rout="{{$rout}}" last="{{$problems->lastPage()}}" />
            <x-paginator.element page="{{$problems->currentPage()}}" number="{{6}}" rout="{{$rout}}" last="{{$problems->lastPage()}}" />
            <x-paginator.element page="{{$problems->currentPage()}}" number="{{7}}" rout="{{$rout}}" last="{{$problems->lastPage()}}" />
            <x-paginator.element page="{{$problems->currentPage()}}" number="{{8}}" rout="{{$rout}}" last="{{$problems->lastPage()}}"/>
            <x-paginator.element page="{{$problems->currentPage()}}" number="{{9}}" rout="{{$rout}}" last="{{$problems->lastPage()}}"/>
        </div>
    @elseif($problems->currentPage() >= $problems->lastPage() -4 && $problems->lastPage() - 8 >= 1)
        <div class="flex-row flex">
            <x-paginator.element page="{{$problems->currentPage()}}" number="{{$problems->lastPage()-8}}" rout="{{$rout}}"  last="{{$problems->lastPage()}}"/>
            <x-paginator.element page="{{$problems->currentPage()}}" number="{{$problems->lastPage()-7}}" rout="{{$rout}}"  last="{{$problems->lastPage()}}"/>
            <x-paginator.element page="{{$problems->currentPage()}}" number="{{$problems->lastPage()-6}}" rout="{{$rout}}"  last="{{$problems->lastPage()}}"/>
            <x-paginator.element page="{{$problems->currentPage()}}" number="{{$problems->lastPage()-5}}" rout="{{$rout}}"  last="{{$problems->lastPage()}}"/>
            <x-paginator.element page="{{$problems->currentPage()}}" number="{{$problems->lastPage()-4}}" rout="{{$rout}}"  last="{{$problems->lastPage()}}"/>
            <x-paginator.element page="{{$problems->currentPage()}}" number="{{$problems->lastPage()-3}}" rout="{{$rout}}"  last="{{$problems->lastPage()}}"/>
            <x-paginator.element page="{{$problems->currentPage()}}" number="{{$problems->lastPage()-2}}" rout="{{$rout}}"  last="{{$problems->lastPage()}}"/>
            <x-paginator.element page="{{$problems->currentPage()}}" number="{{$problems->lastPage()-1}}" rout="{{$rout}}"  last="{{$problems->lastPage()}}"/>
            <x-paginator.element page="{{$problems->currentPage()}}" number="{{$problems->lastPage()-0}}" rout="{{$rout}}"  last="{{$problems->lastPage()}}"/>
        </div>
    @endif
    <x-paginator.next page="{{$problems->currentPage()}}" last="{{$problems->lastPage()}}" rout="{{$rout}}" />
</div>
