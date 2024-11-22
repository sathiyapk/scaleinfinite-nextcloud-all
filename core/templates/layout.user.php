<?php
/**
 * SPDX-FileCopyrightText: 2016-2024 Nextcloud GmbH and Nextcloud contributors
 * SPDX-FileCopyrightText: 2011-2016 ownCloud, Inc.
 * SPDX-License-Identifier: AGPL-3.0-only
 */

/**
 * @var \OC_Defaults $theme
 * @var array $_
 */

$getUserAvatar = static function (int $size) use ($_): string {
	return \OC::$server->getURLGenerator()->linkToRoute('core.avatar.getAvatar', [
		'userId' => $_['user_uid'],
		'size' => $size,
		'v' => $_['userAvatarVersion']
	]);
}

?>
<?php
/*include("config/grafana.config.php");
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
    curl_close($curl);
	//print_r(curl_error($curl));
    $resp =  json_decode($resp);
    return $resp;
    }

   $cpu_url="https://prometheus-prod-13-prod-us-east-0.grafana.net/prometheus/api/v1/query_range?query=container_cpu_usage_seconds_total{namespace='default'}&start=2024-11-04T20:10:51.781Z&end=2024-11-05T20:10:51.781Z&step=2h";
  // $cpu_url="https://prometheus-prod-13-prod-us-east-0.grafana.net/prometheus/api/v1/query_range?query=sum(rate(container_cpu_usage_seconds_total{namespace='admin'}[1h])) by (namespace)&start=2024-11-04T20:10:51.781Z&end=2024-11-05T20:10:51.781Z&step=2h"; 
   //$cpu_url="https://prometheus-prod-13-prod-us-east-0.grafana.net/prometheus/api/v1/query_range?query=sum(rate(container_cpu_usage_seconds_total{container!~'POD|',namespace='admin'}[1h])) by (namespace)&start=2024-11-04T20:10:51.781Z&end=2024-11-05T20:10:51.781Z&step=2h";
 //echo $cpu_url = urlencode($cpu_url);
 
 $result=getMetrics($cpu_url);
 
//print_r($pods_array);
  //print_r($result);
  //exit;
  $charts=$result->data->result[0]->values;
  $cpu_date_arr=array();
  $cpu_value_arr=array();
  $cpu_categoy_arr=array();
  $i=0;
    foreach($charts as $chart)
    {
        $cpu_date_arr[]= date('H:i:s',(int)$chart[0]);
        $cpu_value_arr[]=round($chart[1]);
        $cpu_categoy_arr[]="0".$i;
       $i=$i+1;
    }
   // print_r($cpu_date_arr);
$memory_url="https://prometheus-prod-13-prod-us-east-0.grafana.net/prometheus/api/v1/query_range?query=container_memory_working_set_bytes{namespace='default'}&start=2024-11-04T20:10:51.781Z&end=2024-11-05T20:10:51.781Z&step=2h";
 
$result=getMetrics($memory_url);
  $charts=$result->data->result[0]->values;
  $memory_date_arr=array();
  $memory_value_arr=array();
  $memory_categoy_arr=array();
  $i=0;
    foreach($charts as $chart)
    {
        $memory_date_arr[]= date('H:i:s',(int)$chart[0]);
        $memory_value_arr[]=round($chart[1]);
        $memory_categoy_arr[]="0".$i;
       $i=$i+1;
    }

$network_url="https://prometheus-prod-13-prod-us-east-0.grafana.net/prometheus/api/v1/query_range?query=container_network_receive_bytes_total{namespace='default'}&start=2024-11-04T20:10:51.781Z&end=2024-11-05T20:10:51.781Z&step=2h";  
$result=getMetrics($network_url);
  $charts=$result->data->result[0]->values;
  $network_date_arr=array();
  $network_value_arr=array();
  $network_categoy_arr=array();
  $i=0;
    foreach($charts as $chart)
    {
        $network_date_arr[]= date('H:i:s',(int)$chart[0]);
        $network_value_arr[]=$chart[1];
        $network_categoy_arr[]="0".$i;
       $i=$i+1;
    }

$inputio_url="https://prometheus-prod-13-prod-us-east-0.grafana.net/prometheus/api/v1/query_range?query=container_network_transmit_bytes_total{namespace='default'}&start=2024-11-04T20:10:51.781Z&end=2024-11-05T20:10:51.781Z&step=2h";  

$result=getMetrics($inputio_url);
  $charts=$result->data->result[0]->values;
  $inputio_date_arr=array();
  $inputio_value_arr=array();
  $inputio_categoy_arr=array();
  $i=0;
    foreach($charts as $chart)
    {
        $inputio_date_arr[]= date('H:i:s',(int)$chart[0]);
        $inputio_value_arr[]=$chart[1];
        $inputio_categoy_arr[]="0".$i;
       $i=$i+1;
    }

$cpu_percentage_url="https://prometheus-prod-13-prod-us-east-0.grafana.net/prometheus/api/v1/query_range?query=sum(rate(container_cpu_usage_seconds_total{namespace='default'}[6h]))*100&start=2024-11-04T20:10:51.781Z&end=2024-11-05T20:10:51.781Z&step=48h";  
$result=getMetrics($cpu_percentage_url);
$charts=$result->data->result[0]->values;
$cpu_percentage=ceil($charts[0][1]);

$memory_percentage_url="https://prometheus-prod-13-prod-us-east-0.grafana.net/prometheus/api/v1/query_range?query=sum(rate(container_cpu_usage_seconds_total{namespace='default'}[6h]))*100&start=2024-11-04T20:10:51.781Z&end=2024-11-05T20:10:51.781Z&step=48h";  
$result=getMetrics($memory_percentage_url);
$charts=$result->data->result[0]->values;
$memory_percentage=ceil($charts[0][1]);


$network_percentage_url="https://prometheus-prod-13-prod-us-east-0.grafana.net/prometheus/api/v1/query_range?query=sum(rate(container_cpu_usage_seconds_total{namespace='default'}[6h]))*100&start=2024-11-04T20:10:51.781Z&end=2024-11-05T20:10:51.781Z&step=48h";  
$result=getMetrics($network_percentage_url);
$charts=$result->data->result[0]->values;
$network_percentage=ceil($charts[0][1]);


$input_percentage_url="https://prometheus-prod-13-prod-us-east-0.grafana.net/prometheus/api/v1/query_range?query=sum(rate(container_cpu_usage_seconds_total{namespace='default'}[6h]))*100&start=2024-11-04T20:10:51.781Z&end=2024-11-05T20:10:51.781Z&step=48h";  
$result=getMetrics($input_percentage_url);
$charts=$result->data->result[0]->values;
$input_percentage=ceil($charts[0][1]);

*/
 
