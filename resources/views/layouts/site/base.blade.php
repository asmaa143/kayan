<html>
    <head>
        @include('layouts.site.head')
    </head>
    <body>

      @include('layouts.site.leftsidebar')
    <div class="main main-sec" >
        <!-- start first bar -->
         @include('layouts.site.topbar')

      <!-- end first bar -->
      <div class="card-home py-4">
        <div class="row">
            @yield('content')
        </div>
      </div>

        @include('layouts.site.footer')
    </body>
    </html>
