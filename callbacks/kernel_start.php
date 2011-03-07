<?

$this_request = RequestHistory::create( array(
    'attributes'=>array(
      'session_id'=>session_id(),
      'subdomain'=>$subdomain,
      'http_request_method'=>$_SERVER['REQUEST_METHOD'],
      'http_user_agent'=>$_SERVER['HTTP_USER_AGENT'],
      'uri'=>$_SERVER['REQUEST_URI'],
      'get_vars'=>$_GET,
      'post_vars'=>$_POST
    )
  ));
