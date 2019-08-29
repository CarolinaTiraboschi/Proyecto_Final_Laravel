<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <script src="{{ asset('js/rellax.js') }}" defer></script>

    <title>SYZYGY</title>

  </head>


  <body>

        <div class="d1">
            <img src="{{ URL::to('/images/rellax/2.png') }}" width="70%"/>
        </div>

        <div class="d2" data-rellax-speed="6">
            <img src="{{ URL::to('/images/rellax/1.png') }}" width="100%"/>
        </div>

        <div class="d3" data-rellax-speed="8">
            <img src="{{ URL::to('/images/rellax/3.png') }}" width="100%"/>
        </div>

        <div class="d4" data-rellax-speed="2">
            <img src="{{ URL::to('/images/rellax/1.png') }}" width="90%"/>
        </div>

        <div class="d5" data-rellax-speed="1">
            <img src="{{ URL::to('/images/rellax/MSG.png') }}" width="50%"/>
        </div>
  </body>

  <script type="text/javascript" src="/js/rellax.js"></script>

       <script>
           var rellax = new Rellax('.rellax', {
           // center: true
           callback: function(position) {
               // callback every position change
               console.log(position);
           }
         });
       </script>
     </body>
 </html>
