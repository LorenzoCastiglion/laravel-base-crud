@extends('layouts.app')

@section('snow')
<div id="particles-js"></div>
@endsection

@section('content')
<section class="section-main align-items-center justify-content-center">
    <div class="form-container">
        <form action={{ route('gifts.store') }} method="POST" class="text-white">
            @csrf
         
            <div class="d-flex flex-column align-items-center mb-4">
                <label for="gift">Regalo</label>
                <input required type="text" name="gift" id="gift" placeholder="Inserisci il regalo" class="p-1">
            </div>
    
            <div class="d-flex flex-column align-items-center mb-4">
                <label for="name">Nome del bambino</label>
                <input required type="text" name="name" id="name" placeholder="Inserisci il nome del bambino" class="p-1">
            </div>
    
            <div class="d-flex flex-column align-items-center mb-4">
                <label for="surname">Cognome del bambino</label>
                <input required type="text" name="surname" id="surname" placeholder="Inserisci il conome del bambino" class="p-1">
            </div>
    
            <div class="d-flex flex-column align-items-center mb-4">
                <label for="age">Età</label>
                <input required type="text" name="age" id="age" placeholder="Inserisci l'età" class="p-1">
            </div>
    
            <div class="d-flex flex-column align-items-center mb-4">
                <label for="country">Paese</label>
                <input required type="text" name="country" id="country"  placeholder="Inserisci il paese" class="p-1">
            </div>
    
            <div class="d-flex flex-column align-items-center mb-4">
                <label for="city">Città</label>
                <input required type="text" name="city" id="city" placeholder="Inserisci la città" class="p-1">
            </div>
    
            <div class="d-flex flex-column align-items-center mb-4">
                <label for="address">Indirizzo</label>
                <input required type="text" name="address" id="address"  placeholder="Inserisci l'indirizzo" class="p-1">
            </div>
    
            <div class="d-flex flex-column align-items-center mb-4">
                <label for="image">Immagine</label>
                <select required name="image" id="image" class="p-1">
                    <option value="https://www.labottegadelnerd.com/labottegadelnerd/wp-content/uploads/2020/11/gift-box-png-transparent-21.png" selected>regalo</option>
                    <option value="https://www.pngall.com/wp-content/uploads/8/Coal-PNG-Pic.png">carbone</option>
                </select>
                {{-- <input required type="text" name="type" id="type"  placeholder="Inserisci il tipo" class="p-1"> --}}
            </div>
    
            <div>
                <input type="submit" value="Invia" class="btn submit-btn">
            </div>
         </form>
    </div>
    
</section>
@endsection

