<?php
class Responses
{
    public function __construct()
    {
    }

    public function getTrendingMovies()
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.themoviedb.org/3/trending/movie/day?api_key=4ec327e462149c3710d63be84b81cf4f',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = json_decode(curl_exec($curl), true);

        curl_close($curl);


        return $response;
    }
    public function getGenres()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.themoviedb.org/3/genre/movie/list?api_key=4ec327e462149c3710d63be84b81cf4f&language=pt-BR',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = json_decode(curl_exec($curl), true);

        curl_close($curl);
        return $response;
    }

    public function getMovie($id){

        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.themoviedb.org/3/movie/'.$id.'?api_key=4ec327e462149c3710d63be84b81cf4f&language=pt-BR',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        
        $response = json_decode(curl_exec($curl),true);
        
        curl_close($curl);
        return $response;
        
    }

}
