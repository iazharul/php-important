//payment systme get url
ini_set("allow_url_fopen", 1);
$fb = file_get_contents($url, false);

//laravel date and time formate
 {{ date("d-m-Y || H:i A", strtotime($blog->created_at)) }}
