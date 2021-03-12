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
  questa è la pagina prodotto {{ $idProduct }}

  {{ $pastaArray[$idProduct - 1]['titolo'] }}
  {{ $pastaArray[$idProduct - 1]['tipo'] }}
  {{ $pastaArray[$idProduct - 1]['cottura'] }}
  {{ $pastaArray[$idProduct - 1]['peso'] }}
  {{ $pastaArray[$idProduct - 1]['descrizione'] }}
    
@endsection
