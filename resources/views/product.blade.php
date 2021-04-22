@extends('layouts.master')

@section('main')

  <main class="main-container-product">
    {{-- dai seguenti indici tolgo 1 perché l'ho aggiunto nei link delle rispettive paste in home per prevenire problemi con verifica empty in route --}}
      <h1>{{ $pastaArray[$idProduct - 1]['titolo'] }}</h1>
      <div class="img-container">
        <img class="pasta-top" src="{{$pastaArray[$idProduct - 1]['src-h']}}" alt="immagine pasta">
        <img class="pasta-bottom" src="{{$pastaArray[$idProduct - 1]['src-p']}}" alt="immagine pasta">
      </div>
      {{-- per stampare come html e non come stringa: {!! !!} --}}
      <div class="description"><p class="description">{!! $pastaArray[$idProduct - 1]['descrizione'] !!}</p></div>
  </main>

@endsection
