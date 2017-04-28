<?php

class Pictures_model extends CI_Model {

	

    public function get_pics($tags) {
        $api_key = 'ab2b10c319fdf11127066cbad564857e';
        $perPage = 25;
        $url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
        $url.= '&api_key=' . $api_key;
        $url.= '&tags=' . $tags;
        $url.= '&per_page=' . $perPage;
        $url.= '&format=json';
        $url.= '&nojsoncallback=1';
        
        $response = json_decode(file_get_contents($url));
        $pics = $response->photos->photo;
        
        return $pics;
    }

}

    






