@php

  $headerNavMenu = ["Home", "Prodotti", "News"];

  $contacts = [
    "lorem ipsum",
    "lorem ipsum",
    "lorem ipsum",
    "lorem ipsum",
    "lorem ipsum",
    "lorem ipsum",
    "lorem ipsum",
    "lorem ipsum",
    "lorem ipsum",
    "lorem ipsum",
  ];

  $footerNav = [
    "pastificio"=>[
      "lorem",
      "lorem",
      "lorem",
      "lorem",
      "lorem",
      "lorem",
      "lorem",
      "lorem",
    ],

    "prodotti"=>[
      "lorem",
      "lorem",
      "lorem",
      "lorem",
      "lorem",
      "lorem",
      "lorem",
    ],

    "collezione da chef"=>[
      "lorem",
      "lorem",
      "lorem",
      "lorem",
    ]
  ]
@endphp

@extends('layouts.master')

@section('main')
  
  <main class="main-container-product">
    {{-- dai seguenti indici tolgo 1 perché l'ho aggiunto nei link delle rispettive paste in home per prevenire problemi con verifica empty in route --}}
      <h1>{{ $pastaArray[$idProduct - 1]['titolo'] }}</h1>
      <div class="img-container">
        <img class="pasta-top" src="{{$pastaArray[$idProduct - 1]['src-h']}}" alt="immagine pasta">
        <img class="pasta-bottom" src="{{$pastaArray[$idProduct - 1]['src-p']}}" alt="immagine pasta">
      </div>
      <p class="description">{!! $pastaArray[$idProduct - 1]['descrizione'] !!}</p>
  </main>
    
@endsection