?>


<!DOCTYPE html>
<html class="ng-csp" data-placeholder-focus="false" lang="<?php p($_['language']); ?>" data-locale="<?php p($_['locale']); ?>" translate="no" >
	<head data-user="<?php p($_['user_uid']); ?>" data-user-displayname="<?php p($_['user_displayname']); ?>" data-requesttoken="<?php p($_['requesttoken']); ?>">
		<meta charset="utf-8">
		<title>

			<?php
				p(!empty($_['pageTitle']) && $_['pageTitle'] !== $_['application'] ? $_['pageTitle'].' - ' : '');
p(!empty($_['application']) ? $_['application'].' - ' : '');
p($theme->getTitle());
?>
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<?php if ($theme->getiTunesAppId() !== '') { ?>
		<meta name="apple-itunes-app" content="app-id=<?php p($theme->getiTunesAppId()); ?>">
		<?php } ?>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="apple-mobile-web-app-title" content="<?php p((!empty($_['application']) && $_['appid'] != 'files')? $_['application']:$theme->getTitle()); ?>">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="theme-color" content="<?php p($theme->getColorPrimary()); ?>">
		<link rel="icon" href="<?php print_unescaped(image_path($_['appid'], 'favicon.ico')); /* IE11+ supports png */ ?>">
		<link rel="apple-touch-icon" href="<?php print_unescaped(image_path($_['appid'], 'favicon-touch.png')); ?>">
		<link rel="apple-touch-icon-precomposed" href="<?php print_unescaped(image_path($_['appid'], 'favicon-touch.png')); ?>">
		<link rel="mask-icon" sizes="any" href="<?php print_unescaped(image_path($_['appid'], 'favicon-mask.svg')); ?>" color="<?php p($theme->getColorPrimary()); ?>">
		<link rel="manifest" href="<?php print_unescaped(image_path($_['appid'], 'manifest.json')); ?>" crossorigin="use-credentials">
		<?php emit_css_loading_tags($_); ?>
		<?php emit_script_loading_tags($_); ?>
		<?php print_unescaped($_['headers']); ?>
		<!-- App Navigation over ride -->
	
		
		<link href='/themes/cloudfloat/core/css/boxicons.min.css' rel='stylesheet'>
		<link rel="stylesheet" href="/themes/cloudfloat/core/css/icons.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" nonce="<?php p(\OC::$server->getContentSecurityPolicyNonceManager()->getNonce()) ?>"></script>
		<script type="text/javascript" nonce="<?php p(\OC::$server->getContentSecurityPolicyNonceManager()->getNonce()) ?>">
			function responsive_script()
			{
				var theWindowSize =$(window).width(); 
				console.log(theWindowSize);
			// Below mobile -Max tab
				if (theWindowSize >= 768 && theWindowSize < 1024) {
					$('.search-textbox-position').addClass('search-textbox-position-addmargin');
				}else{
					$('.search-textbox-position').removeClass('search-textbox-position-addmargin');
				}
   					if(theWindowSize<1200){
						$('.app-navigation__content').removeAttr("inert");
						$('.app-navigation__search').attr('style', 'padding-left: 25px;');
						$('#search_files').attr('style','width:90%');
						
						// ***** 
					//Navigation closed after click the menu 
					// $(".app-navigation-entry").on('click',function (event){
					// 	alert('navigation clicked!');
					// });
					//************ */
						// slider menu hover overlay
					$('.app-navigation').addClass('app-navigation-hover-1200');
						$('.app-navigation').hide();
						$('.file-app-res-menu').show();
						console.log("show menu");
						// Show search bar
						$('#nav-cf-searchbar').removeAttr('style');
						$('#nav-cf-searchbar').removeAttr('class');
								//Open Menu
							$(".file-app-res-menu").on('click', function(event){
								$('.app-navigation').show();
								$('.app-navigation').removeClass('app-navigation--close');						
							//	$(".app-navigation-toggle-wrapper").removeClass('app-navigation-toggle-wrapper-removed-toggle');
								$(".app-navigation-toggle-wrapper-new").removeClass('app-navigation-toggle-wrapper-removed-toggle');
							});
							// Close Menu
							$('.app-navigation-toggle').on('click', function(event){
								var theWindowSize1 =$(window).width();
								if(theWindowSize1<1200){
								$('.app-navigation').addClass('app-navigation-hover-1200');								
								// $('.app-navigation').addClass('app-navigation--close');						
								//$(".app-navigation-toggle-wrapper").addClass('app-navigation-toggle-wrapper-removed-toggle');
								$(".app-navigation-toggle-wrapper-new").addClass('app-navigation-toggle-wrapper-removed-toggle');
								 $('.app-navigation').hide();
								}
							});
   					}
					else {
						$('.app-navigation').show();
						$('.file-app-res-menu').hide();
						$('.app-navigation').removeClass('app-navigation-hover-1200');
						$('.app-navigation').removeClass('app-navigation--close');
						$(".app-navigation-toggle-wrapper-new").removeClass('app-navigation-toggle-wrapper-removed-toggle');	
						
					} 
			}
			$(document).ready(function() {			
			console.clear();
				// *******DASHBOARD CHART ***********
			// Cloud Float Dashboard Apex chat START


// ********************************* Total Usages ***************************
!function () {
					let o, e, r, t, a, s, i, n, l;

					// Set colors based on style (dark/light)
					l = isDarkStyle ? 
						(o = config.colors_dark.cardColor, 
						e = config.colors_dark.headingColor, 
						r = config.colors_dark.textMuted, 
						a = config.colors_dark.borderColor, 
						t = "dark", 
						s = "#4f51c0", 
						i = "#595cd9", 
						n = "#8789ff", 
						"#c3c4ff") 
						: 
						(o = config.colors.cardColor, 
						e = config.colors.headingColor, 
						r = config.colors.textMuted, 
						a = config.colors.borderColor, 
						t = "", 
						s = "#e1e2ff", 
						i = "#c3c4ff", 
						n = "#a5a7ff", 
						"#696cff");

					// CPU Usage Chart
					let cpuChartElement = document.querySelector("#CPUusage");
					let cpuChartConfig = {
						chart: {
							height: 130,
							sparkline: {
								enabled: true
							},
							parentHeightOffset: 0,
							type: "radialBar"
						},
						colors: [config.colors.primary],
						series: [<?php echo $cpu_percentage;?>], // Data series
						plotOptions: {
							radialBar: {
								startAngle: -90,
								endAngle: 90,
								hollow: {
								size: "55%"
								},
								track: {
								background: config.colors_label.secondary
								},
								dataLabels: {
								name: {
									show: false
								},
								value: {
									fontSize: "18px",
									fontFamily: "Public Sans",
									color: e,
									fontWeight: 500,
									offsetY: -5
								}
								}
							}
						},
						grid: {
							show: false,
							padding: {
								left: -10,
								right: -10,
								bottom: 5
							}
						},
						stroke: {
							lineCap: "round"
						},
						labels: ["Progress"]
					};

					// Render the CPU usage chart if the element exists
					if (cpuChartElement !== null) {
						new ApexCharts(cpuChartElement, cpuChartConfig).render();
					}

					// Memory Usage Chart
					let memoryChartElement = document.querySelector("#MemoryUsage");
					let memoryChartConfig = {
						chart: {
							height: 130,
							sparkline: {
								enabled: true
							},
							parentHeightOffset: 0,
							type: "radialBar"
						},
						// colors: [config.colors.primary],
						colors: ["#face1b", "#face1b"],
						series: [<?php echo $memory_percentage;?>], // Data series
						plotOptions: {
							radialBar: {
								startAngle: -90,
								endAngle: 90,
								hollow: {
								size: "55%"
								},
								track: {
								background: config.colors_label.secondary
								},
								dataLabels: {
								name: {
									show: false
								},
								value: {
									fontSize: "18px",
									fontFamily: "Public Sans",
									color: e,
									fontWeight: 500,
									offsetY: -5
								}
								}
							}
						},
						grid: {
							show: false,
							padding: {
								left: -10,
								right: -10,
								bottom: 5
							}
						},
						stroke: {
							lineCap: "round"
						},
						labels: ["Progress"]
					};

					// Render the memory usage chart if the element exists
					if (memoryChartElement !== null) {
						new ApexCharts(memoryChartElement, memoryChartConfig).render();
					}

					// inputoutput Usage Chart
					let inputoutputChartElement = document.querySelector("#inputoutputUsage");
					let inputoutputChartConfig = {
						chart: {
							height: 130,
							sparkline: {
								enabled: true
							},
							parentHeightOffset: 0,
							type: "radialBar"
						},
						// colors: [config.colors.primary],
						colors: ["#71dd38", "#71dd38"],
						series: [<?php echo $network_percentage;?>], // Data series
						plotOptions: {
							radialBar: {
								startAngle: -90,
								endAngle: 90,
								hollow: {
								size: "55%"
								},
								track: {
								background: config.colors_label.secondary
								},
								dataLabels: {
								name: {
									show: false
								},
								value: {
									fontSize: "18px",
									fontFamily: "Public Sans",
									color: e,
									fontWeight: 500,
									offsetY: -5
								}
								}
							}
						},
						grid: {
							show: false,
							padding: {
								left: -10,
								right: -10,
								bottom: 5
							}
						},
						stroke: {
							lineCap: "round"
						},
						labels: ["Progress"]
					};

					// Render the inputoutput usage chart if the element exists
					if (inputoutputChartElement !== null) {
						new ApexCharts(inputoutputChartElement, inputoutputChartConfig).render();
					}
					// network Usage Chart
					let networkChartElement = document.querySelector("#network-Usage");
					let networkChartConfig = {
						chart: {
							height: 130,
							sparkline: {
								enabled: true
							},
							parentHeightOffset: 0,
							type: "radialBar"
						},
						// colors: [config.colors.primary],
						colors: ["#28ccee", "#28ccee"],
						series: [<?php echo $input_percentage;?>], // Data series
						plotOptions: {
							radialBar: {
								startAngle: -90,
								endAngle: 90,
								hollow: {
								size: "55%"
								},
								track: {
								background: config.colors_label.secondary
								},
								dataLabels: {
								name: {
									show: false
								},
								value: {
									fontSize: "18px",
									fontFamily: "Public Sans",
									color: e,
									fontWeight: 500,
									offsetY: -5
								}
								}
							}
						},
						grid: {
							show: false,
							padding: {
								left: -10,
								right: -10,
								bottom: 5
							}
						},
						stroke: {
							lineCap: "round"
						},
						labels: ["Progress"]
					};

					// Render the network usage chart if the element exists
					if (networkChartElement !== null) {
						new ApexCharts(networkChartElement, networkChartConfig).render();
					}
					}();



			// ******************************** End Total Usages **************************

			
			
    let o, e, r, t, a, s, i, n;
    /*l = isDarkStyle ? 
        (o = config.colors_dark.cardColor, e = config.colors_dark.headingColor, r = config.colors_dark.textMuted, a = config.colors_dark.borderColor, t = "dark", s = "#4f51c0", i = "#595cd9", n = "#8789ff", "#c3c4ff") 
        : 
        (o = config.colors.cardColor, e = config.colors.headingColor, r = config.colors.textMuted, a = config.colors.borderColor, t = "", s = "#e1e2ff", i = "#c3c4ff", n = "#a5a7ff", "#696cff");
*/
    // Select the chart elements
    var d1 = document.querySelector("#totalCPUusage");  
    // Check and render the chart for the first ID
    
        var options = {
            chart: {
                height: 250,
                type: "area",
                toolbar: false,
                dropShadow: {
                    enabled: true,
                    top: 14,
                    left: 2,
                    blur: 3,
                    color: config.colors.primary,
                    opacity: 0.15
                }
            },
            series: [{                
                name: "CPU Usage",    
                data: <?php echo json_encode($cpu_value_arr);?>,
            }],
            dataLabels: {
                enabled: false
            },
            stroke: {
                width: 3,
                curve: "straight"
            },
            colors: [config.colors.primary],
            fill: {
                type: "gradient",
                gradient: {
                    shade: t,
                    shadeIntensity: 0.8,
                    opacityFrom: 0.7,
                    opacityTo: 0.25,
                    stops: [0, 95, 100]
                }
            },
            grid: {
                show: true,
                strokeDashArray: 10,
                borderColor: a,
                padding: {
                    top: -15,
                    bottom: -10,
                    left: 0,
                    right: 0
                }
            },
            xaxis: {
                categories: <?php echo json_encode($cpu_date_arr);?>,
                labels: {
                    offsetX: 0,
                    style: {
                        colors: r,
                        fontFamily: "Public Sans",
                        fontSize: "13px"
                    }
                },
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                },
                lines: {
                    show: false
                }
            },
            yaxis: {
                labels: {
                    offsetX: -15,
                    formatter: function (o) {
                        return parseInt(o);
                    },
                    style: {
                        fontSize: "13px",
                        fontFamily: "Public Sans",
                        colors: r
                    }
                },
               
            }
        };
     
		
	var chart =  new ApexCharts(d1, options);
	chart.render();
  
	var d2 = document.querySelector("#totalMemoryUsage");  
    // Check and render the chart for the first ID
    
        var options = {
            chart: {
                height: 250,
                type: "area",
                toolbar: false,
                dropShadow: {
                    enabled: true,
                    top: 14,
                    left: 2,
                    blur: 3,
                    color: config.colors.warning,
                    opacity: 0.15
                }
            },
            series: [{                
                name: "Memory Usage",    
                data: <?php echo json_encode($memory_value_arr);?>,
            }],
            dataLabels: {
                enabled: false
            },
            stroke: {
                width: 3,
                curve: "straight"
            },
            colors: [config.colors.warning],
            fill: {
                type: "gradient",
                gradient: {
                    shade: t,
                    shadeIntensity: 0.8,
                    opacityFrom: 0.7,
                    opacityTo: 0.25,
                    stops: [0, 95, 100]
                }
            },
            grid: {
                show: true,
                strokeDashArray: 10,
                borderColor: a,
                padding: {
                    top: -15,
                    bottom: -10,
                    left: 0,
                    right: 0
                }
            },
            xaxis: {
                categories: <?php echo json_encode($memory_date_arr);?>,
                labels: {
                    offsetX: 0,
                    style: {
                        colors: r,
                        fontFamily: "Public Sans",
                        fontSize: "13px"
                    }
                },
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                },
                lines: {
                    show: false
                }
            },
            yaxis: {
                labels: {
                    offsetX: -15,
                    formatter: function (o) {
                        return parseInt(o);
                    },
                    style: {
                        fontSize: "13px",
                        fontFamily: "Public Sans",
                        colors: r
                    }
                },
               
            }
        };
     
		
	var chart1 =  new ApexCharts(d2, options);
	chart1.render();
 
	var d3 = document.querySelector("#totalNetworkUsage");  
    // Check and render the chart for the first ID
    
        var options = {
            chart: {
                height: 250,
                type: "area",
                toolbar: false,
                dropShadow: {
                    enabled: true,
                    top: 14,
                    left: 2,
                    blur: 3,
                    color: config.colors.warning,
                    opacity: 0.15
                }
            },
            series: [{                
                name: "Network Usage",    
                data: <?php echo json_encode($network_value_arr);?>,
            }],
            dataLabels: {
                enabled: false
            },
            stroke: {
                width: 3,
                curve: "straight"
            },
            colors: [config.colors.warning],
            fill: {
                type: "gradient",
                gradient: {
                    shade: t,
                    shadeIntensity: 0.8,
                    opacityFrom: 0.7,
                    opacityTo: 0.25,
                    stops: [0, 95, 100]
                }
            },
            grid: {
                show: true,
                strokeDashArray: 10,
                borderColor: a,
                padding: {
                    top: -15,
                    bottom: -10,
                    left: 0,
                    right: 0
                }
            },
            xaxis: {
                categories: <?php echo json_encode($network_date_arr);?>,
                labels: {
                    offsetX: 0,
                    style: {
                        colors: r,
                        fontFamily: "Public Sans",
                        fontSize: "13px"
                    }
                },
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                },
                lines: {
                    show: false
                }
            },
            yaxis: {
                labels: {
                    offsetX: -15,
                    formatter: function (o) {
                        return parseInt(o);
                    },
                    style: {
                        fontSize: "13px",
                        fontFamily: "Public Sans",
                        colors: r
                    }
                },
               
            }
        };
     
		
	var chart2 =  new ApexCharts(d3, options);
	chart2.render();
	var d4 = document.querySelector("#totalInputIOUsage");  
    // Check and render the chart for the first ID
    
        var options = {
            chart: {
                height: 250,
                type: "area",
                toolbar: false,
                dropShadow: {
                    enabled: true,
                    top: 14,
                    left: 2,
                    blur: 3,
                    color: config.colors.warning,
                    opacity: 0.15
                }
            },
            series: [{                
                name: "I/O  Usage",    
                data: <?php echo json_encode($inputio_value_arr);?>,
            }],
            dataLabels: {
                enabled: false
            },
            stroke: {
                width: 3,
                curve: "straight"
            },
            colors: [config.colors.warning],
            fill: {
                type: "gradient",
                gradient: {
                    shade: t,
                    shadeIntensity: 0.8,
                    opacityFrom: 0.7,
                    opacityTo: 0.25,
                    stops: [0, 95, 100]
                }
            },
            grid: {
                show: true,
                strokeDashArray: 10,
                borderColor: a,
                padding: {
                    top: -15,
                    bottom: -10,
                    left: 0,
                    right: 0
                }
            },
            xaxis: {
                categories: <?php echo json_encode($inputio_date_arr);?>,
                labels: {
                    offsetX: 0,
                    style: {
                        colors: r,
                        fontFamily: "Public Sans",
                        fontSize: "13px"
                    }
                },
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                },
                lines: {
                    show: false
                }
            },
            yaxis: {
                labels: {
                    offsetX: -15,
                    formatter: function (o) {
                        return parseInt(o);
                    },
                    style: {
                        fontSize: "13px",
                        fontFamily: "Public Sans",
                        colors: r
                    }
                },
               
            }
        };
     
		
	var chart3 =  new ApexCharts(d4, options);
	chart3.render();
   

	var updatechart = function(chart_type,pod,periods){
		$.ajax({
                                    url: baseUrl+"/getdata.php",
                                    method: 'POST',
                                    data: {
                                    'chart_type':chart_type,
									'pod':pod,
									'periods':periods
                                    },
                                    dataType: 'json',
                                    success: function(response) {

											if(chart_type=="cpu")
											{
											chart.updateSeries([{
													data: response
												}]);
											}else if(chart_type=="memory")
											{
												chart1.updateSeries([{
													data: response
												}]);	
											}else if(chart_type=="network")
											{
												chart2.updateSeries([{
													data: response
												}]);	
											}else if(chart_type=="input")
											{
												chart3.updateSeries([{
													data: response
												}]);	
											}
									},
                                    error: function(error) {
                            
                                    }
                            });
	}	

	$(".cpu_period").on("click", function(){
		updatechart('cpu',$('#cpu_pod').val(),$(this).data("value"));
	});

	$(".memory_period").on("click", function(){
		updatechart('memory',$('#memory_pod').val(),$(this).data("value"));
	});

	$(".network_period").on("click", function(){
		updatechart('network',$('#network_pod').val(),$(this).data("value"));
	});

	$(".input_period").on("click", function(){
		updatechart('input',$('#input_pod').val(),$(this).data("value"));
	});

		
			// Apex chat END

				$('.search-textbox-position').removeClass('search-textbox-position-addmargin');
				$('#search_files').attr('style','width:90%');
				$(".app-navigation-entry-link").on('click', function(event){
					// window.location.reload();
					var theWindowSize =$(window).width(); 
					if(theWindowSize<1200){
						$('.app-navigation').hide();	
						 $('.app-navigation').addClass('app-navigation--close');	
						//  $('.app-navigation').addClass('app-navigation-hover');
					}
					
				});
				$("body").mouseup(function(){ 
        			var theWindowSize_new =$(window).width(); 
					if(theWindowSize_new<1200){
						if ($('.app-navigation').css('display') != 'none') {
 						   $('.app-navigation').hide();
						}
					}
					var $target = $('.file-list-filters');
					console.log($target.find("ul").length);
					if( $target.find("ul").length==0)
					{
						$(".breadcrumb__crumbs").attr('style' , 'margin-top:0px'); 					
					 $(".files-list__header-upload-button").attr('style' , 'margin-top:0px');	
					}
				});
				$(document).on('click', '.nc-chip, .files-list-filter_clear-button, .input-field_trailing-button, .button-vue__wrapper', function(){
					console.log("remove margin");
					var $target = $('.file-list-filters');
					console.log($target.find("ul").length);
					if( $target.find("ul").length==0)
					{
						$(".breadcrumb__crumbs").attr('style' , 'margin-top:0px'); 					
					 $(".files-list__header-upload-button").attr('style' , 'margin-top:0px');	
					}
					$(".search-card-container").removeClass("active");
					$(".search-textbox-position").removeClass("search-textbox-position-active");
				});
				// $(document).on('click','.nc-chip', function(){
				// 	var $target = $('.file-list-filters');
				// 	if($target.find("ul").length==1)
				// 	{
				// 		$(".breadcrumb__crumbs").attr('style' , 'margin-top:0px'); 					
				// 	 $(".files-list__header-upload-button").attr('style' , 'margin-top:0px');	
				// 	}
					
				// });
				// $(document).on('click','.files-list-filter__clear-button', function(){
				// 	var $target = $('.file-list-filters');
				// 	if($target.find("ul").length==1)
				// 	{
				// 		$(".breadcrumb__crumbs").attr('style' , 'margin-top:0px'); 					
				// 	 $(".files-list__header-upload-button").attr('style' , 'margin-top:0px');	
				// 	}
				// });

				// $('body,html').click(function(e){
				// 	console.log("click page redirects");
				// 	window.location.reload();
				// });
				// Menu Responsive function
				responsive_script();
				// Sticky Topbar 
				// remove serach bar toggle icon
				$("#nav-cf-searchbar").removeClass('app-navigation');				
				// $('.app-navigation-toggle').html('<i class="bx bx-chevron-left bx-sm align-middle"></i>');
				$('.app-navigation-toggle-wrapper').hide();
				// file filter button 
		//		$(".v-popper--theme-dropdown").on('click',function (event){
					$(document).on('click', '.v-popper--theme-dropdown', function(){
				console.log("margin 30px placed");
					 $(".breadcrumb__crumbs").attr('style' , 'margin-top:30px'); 					
					 $(".files-list__header-upload-button").attr('style' , 'margin-top:30px');					
				})
				// Serch fileter function
				$('#search_files').on('input', function() {
					 $(".breadcrumb__crumbs").attr('style' , 'margin-top:30px'); 
					 $(".files-list__header-upload-button").attr('style' , 'margin-top:30px');		
				});
			
				$('.app-navigation__content').removeAttr("inert");

				// ************ ON CLICK

				$(".app-navigation-toggle").on('click', function(event){
									

					// Toggle icon Removed
					//$(".app-navigation-toggle-wrapper").addClass('app-navigation-toggle-wrapper-removed-toggle');	
					$(".app-navigation-toggle-wrapper-new").addClass('app-navigation-toggle-wrapper-removed-toggle');				
					$('.app-navigation__content').removeAttr("inert");
					$('#nav-cf-searchbar').removeClass('app-navigation--close');
					
					
					  if (!$('#app-navigation-vue').hasClass('app-navigation-mini')) 
					  {
						$('#app-content-vue').addClass('main-expanded');					
						// **
						// $('#app-content-vue').attr('style','position:absolute !important');

						// right top breadcrumbs position						
						$('.files-list__header').attr('style','margin-left:100px');
						// right files table						
						// $('.files-list__table').attr('style','margin-left:70px');
						//right side file list filters
						// $('.files-list__filters').attr('style','margin-left:40px');
						$('#app-navigation-vue').addClass('app-navigation-mini');
						$('.app-navigation').addClass('app-navigation--close');
						$('.app-navigation').addClass('app-navigation-hover');
				      }else{
						  $('#app-content-vue').removeClass('main-expanded');
						  $('#app-content-vue').removeAttr('style');
						  $('.files-list__header').removeAttr('style');
						  $('.files-list__table').removeAttr('style');
						  $('.files-list__filters').removeAttr('style');
						  $('#app-navigation-vue').removeClass('app-navigation-mini');
						  $('.app-navigation').removeClass('app-navigation--close');
						  $('.app-navigation').removeClass('app-navigation-hover');
						//  $(".app-navigation-toggle-wrapper").removeClass('app-navigation-toggle-wrapper-removed-toggle');
						  $(".app-navigation-toggle-wrapper-new").removeClass('app-navigation-toggle-wrapper-removed-toggle');
						
					  }
					  
					// var theWindowSize =$(window).width(); 
					// console.log(theWindowSize)
					// if(theWindowSize<1200){
					// 	console.log("remove close class");
					// 	$('.app-navigation').removeClass('app-navigation--close');
					// 	$('.app-navigation').removeClass('app-navigation-hover');
					// }
					var theWindowSize =$(window).width(); 
					console.log(theWindowSize)
					$('.app-navigation').removeClass('app-navigation-hover');
					if(theWindowSize<1200){
						console.log("remove close class");
						$('.app-navigation').removeClass('app-navigation--close');						
					}else{					
						// $('.app-navigation').addClass('app-navigation--close');
						// $('.app-navigation').removeClass('app-navigation-hover-1200');
						// $('.app-navigation').show();
						// $('#app-navigation-vue').addClass('app-navigation-mini');	
					}
				});
				
				// ***************** OLD CODE ********/
				//Remove the 'app-navigation--close' class from the hovered element
				// $('#app-navigation-vue').on({					
				// 	mouseover: function() {	
				// 	// Check if the element currently has the 'app-navigation--close' class
				// 	if ($(this).hasClass('app-navigation-mini')) {
				// 		// slider menu hover overlay
				// 		$('.app-navigation').addClass('app-navigation-hover');
				// 		// Remove the 'app-navigation--close' class if it exists
				// 		$('.app-navigation').removeClass('app-navigation--close');						
				// 		//$(".app-navigation-toggle-wrapper").toggleClass('app-navigation-toggle-wrapper-removed-toggle');
				// 		$(".app-navigation-toggle-wrapper-new").toggleClass('app-navigation-toggle-wrapper-removed-toggle');
				// 	}
				// 	},
				// 	mouseout: function() {	
				// 	// Check if the element does not have the 'app-navigation--close' class
				// 	if ($(this).hasClass('app-navigation-mini')) {
				// 			// slider menu hover overlay
				// 		$('.app-navigation').removeClass('app-navigation-hover');
				// 		// Add the 'app-navigation--close' class if it does not exist
				// 		$('.app-navigation').addClass('app-navigation--close');
				// 		$('#nav-cf-searchbar').removeClass('app-navigation--close');
				// 	//	$(".app-navigation-toggle-wrapper").toggleClass('app-navigation-toggle-wrapper-removed-toggle');
				// 		$(".app-navigation-toggle-wrapper-new").toggleClass('app-navigation-toggle-wrapper-removed-toggle');
				// 	}
				// 	}
				// });
				// ***************** OLD CODE END********/
				 $('#app-navigation-vue').on({
				 		mouseenter: function() {
				 			if ($(this).hasClass('app-navigation-mini')) {
								console.log("working");
				 				$('.app-navigation').toggleClass('app-navigation-hover', true);
				 				$('.app-navigation').toggleClass('app-navigation--close', false);
				 				// $(".app-navigation-toggle-wrapper-new").toggleClass('app-navigation-toggle-wrapper-removed-toggle', false);
								 setTimeout(function() {
									$(".app-navigation-toggle-wrapper-new").removeClass('app-navigation-toggle-wrapper-removed-toggle');
								}, 500);
				 			}
				 		},
				 		mouseleave: function() {
				 			if ($(this).hasClass('app-navigation-mini')) {
				 				$('.app-navigation').toggleClass('app-navigation-hover', false);
				 				$('.app-navigation').toggleClass('app-navigation--close', true);
				 				$('#nav-cf-searchbar').toggleClass('app-navigation--close', false);
				 				$(".app-navigation-toggle-wrapper-new").addClass('app-navigation-toggle-wrapper-removed-toggle');
				 			}
				 		}
				 	});

			
			// Responsive Menu
			// $('.file-app-res-menu').hide();
			$(window).resize(function () {   
				$(".search-card-container").removeClass("active");
				$(".search-textbox-position").removeClass("search-textbox-position-active");
				responsive_script() 				
			}); // Responsive menu closed
		
		// Search
			$(".input-field__main-wrapper").addClass("search-textbox-position");
			$(".search-icon").on("click", function() {
				$(".search-card-container").addClass("active");
				$(".search-textbox-position").addClass("search-textbox-position-active");
			});
			$('#search_files').on('input', function() {
				$(".search-card-container").addClass("active");
				$(".search-textbox-position").addClass("search-textbox-position-active");
			});
		// let search = document.querySelector(".search");
        //  search.onclick = function(){
        //     document.querySelector(".search-card-container").classList.toggle('active');
         
		}); //Document Ready function closed
		
		</script>
			<!-- End -->
	</head>
	<body id="<?php p($_['bodyid']);?>" <?php foreach ($_['enabledThemes'] as $themeId) {
		p("data-theme-$themeId ");
	}?> data-themes=<?php p(join(',', $_['enabledThemes'])) ?>>
	<?php include 'layout.noscript.warning.php'; ?>

		<?php foreach ($_['initialStates'] as $app => $initialState) { ?>
			<input type="hidden" id="initial-state-<?php p($app); ?>" value="<?php p(base64_encode($initialState)); ?>">
		<?php }?>

		<div id="skip-actions">
			<?php if ($_['id-app-content'] !== null) { ?><a href="<?php p($_['id-app-content']); ?>" class="button primary skip-navigation skip-content"><?php p($l->t('Skip to main content')); ?></a><?php } ?>
			<?php if ($_['id-app-navigation'] !== null) { ?><a href="<?php p($_['id-app-navigation']); ?>" class="button primary skip-navigation"><?php p($l->t('Skip to navigation of app')); ?></a><?php } ?>
		</div>

		<header id="header">
			<div class="header-left">
				<a href="<?php print_unescaped($_['logoUrl'] ?: link_to('', 'index.php')); ?>"
					aria-label="<?php p($l->t('Go to %s', [$_['logoUrl'] ?: $_['defaultAppName']])); ?>"
					id="nextcloud">
					<div class="logo logo-icon"></div>
				</a>

				<nav id="header-left__appmenu"></nav>
			</div>

			<div class="header-right">
				<div id="unified-search"></div>
				<div id="notifications"></div>
				<div id="contactsmenu"></div>
				<div id="user-menu"></div>
			</div>
		</header>

		<main id="content" class="app-<?php p($_['appid']) ?>">
			<h1 class="hidden-visually" id="page-heading-level-1">
				<?php p((!empty($_['application']) && !empty($_['pageTitle']) && $_['application'] != $_['pageTitle'])
					? $_['application'].': '.$_['pageTitle']
					: (!empty($_['pageTitle']) ? $_['pageTitle'] : $theme->getName())
				); ?>
			</h1>
			<?php print_unescaped($_['content']); ?>
		</main>
		<div id="profiler-toolbar"></div>
	</body>
</html>
