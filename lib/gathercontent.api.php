<?php
  define('PROJECT_ID', 22023);
  define('API_URL', 'https://api.gathercontent.com');
  define('API_KEY', '');
  define('USERNAME', '');

  class GatherContent {
    private $url;
    private $apikey;
    private $username;
    private $projectId;

    public function __contruct() {
      $this->$url = API_URL;
      $this->$apikey = API_KEY;
      $this->projectId = PROJECT_ID;
      $this->username = USERNAME;
    }

    public function get($command, $query=array()) {
      $query = $this->_curl($command, $query); 
      $results = json_decode($query['response'], true); 
      return $results;
    }

    private function _curl ($command = '', $query=array()) {
      $ch = curl_init();

      $queryParams = http_build_query($query);       
      
      curl_setopt( $ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
      curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Accept: application/vnd.gathercontent.v0.5+json'));
      curl_setopt( $ch, CURLOPT_USERPWD, $this->username . ':' . $this->apikey);
      curl_setopt( $ch, CURLOPT_URL, $this->url.$command.'?'.$queryParams);
      curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
      
      $response = json_decode( curl_exec( $ch ) );
      $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
      curl_close( $ch );

      return array( 'code' => $httpcode, 'response' => $response );
    }
  }
?>