@extends('layouts.master')

@section('main')    
  <div class="main-container-home">
    <main>
      
      <section class="section paste-lunghe">
        <h2>LE LUNGHE</h2>
        <div class="pasta-container">
          @foreach ($pastaArray as $key=>$itemPastaLunga)
            @if ($itemPastaLunga["tipo"] === "lunga")
              <div class="pasta-item">
                {{-- aggiungo 1 qui e nei seguenti link per non avere index === 0 e conseguenti problemi con verifica empty in route // in product tolgo 1 --}}
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
