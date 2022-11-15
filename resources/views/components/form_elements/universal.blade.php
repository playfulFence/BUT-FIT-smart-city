@props([
    'name' => '#',
    'placeholder' => '',
    'type' => 'text'
])

<div>
    <label for="{{$name}}"  class="m-1" >{{$slot}}</label>
    <input type="{{$type}}" value="{{old($name)}}" name="{{$name}}" class=" @error($name) border-2 border-red-500 @enderror w-full p-2.5 rounded-lg shadow-inner focus:outline-blue-600 bg-gray-100 text-black" placeholder="{{$placeholder}}" >
    @error($name)
    <div class="m-1 text-red-400 text-sm">{{$message}}</div>
    @enderror
</div>
