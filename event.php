<?php
   include("config/grafana.config.php");
    function getMetrics($url)
    {
    
      $login = LOG_USERNAME;
      $password = PASSWORD;
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $headers = array(
        "Content-Type: application/json",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_USERPWD, "$login:$password");
  //  curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);
    curl_close($curl);
    $resp =  json_decode($resp);
    return $resp;
    }
//$query=urlencode("sum(rate(container_cpu_usage_seconds_total{container!='POD|',namespace='admin'}[1h])) by (namespace)");
$query=urlencode('{service_name="integrations/kubernetes/eventhandler", namespace="ingress-nginx"} | json | logfmt ');

   $cpu_url="https://logs-prod-006.grafana.net/loki/api/v1/query_range?query=$query&start=2024-10-04T20:10:51.781Z&end=2024-11-04T20:10:51.781Z&steps=300";
  $result=getMetrics($cpu_url);
$logs=$result->data->result;
//print_r($logs);
//exit;
$log_text='';
 foreach($logs as $log)
 {
  //print_r($log->stream->__error__);
 // $log_text=$log_text.'\n<b>'.$log->stream->__error__.' - '.$log->stream->__error_details__.'</b>';


    foreach($log->values as $log_txt)
    {
    $log_text=$log_text.'\n'.date('Y-m-d H:i:s',$log_txt[0]).'\n'.$log_txt[1];
    }
 }
 echo $log_text;
?>