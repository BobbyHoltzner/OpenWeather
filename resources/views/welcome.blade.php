<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
              <div id="demo"></div>
                <div class="title">Laravel 5</div>
                <button id="geoLocate">Get Location</button>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js" charset="utf-8"></script>
        <script>
          var x = document.getElementById("demo");
          function getLocation() {
              if (navigator.geolocation) {
                  navigator.geolocation.getCurrentPosition(showPosition);
              } else {
                  x.innerHTML = "Geolocation is not supported by this browser.";
              }
          }
          function showPosition(position) {
              // x.innerHTML = "Latitude: " + position.coords.latitude +
              // "<br>Longitude: " + position.coords.longitude;
              $.ajax({
                url: '/getCurrentWeather',
                data:{
                  lat: position.coords.latitude,
                  lon: position.coords.longitude,
                },
                type: 'POST',
                success: function(){
                  alert('Success');
                },
                error: function(){
                  alert('Error');
                }
              })
          }

          $('#geoLocate').click(function(){
            getLocation();
          });
          </script>

    </body>
</html>
