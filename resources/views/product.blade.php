@php

  $headerNavMenu = ["Home", "Prodotti", "News"];

  $contacts = [
    "Ragione sociale: La Molisana S.P.A.",
    "Sede legale: Contrada Colle delle Api, 100/A",
    "86100 - Campobasso (CB)",
    "Pec: lamolisana@pec.it",
    "Tel: +39 0874 4981",
    "Fax: +39 0874 629584",
    "info@lamolisana.it (per segnalazioni degli utenti)",
    "commerciale@lamolisana.it",
    "numero verde 800818081",
    "telefono 3901292455",
  ];

  $footerNav = [
    "pastificio"=>[
      "Il Pastificio",
      "Grano decorticato a pietra",
      "Il Molise c'è",
      "Filiera Integrata",
      "100 anni di pasta",
      "Sartoria della pasta",
      "Spaghetto Quadrato",
      "Le persone",
    ],

    "prodotti"=>[
      "Le Classiche",
      "Le Integrali",
      "Le Speciali",
      "Le Biologiche",
      "Le Gluten-Free",
      "Le Semole",
      "Le Extra di Lusso",
    ],

    "collezione da chef"=>[
      "Collezione da Chef",
      "Grandi Cucine",
      "Biologiche",
      "Quadrate",
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
