<?php
  namespace BH\OpenWeather;
  use App\Http\Controllers\Controller;
  use App\User;
  use GuzzleHttp\Client;



  class OpenWeatherController extends Controller {

    /**
     * Make a call to weather api
     *
     * Testing Purposes Only
     *
     * @return Response
     **/
    public function index()
    {
      $api_key = config('openWeather.api_key');
      $client = new Client();
      $request = $client->get('http://api.openweathermap.org/data/2.5/weather?q=Baltimore,md&appid='.$api_key.'&units=imperial');
      $response = $request->getBody();
      return '<pre>'.$response.'</pre>';
      // return $response;
    }
  }
 ?>
