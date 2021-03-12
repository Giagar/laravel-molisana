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
  <div class="main-container">
    <main>
      
      <section class="section paste-lunghe">
        <h2>LE LUNGHE</h2>
        <div class="pasta-container">
          @foreach ($pastaArray as $key=>$itemPastaLunga)
            @if ($itemPastaLunga["tipo"] === "lunga")
              <div class="pasta-item">
                <a href="/product/{{$key + 1}}">
                  <img class="pasta-img" src="{{$itemPastaLunga['src']}}" alt="#">
                </a>
              </div>    
            @endif
          @endforeach
        </div>
      </section>

      <section class="section paste-corte">
        <h2>LE CORTE</h2>
        <div class="pasta-container">
          @foreach ($pastaArray as $key=>$itemPastaCorta)
            @if ($itemPastaCorta["tipo"] === "corta")
              <div class="pasta-item">
                <a href="/product/{{$key + 1}}">
                  <img class="pasta-img" src="{{$itemPastaCorta['src']}}" alt="#">
                </a>
              </div>    
            @endif
          @endforeach
        </div>
      </section>

      <section class="section paste-cortissime">
        <h2>LE  CORTISSIME</h2>
        <div class="pasta-container">
          @foreach ($pastaArray as $key=>$itemPastaCortissima)
            @if ($itemPastaCortissima["tipo"] === "cortissima")
              <div class="pasta-item">
                <a href="/product/{{$key + 1}}">
                  <img class="pasta-img" src="{{$itemPastaCortissima['src']}}" alt="#">
                </a>
              </div>    
            @endif
          @endforeach
        </div>
      </section>

    </main>
  </div>
@endsection
