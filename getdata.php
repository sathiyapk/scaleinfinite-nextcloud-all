<?php
include("config/grafana.config.php");
function getMetrics($url)
{

            $login = USERNAME;
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
           // print_r(curl_error($curl));
            curl_close($curl);
            $resp =  json_decode($resp);
            return $resp;
}
$pod=$_REQUEST['pod'];
$periods=$_REQUEST['periods'];
if($_REQUEST['chart_type']=='cpu')
{
   if($pod==0)
   $query=urlencode("container_cpu_usage_seconds_total{namespace='default'}");
   else
   $query=urlencode("container_cpu_usage_seconds_total{namespace='default',pod=$pod}");
}
else if($_REQUEST['chart_type']=='memory')
{
   if($pod==0)
   $query=urlencode("container_memory_working_set_bytes{namespace='default'}");
   else
   $query=urlencode("container_memory_working_set_bytes{namespace='default',pod=$pod}");
}
else if($_REQUEST['chart_type']=='network')
{
   if($pod==0)
   $query=urlencode("container_network_receive_bytes_total{namespace='default'}");
   else
   $query=urlencode("container_network_receive_bytes_total{namespace='default',pod=$pod}");
}
else if($_REQUEST['chart_type']=='input')
{
 
   if($pod==0)
   $query=urlencode("container_network_transmit_bytes_total{namespace='default'}");
   else
   $query=urlencode("container_network_transmit_bytes_total{namespace='default',pod=$pod}");
}

//$end_time=date('Y-m-d\TH:i:s\Z');
$end_time='2024-11-04T10:10:51.781Z';
if($periods==1)
$start_date= date('Y-m-d\TH:i:s\Z', strtotime('-6 hours', strtotime($end_time)));
else if($periods==2)
$start_date= date('Y-m-d\TH:i:s\Z', strtotime('-24 hours', strtotime($end_time)));
else if($periods==3)
$start_date= date('Y-m-d\TH:i:s\Z', strtotime('-48 hours', strtotime($end_time)));

   $cpu_url="https://prometheus-prod-13-prod-us-east-0.grafana.net/prometheus/api/v1/query_range?query=$query&start=$start_date&end=$end_time&step=1h";
//   $cpu_url="https://prometheus-prod-13-prod-us-east-0.grafana.net/prometheus/api/v1/query_range?query=container_cpu_usage_seconds_total{namespace='default'}&start=2024-11-04T20:10:51.781Z&end=2024-11-05T20:10:51.781Z&step=2h";

  $result=getMetrics($cpu_url);
 // print_r($result);
  $charts=$result->data->result[0]->values;
  $cpu_value_arr=array();
    foreach($charts as $chart)
    {
        $temp=array();
        $temp['x']=date('Y-m-d H:i:s',(int)$chart[0]);
        $temp['y']=$chart[1];
        $cpu_value_arr[]=$temp;
    }
echo json_encode($cpu_value_arr);

?>