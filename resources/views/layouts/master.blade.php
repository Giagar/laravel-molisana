<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-Molisana</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- Fonts -->

        <!-- Styles -->
    </head>
    <body>

      <div class="wrapper">
        
        <header>
          <div class="logo-container">
            <img src="{{ asset('img/logo.png') }}" alt="logo" class="logo">
          </div>
          <nav class="header-nav">
            <ul>
              @foreach ($headerNavMenu as $itemNav)
                <li>{{$itemNav}}</li>
              @endforeach
            </ul>
          </nav>
        </header>
  
        @yield('main')
  
        <div class="footer-container">
          <footer>
            <div class="section-left">
              <div class="logo-container">
                <img src="{{ asset('img/logo.png') }}" alt="logo" class="logo">
              </div>
              <div class="contacts">
                <ul>
                  @foreach ($contacts as $contact)
                      <li>{{$contact}}</li>
                  @endforeach
                </ul>
              </div>
            </div>
            <div class="section-right">
              @foreach ($footerNav as $footerNavTitle=>$footerNavContent)
                <h3>{{$footerNavTitle}}</h3>
                <ul>
                  @foreach ($footerNavContent as $footerNavItem)
                  <li>{{$footerNavItem}}</li>
                  @endforeach
                </ul>
              @endforeach
            </div>
          </footer>
        </div>

      </div>
    </body>
</html>
