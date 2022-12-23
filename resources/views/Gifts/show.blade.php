@extends('layouts.app')
@section('snow')
<div id="particles-js"></div>
@endsection

@section('content')
<section class="section-main outer-container-cards  flex-column flex-wrap">
   
    <div class="bg-black w-75 d-flex">
        {{-- img --}}
        <div class="col-4 bg-white d-flex align-items-center align-content-center">
            <div><img src="{{$gift->image}}" alt=""></div>
        </div>
        {{-- testo --}}
        <div class="col-6 single-card-text flex-column">
            {{-- dettagli --}}
            <div class="flex-grow-1  ps-4">
                <p class="text-white">{{$gift->gift}}</p>
                <p class="text-white">{{$gift->name}}</p>
                <p class="text-white">{{$gift->surname}}</p>
                <p class="text-white">{{$gift->age}}</p>
                <p class="text-white">{{$gift->country}}</p>
                <p class="text-white">{{$gift->city}}</p>
                <p class="text-white">{{$gift->address}}</p>
            </div>
            
        </div>
        <div class="col-2 d-flex flex-column pb-3">
            <div class="text-center">
                <a href={{route('gifts.edit', $gift->id)}}>
                modifica
                </a>
            </div>
            <form action={{route('gifts.destroy', $gift->id)}} method="POST">
            @csrf
            @method('DELETE')
            <button class="noselect delete"><span class='text'>Delete</span><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg></span></button>
            </form>
        </div>
      
    </div>
    <div ><a class=" text-uppercase text-white col-12 text-decoration-underline" href="{{route('gifts.index')}}">back to gifts</a></div>
</section>   



@endsection