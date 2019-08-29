<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    <script src="rellax.js"> </script>

    <title></title>
  </head>
  <body>
      <div class="rellax d1">
        <img src="2.png" width="70%"/>
      </div>
      <div class="rellax d2" data-rellax-speed="-7">
          <img src="1.png" width="100%"/>
      </div>
      <div class="rellax d3" data-rellax-speed="-7">
          <img src="3.png" width="100%"/>
      </div>
      <div class="rellax d4" data-rellax-speed="-7">
          <img src="4.png" width="90%"/>
      </div>
      <div class="rellax d5" data-rellax-speed="-7">
          <img src="MSG.png" width="50%"/>
      </div>
  </body>
  <script>
    var rellax= new rellax('.rellax', {
      callback: function(position){

      }}
      </script>

</html>
