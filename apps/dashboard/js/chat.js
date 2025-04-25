(function () {
    const setColorsBasedOnStyle = (isDarkStyle) => {
        if (isDarkStyle) {
            return {
                cardColor: config.colors_dark.cardColor,
                headingColor: config.colors_dark.headingColor,
                textMuted: config.colors_dark.textMuted,
                borderColor: config.colors_dark.borderColor,
                style: "dark",
                gradientColors: {
                    primary: "#4f51c0",
                    secondary: "#595cd9",
                    tertiary: "#8789ff",
                    quaternary: "#c3c4ff",
                }
            };
        } else {
            return {
                cardColor: config.colors.cardColor,
                headingColor: config.colors.headingColor,
                textMuted: config.colors.textMuted,
                borderColor: config.colors.borderColor,
                style: "light",
                gradientColors: {
                    primary: "#e1e2ff",
                    secondary: "#c3c4ff",
                    tertiary: "#a5a7ff",
                    quaternary: "#696cff",
                }
            };
        }
    };

    const colors = setColorsBasedOnStyle(1);

    // Generic function to render a radial bar chart
    const renderRadialBarChart = (selector, series, colors, labelColor) => {
        const element = document.querySelector(selector);
        if (element) {
            const chartConfig = {
                chart: {
                    height: 130,
                    sparkline: { enabled: true },
                    parentHeightOffset: 0,
                    type: "radialBar"
                },
                colors: colors,
                series: series,
                plotOptions: {
                    radialBar: {
                        startAngle: -90,
                        endAngle: 90,
                        hollow: { size: "55%" },
                        track: { background: config.colors_label.secondary },
                        dataLabels: {
                            name: { show: false },
                            value: {
                                fontSize: "18px",
                                fontFamily: "Public Sans",
                                color: labelColor,
                                fontWeight: 500,
                                offsetY: -5
                            }
                        }
                    }
                },
                grid: {
                    show: false,
                    padding: { left: -10, right: -10, bottom: 5 }
                },
                stroke: { lineCap: "round" },
                labels: ["Progress"]
            };

            new ApexCharts(element, chartConfig).render();
        }
    };

    // Render CPU Usage Chart
   // renderRadialBarChart("#CPUusage", [63], [config.colors.primary], colors.headingColor);

    // Render Memory Usage Chart
   // renderRadialBarChart("#MemoryUsage", [84], ["#face1b", "#face1b"], colors.headingColor);

    // Render Input/Output Usage Chart
   // renderRadialBarChart("#inputoutputUsage", [55], ["#71dd38", "#71dd38"], colors.headingColor);

    // Render Network Usage Chart
   // renderRadialBarChart("#network-Usage", [79], ["#28ccee", "#28ccee"], colors.headingColor);

	$.ajax({
		url: "https://"+window.location.hostname+"/index.php/apps/cloudfloat/gettotalmetrics",
		method: 'POST',
		data: {},
		dataType: 'json',
		success: function(response) {
			 //  console.log(response.cpu_percentage);
			
				renderRadialBarChart("#CPUusage", [response.cpu_percentage], ["#696cff"], "#384551");
				renderRadialBarChart("#MemoryUsage", [response.cpu_percentage], ["#face1b", "#face1b"], "#384551");
				renderRadialBarChart("#network-Usage", [response.cpu_percentage], ["#28ccee", "#28ccee"], "#384551");
				renderRadialBarChart("#inputoutputUsage", [response.cpu_percentage], ["#71dd38", "#71dd38"], "#384551");
			
		}
});



    // Render Growth Chart
    const networkElement = document.querySelector("#network");
    if (networkElement) {
        const networkChartConfig = {
            series: [75], // Chart data
            labels: ["Total Usage"], // Chart label
            chart: { height: 240, type: "radialBar" },
            plotOptions: {
                radialBar: {
                    size: 150,
                    offsetY: 10,
                    startAngle: -150,
                    endAngle: 150,
                    hollow: { size: "55%" },
                    track: {
                        background: "#fff",
                        strokeWidth: "100%"
                    },
                    dataLabels: {
                        name: {
                            offsetY: 15,
                            color: colors.textMuted,
                            fontSize: "15px",
                            fontWeight: "800",
                            fontFamily: "Public Sans"
                        },
                        value: {
                            offsetY: -25,
                            color: colors.headingColor,
                            fontSize: "22px",
                            fontWeight: "500",
                            fontFamily: "Public Sans"
                        }
                    }
                }
            },
            colors: ["#686cfe", "#686cfe"],
            fill: {
                type: "gradient",
                gradient: {
                    shade: "dark",
                    shadeIntensity: 0.5,
                    gradientToColors: ["#686cfe"],
                    inverseColors: true,
                    opacityFrom: 1,
                    opacityTo: 0.6,
                    stops: [30, 70, 100]
                }
            },
            stroke: { dashArray: 5 },
            grid: {
                padding: {
                    top: -35,
                    bottom: -10
                }
            },
            states: {
                hover: { filter: { type: "none" } },
                active: { filter: { type: "none" } }
            }
        };

        new ApexCharts(networkElement, networkChartConfig).render();
    }
})();



			// Growth Chat End

			var l = document.querySelector("#ioUsage1"),
						d = {
							chart: {
								height: 350,
								toolbar: {
									show: false
								},
								zoom: {
									enabled: false
								},
								type: "line",
								dropShadow: {
									enabled: true,
									enabledOnSeries: [1],
									top: 13,
									left: 4,
									blur: 3,
									color: "#face1b",
									opacity: 0.09
								}
							},
							series: [{
								name: "ioUsage",
								data: [20, 54, 20, 38, 22, 28, 16, 19, 26, 78, 82, 13]
							}, {
								name: "Last Hour",
								data: [20, 32, 22, 65, 40, 46, 34, 70, 24, 80, 38, 92]
							}],
							stroke: {
								curve: "smooth",
								dashArray: [12, 0],
								width: [3, 4]
							},
							legend: {
								show: false
							},
							colors: ["#face1b", "#03c3ec"], // Make sure to replace 'a' with actual color values
							grid: {
								show: false,
								borderColor: "#e0e0e0", // Replace 'r' with actual color value
								padding: {
									top: -20,
									bottom: -10,
									left: 0
								}
							},
							markers: {
								size: 6,
								colors: "transparent",
								strokeColors: "transparent",
								strokeWidth: 5,
								hover: {
									size: 6
								},
								discrete: [{
									fillColor: "#fff",
									seriesIndex: 1,
									dataPointIndex: 7,
									strokeColor: "#face1b",
									size: 6
								}, {
									fillColor: "#fff",
									seriesIndex: 1,
									dataPointIndex: 3,
									strokeColor: "#000",
									size: 6
								}]
							},
							xaxis: {
								labels: {
									style: {
										colors: "#6c757d", // Replace 'r' with actual color value
										fontSize: "13px"
									}
								},
								axisTicks: {
									show: true
								},
								categories: ["", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"],
								axisBorder: {
									show: false
								}
							},
							yaxis: {
								show: false
							}
						};

					if (l !== null) {
						const y = new ApexCharts(l, d);
						y.render();
					}
			var l = document.querySelector("#networkUsage1"),
						d = {
							chart: {
								height: 350,
								toolbar: {
									show: false
								},
								zoom: {
									enabled: false
								},
								type: "line",
								dropShadow: {
									enabled: true,
									enabledOnSeries: [1],
									top: 13,
									left: 4,
									blur: 3,
									color: "#face1b",
									opacity: 0.09
								}
							},
							series: [{
								name: "Network Usage",
								data: [20, 54, 20, 38, 22, 28, 16, 19, 26, 78, 82, 13]
							}, {
								name: "Last Hour",
								data: [20, 32, 22, 65, 40, 46, 34, 70, 24, 80, 38, 92]
							}],
							stroke: {
								curve: "smooth",
								dashArray: [12, 0],
								width: [3, 4]
							},
							legend: {
								show: false
							},
							colors: ["#face1b", "#71dd37"], // Make sure to replace 'a' with actual color values
							grid: {
								show: false,
								borderColor: "#e0e0e0", // Replace 'r' with actual color value
								padding: {
									top: -20,
									bottom: -10,
									left: 0
								}
							},
							markers: {
								size: 6,
								colors: "transparent",
								strokeColors: "transparent",
								strokeWidth: 5,
								hover: {
									size: 6
								},
								discrete: [{
									fillColor: "#fff",
									seriesIndex: 1,
									dataPointIndex: 7,
									strokeColor: "#face1b",
									size: 6
								}, {
									fillColor: "#fff",
									seriesIndex: 1,
									dataPointIndex: 3,
									strokeColor: "#000",
									size: 6
								}]
							},
							xaxis: {
								labels: {
									style: {
										colors: "#6c757d", // Replace 'r' with actual color value
										fontSize: "13px"
									}
								},
								axisTicks: {
									show: true
								},
								categories: ["", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"],
								axisBorder: {
									show: false
								}
							},
							yaxis: {
								show: false
							}
						};

					if (l !== null) {
						const y = new ApexCharts(l, d);
						y.render();
					}
					var l = document.querySelector("#cpuUsage"),
						d = {
							chart: {
								height: 200,
								toolbar: {
									show: false
								},
								zoom: {
									enabled: false
								},
								type: "line",
								dropShadow: {
									enabled: true,
									enabledOnSeries: [1],
									top: 13,
									left: 4,
									blur: 3,
									color: "#face1b",
									opacity: 0.09
								}
							},
							series: [{
								name: "CPU Usage",
								data: [20, 54, 20, 38, 22, 28, 16, 19, 26, 78, 82, 13]
							}, {
								name: "Last Hour",
								data: [20, 32, 22, 65, 40, 46, 34, 70, 24, 80, 38, 92]
							}],
							stroke: {
								curve: "smooth",
								dashArray: [12, 0],
								width: [3, 4]
							},
							legend: {
								show: false
							},
							colors: ["#face1b", "#9600ff"], // Make sure to replace 'a' with actual color values
							grid: {
								show: false,
								borderColor: "#e0e0e0", // Replace 'r' with actual color value
								padding: {
									top: -20,
									bottom: -10,
									left: 0
								}
							},
							markers: {
								size: 6,
								colors: "transparent",
								strokeColors: "transparent",
								strokeWidth: 5,
								hover: {
									size: 6
								},
								discrete: [{
									fillColor: "#fff",
									seriesIndex: 1,
									dataPointIndex: 7,
									strokeColor: "#face1b",
									size: 6
								}, {
									fillColor: "#fff",
									seriesIndex: 1,
									dataPointIndex: 3,
									strokeColor: "#000",
									size: 6
								}]
							},
							xaxis: {
								labels: {
									style: {
										colors: "#6c757d", // Replace 'r' with actual color value
										fontSize: "13px"
									}
								},
								axisTicks: {
									show: true
								},
								categories: ["", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"],
								axisBorder: {
									show: false
								}
							},
							yaxis: {
								show: false
							}
						};

					if (l !== null) {
						const y = new ApexCharts(l, d);
						y.render();
					}

					var l = document.querySelector("#memoryUsage"),
						d = {
							chart: {
								height: 350,
								toolbar: {
									show: false
								},
								zoom: {
									enabled: false
								},
								type: "line",
								dropShadow: {
									enabled: true,
									enabledOnSeries: [1],
									top: 13,
									left: 4,
									blur: 3,
									color: "#face1b",
									opacity: 0.09
								}
							},
							series: [{
								name: "CPU Usage",
								data: [20, 54, 20, 38, 22, 28, 16, 19, 26, 78, 82, 13]
							}, {
								name: "Last Hour",
								data: [20, 32, 22, 65, 40, 46, 34, 70, 24, 80, 38, 92]
							}],
							stroke: {
								curve: "smooth",
								dashArray: [12, 0],
								width: [3, 4]
							},
							legend: {
								show: false
							},
							colors: ["#face1b", "#696cff"], // Make sure to replace 'a' with actual color values
							grid: {
								show: false,
								borderColor: "#e0e0e0", // Replace 'r' with actual color value
								padding: {
									top: -20,
									bottom: -10,
									left: 0
								}
							},
							markers: {
								size: 6,
								colors: "transparent",
								strokeColors: "transparent",
								strokeWidth: 5,
								hover: {
									size: 6
								},
								discrete: [{
									fillColor: "#fff",
									seriesIndex: 1,
									dataPointIndex: 7,
									strokeColor: "#face1b",
									size: 6
								}, {
									fillColor: "#fff",
									seriesIndex: 1,
									dataPointIndex: 3,
									strokeColor: "#000",
									size: 6
								}]
							},
							xaxis: {
								labels: {
									style: {
										colors: "#6c757d", // Replace 'r' with actual color value
										fontSize: "13px"
									}
								},
								axisTicks: {
									show: true
								},
								categories: ["", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"],
								axisBorder: {
									show: false
								}
							},
							yaxis: {
								show: false
							}
						};

					if (l !== null) {
						const y = new ApexCharts(l, d);
						y.render();
					}
				
			//Total CPU Usage
			
    let o, e, r, t1, a, s, i, n;
    let isDarkStyle=1;
    l = isDarkStyle ? 
        (o = config.colors_dark.cardColor, e = config.colors_dark.headingColor, r = config.colors_dark.textMuted, a = config.colors_dark.borderColor, t1 = "dark", s = "#4f51c0", i = "#595cd9", n = "#8789ff", "#c3c4ff") 
        : 
        (o = config.colors.cardColor, e = config.colors.headingColor, r = config.colors.textMuted, a = config.colors.borderColor, t1 = "", s = "#e1e2ff", i = "#c3c4ff", n = "#a5a7ff", "#696cff");

	
   
	var d1 = document.querySelector("#totalCPUusage");  
	// Check and render the chart for the first ID
	
	  var options  = {
			chart: {
				height: 250,
				type: "area",
				toolbar: false,
				dropShadow: {
					enabled: true,
					top: 14,
					left: 2,
					blur: 3,
					color: "#696cff",
					opacity: 0.15
				}
			},
			series: [{                
				name: "CPU Usage",    
				data: [6912, 6432, 4800, 6850, 3950, 2950, 5800]
			}],
			dataLabels: {
				enabled: false
			},
			stroke: {
				width: 3,
				curve: "straight"
			},
			colors: ["#696cff"],
			fill: {
				type: "gradient",
				gradient: {
					shade: t1,
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
				categories: ["2024-11-04 20:10:51", "2024-11-04 22:10:51", "2024-11-05 00:10:51", "2024-11-05 02:10:51", "2024-11-05 04:10:51", "2024-11-05 06:10:51", "2024-11-05 08:10:51"],
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
						return parseInt(o / 1000);
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
	  $.ajax({
			  url: "https://"+window.location.hostname+"/index.php/apps/cloudfloat/getallmetrics",
			  method: 'POST',
			  data: {
			  'chart_type':'cpu',
			 'pod':$('#cpu_pod').val(),
			  'periods':1
			  },
			  dataType: 'json',
			  success: function(response) {
				  chart.updateSeries([{
							  data: response.cpu_percentage
						  }]);
			  },
	  });

	  let d2 = document.querySelector("#totalMemoryUsage");  
  
	  var options2 = {
			  chart: {
				  height: 250,
				  type: "area",
				  toolbar: false,
				  dropShadow: {
					  enabled: true,
					  top: 14,
					  left: 2,
					  blur: 3,
					  color: "#ffab00",
					  opacity: 0.15
				  }
			  },
			  series: [{                
				  name: "Memory Usage",    
				  data: [6912, 6432, 4800, 6850, 3950, 2950, 5800]
			  }],
			  dataLabels: {
				  enabled: false
			  },
			  stroke: {
				  width: 3,
				  curve: "straight"
			  },
			  colors: ["#ffab00"],
			  fill: {
				  type: "gradient",
				  gradient: {
					  shade: t1,
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
				  categories: ["2024-11-04 20:10:51", "2024-11-04 22:10:51", "2024-11-05 00:10:51", "2024-11-05 02:10:51", "2024-11-05 04:10:51", "2024-11-05 06:10:51", "2024-11-05 08:10:51"],
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
						  return parseInt(o / 1000);
					  },
					  style: {
						  fontSize: "13px",
						  fontFamily: "Public Sans",
						  colors: r
					  }
				  },
			  }
		  };
	  //    new ApexCharts(d1, c1).render();
	  var chart1 =  new ApexCharts(d2, options2);
	  chart1.render();
			$.ajax({
					url: "https://"+window.location.hostname+"/index.php/apps/cloudfloat/getallmetrics",
					method: 'POST',
					data: {
					'chart_type':'memory',
					'pod':$('#cpu_pod').val(),
					'periods':$('#cpu_period').val()
					},
					dataType: 'json',
					success: function(response) {
						chart1.updateSeries([{
									data: response.cpu_percentage
								}]);
					},
			});

			let d3 = document.querySelector("#networkUsage");  
			// Check and render the chart for the first ID
		   
			  var options3 = {
				chart: {
					height: 350,
					toolbar: {
						show: false
					},
					zoom: {
						enabled: false
					},
					type: "line",
					dropShadow: {
						enabled: true,
						enabledOnSeries: [1],
						top: 13,
						left: 4,
						blur: 3,
						color: "#face1b",
						opacity: 0.09
					}
				},
				series: [{
					name: "Network Usage",
					data: [20, 54, 20, 38, 22, 28, 16, 19, 26, 78, 82, 13]
				}, {
					name: "Last Hour",
					data: [20, 32, 22, 65, 40, 46, 34, 70, 24, 80, 38, 92]
				}],
				stroke: {
					curve: "smooth",
					dashArray: [12, 0],
					width: [3, 4]
				},
				legend: {
					show: false
				},
				colors: ["#face1b", "#71dd37"], // Make sure to replace 'a' with actual color values
				grid: {
					show: false,
					borderColor: "#e0e0e0", // Replace 'r' with actual color value
					padding: {
						top: -20,
						bottom: -10,
						left: 0
					}
				},
				markers: {
					size: 6,
					colors: "transparent",
					strokeColors: "transparent",
					strokeWidth: 5,
					hover: {
						size: 6
					},
					discrete: [{
						fillColor: "#fff",
						seriesIndex: 1,
						dataPointIndex: 7,
						strokeColor: "#face1b",
						size: 6
					}, {
						fillColor: "#fff",
						seriesIndex: 1,
						dataPointIndex: 3,
						strokeColor: "#000",
						size: 6
					}]
				},
				xaxis: {
					labels: {
						style: {
							colors: "#6c757d", // Replace 'r' with actual color value
							fontSize: "13px"
						}
					},
					axisTicks: {
						show: true
					},
					categories: ["", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"],
					axisBorder: {
						show: false
					}
				},
				yaxis: {
					show: false
				}
			};
				var chart2 =  new ApexCharts(d3, options3);
				chart2.render();
					  $.ajax({
							  url: "https://"+window.location.hostname+"/index.php/apps/cloudfloat/getallmetrics",
							  method: 'POST',
							  data: {
							  'chart_type':'network',
							  'pod':0,
							  'periods':1
							  },
							  dataType: 'json',
							  success: function(response) {
								  chart2.updateSeries([{
											  data: response.cpu_percentage
										  }]);
							  },
					  });
				
			  
					  let d4 = document.querySelector("#ioUsage");  
					  // Check and render the chart for the first ID
						  var options4 = {
							chart: {
								height: 350,
								toolbar: {
									show: false
								},
								zoom: {
									enabled: false
								},
								type: "line",
								dropShadow: {
									enabled: true,
									enabledOnSeries: [1],
									top: 13,
									left: 4,
									blur: 3,
									color: "#face1b",
									opacity: 0.09
								}
							},
							series: [{
								name: "ioUsage",
								data: [20, 54, 20, 38, 22, 28, 16, 19, 26, 78, 82, 13]
							}, {
								name: "Last Hour",
								data: [20, 32, 22, 65, 40, 46, 34, 70, 24, 80, 38, 92]
							}],
							stroke: {
								curve: "smooth",
								dashArray: [12, 0],
								width: [3, 4]
							},
							legend: {
								show: false
							},
							colors: ["#face1b", "#03c3ec"], // Make sure to replace 'a' with actual color values
							grid: {
								show: false,
								borderColor: "#e0e0e0", // Replace 'r' with actual color value
								padding: {
									top: -20,
									bottom: -10,
									left: 0
								}
							},
							markers: {
								size: 6,
								colors: "transparent",
								strokeColors: "transparent",
								strokeWidth: 5,
								hover: {
									size: 6
								},
								discrete: [{
									fillColor: "#fff",
									seriesIndex: 1,
									dataPointIndex: 7,
									strokeColor: "#face1b",
									size: 6
								}, {
									fillColor: "#fff",
									seriesIndex: 1,
									dataPointIndex: 3,
									strokeColor: "#000",
									size: 6
								}]
							},
							xaxis: {
								labels: {
									style: {
										colors: "#6c757d", // Replace 'r' with actual color value
										fontSize: "13px"
									}
								},
								axisTicks: {
									show: true
								},
								categories: ["", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"],
								axisBorder: {
									show: false
								}
							},
							yaxis: {
								show: false
							}
						};

						  var chart3 =  new ApexCharts(d4, options4);
						  chart3.render();
						$.ajax({
								url: "https://"+window.location.hostname+"/index.php/apps/cloudfloat/getallmetrics",
								method: 'POST',
								data: {
								'chart_type':'input',
								'pod':0,
								'periods':1
								},
								dataType: 'json',
								success: function(response) {
									chart3.updateSeries([{
												data: response.cpu_percentage
											}]);
								},
						});
					
// Check if the element exists and render the chart
const fileChart = (series) => {

let h = document.querySelector("#fileAppSpace");
if (h !== null) {
    let p = {
        chart: {
            height: 250,
            type: "radialBar"
        },
        series: [series],
        labels: ["Used Space"],
        plotOptions: {
            radialBar: {
                startAngle: 0,
                endAngle: 360,
                strokeWidth: "70",
                hollow: {
                    margin: 20,
                    size: "75%"
                },
                track: {
                    strokeWidth: "50%",
                    background: "#ebeef0"
                },
                dataLabels: {
                    show: true,
                    name: {
                        offsetY: 20,
                        show: true,
                        color: "#face1b",
                        fontSize: "15px",
                        fontFamily: "Public Sans"
                    },
                    value: {
                        formatter: function (o) {
                            return parseInt(o) + "%";
                        },
                        offsetY: -20,
                        color: "#ccc",
                        fontSize: "28px",
                        fontWeight: "500",
                        fontFamily: "Public Sans",
                        show: true
                    }
                }
            }
        },
        fill: {
            type: "solid",
            // colors: config.colors.success 
			colors: config.colors.success // Ensure `config.colors.success` is defined
        },
        stroke: {
            lineCap: "round"
        },
        states: {
            hover: {
                filter: {
                    type: "none"
                }
            },
            active: {
                filter: {
                    type: "none"
                }
            }
        }
    };
    
    // Render the chart
    new ApexCharts(h, p).render();
}
}
// File line chart
// Select the chart container and render only if it exists
let d5 = document.querySelector("#fileactivityChart");
    let options5 = {
        chart: {
            height: 250,
            width: 440,
            parentHeightOffset: 0,
            toolbar: {
                show: false
            },
            type: "area"
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            width: 3,
            curve: "smooth"
        },
        series: [{
            data: [15, 20, 14, 22, 17, 40, 12, 35, 25]
        }],
        colors: [config.colors.warning], // Ensure `config.colors.success` is defined
        fill: {
            type: "gradient",
            gradient: {
                shade: 'light', // Ensure `shade` value is a valid string or variable
                shadeIntensity: 0.8,
                opacityFrom: 0.8,
                opacityTo: 0.25,
                stops: [0, 85, 100]
            }
        },
        grid: {
            show: false,
            padding: {
                top: -20,
                bottom: -8
            }
        },
        legend: {
            show: false
        },
        xaxis: {
            categories: ["A1", "A2", "A3", "A4", "A5", "A6", "A7", "A8", "A9"],
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            },
            labels: {
                style: {
                    fontSize: "13px",
                    colors: "#680cae"
                }
            }
        },
        yaxis: {
            labels: {
                show: false
            }
        }
    };

    // Render the chart
    var chart4 =  new ApexCharts(d5, options5);
	chart4.render();



	$.ajax({
		url: "https://"+window.location.hostname+"/index.php/apps/cloudfloat/getactivity",
		method: 'POST',
		data: {
		'chart_type':'input',
		
		},
		dataType: 'json',
		success: function(response) {
			chart4.updateSeries([{
						data: response.cpu_percentage
					}]);
		},
});


        


var pods;
    var options =  ''; 
	var cpu_options =  '<select id="cpu_pod" class="form-select form-select-md"><option value="0">All Pods</option>'; 
	var memory_options =  '<select id="memory_pod" class="form-select form-select-md"><option value="0">All Pods</option>'; 
	var network_options =  '<select id="network_pod" class="form-select form-select-md"><option value="0">All Pods</option>'; 
	var input_options =  '<select id="io_pod" class="form-select form-select-md"><option value="0">All Pods</option>'; 
	var activity_options =  '<select id="activity_pod" class="form-select form-select-md"><option value="0">All Pods</option>'; 
    $.ajax({
        url: "https://"+window.location.hostname+"/index.php/apps/cloudfloat/getallmetrics",
        method: 'POST',
        data: {
        'chart_type':'pod',
        'pod':0,
        'periods':1
        },
        dataType: 'json',
        success: function(response) {
			pods= response.pods
                $(pods).each(function(index, value){ //loop through your elements
                        options += '<option value="'+value+'">'+value+'</option>';
					});
					options += '</select>';
				$('#cpu_pod_container').html(cpu_options+options);	
				$('#memory_pod_container').html(memory_options+options);
				$('#network_pod_container').html(network_options+options);
				$('#io_pod_container').html(input_options+options);	
				$('#activity_pod_container').html(activity_options+options);	
				},
		});			

var updatechart = function(chart_type,pod,periods){
	$.ajax({
								url: "https://"+window.location.hostname+"/index.php/apps/cloudfloat/getallmetrics",
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
												data: response.cpu_percentage
											}]);
										}else if(chart_type=="memory")
										{
											chart1.updateSeries([{
												data: response.cpu_percentage
											}]);	
										}else if(chart_type=="network")
										{
											chart2.updateSeries([{
												data: response.cpu_percentage
											}]);	
										}else if(chart_type=="input")
										{
											chart3.updateSeries([{
												data: response.cpu_percentage
											}]);	
										}
								},
								error: function(error) {
						
								}
						});
}	
var loadevent = function(pod,periods){
var j=1;
$.ajax({
	url: "https://"+window.location.hostname+"/index.php/apps/cloudfloat/getevents",
	method: 'POST',
	data: {
	'pod':pod,
	'periods':periods,
	},
	dataType: 'json',
	success: function(response) {
		var textData=response.cpu_percentage;

		$.each(textData, function(index, value) {
		//	console.log(value['name']);
var name=value['name'];
var msg=value['msg'];
var namespace=value['namespace'];
var date=value['date'];
var type=value['type'];


			$('#activity_txt').append('<ul class="list-unstyled m-0 timeline"><div class="timeline-item border-left-dashed ps-4" style="border-bottom:1px dashed #d9dee3 "><span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none"><i class="icon-base bx bx-check-circle"></i></span>');
			$('#activity_txt').append('<li class="email-list-item email-marked-read d-flex align-items-center " data-starred="true" data-bs-toggle="sidebar" data-target="#app-email-view"><div class="d-flex align-items-center w-100"><div class="email-list-item-content ms-2 ms-sm-0 me-2"><span class="email-list-item-username me-2 text-heading"><a href="">'+name+'</a></span></div><div class="email-list-item-meta ms-auto d-flex align-items-center"></div></div></li>');
			$('#activity_txt').append('<div class="d-flex"><small class="email-list-item-subject d-xl-inline-block d-block">'+msg+'</small></div>');
			$('#activity_txt').append('<div class="d-flex pt-1 pb-1"><span class="badge bg-label-danger">NS</span><small class="email-list-item-subject d-xl-inline-block d-block ps-1"> <a href="#">'+namespace+'</a></small></div>');
			$('#activity_txt').append('<div class="d-flex justify-content-between pt-1 pb-2"><span class="badge bg-label-success">'+date+'</span><span class="email-list-item-username me-2 ">'+type+'</span></div></div></ul>');
		
		  });


		/*var aLines = textData.split("\\n");
  
		var time = 500;
		 $.each(aLines, function(n, sLine) 
		 {
		   setTimeout( function(){

			
			//$('#activity_txt').append('<li class="d-flex  pb-2 align-items-center"><div class="avatar flex-shrink-0 me-3"><span class="avatar-initial rounded-circle bg-label-primary "><i class="bx bx-video"></i></span></div><div class="row w-100 align-items-center"><div class="col-sm-12 col-lg-12 col-xxl-12 mb-1 mb-sm-0 mb-lg-1 mb-xxl-0">'+sLine+'</div></div></li>');
			$('#activity_txt').append('<ul class="list-unstyled m-0 timeline"><div class="timeline-item border-left-dashed ps-4" style="border-bottom:1px dashed #d9dee3 "><span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none"><i class="icon-base bx bx-check-circle"></i></span>');
			$('#activity_txt').append('<li class="email-list-item email-marked-read d-flex align-items-center " data-starred="true" data-bs-toggle="sidebar" data-target="#app-email-view"><div class="d-flex align-items-center w-100"><div class="email-list-item-content ms-2 ms-sm-0 me-2"><span class="email-list-item-username me-2 text-heading"><a href="">Collect Profile</a></span></div><div class="email-list-item-meta ms-auto d-flex align-items-center"></div></div></li>');
			$('#activity_txt').append('<div class="d-flex"><small class="email-list-item-subject d-xl-inline-block d-block">Generated from Job control</small></div>');
			$('#activity_txt').append('<div class="d-flex pt-1 pb-1"><span class="badge bg-label-danger">NS</span><small class="email-list-item-subject d-xl-inline-block d-block ps-1"> <a href="#">cloadfloat-operator-lifecycle-manager</a></small></div>');
			$('#activity_txt').append('<div class="d-flex justify-content-between pt-1 pb-2"><span class="badge bg-label-success">10 Dec 2024 16:17:00</span><span class="email-list-item-username me-2 ">Deleted Job</span></div></div></ul>');
			 //$('#activity_txt').append('<li class="d-flex pb-2 align-items-center">'+sLine+'</li>');  
			 j=parseInt(j)+1;
		   }, time);
		   time += 800;
		  
		 });*/
		
	},
	error: function(error) {

	}
});
}
loadevent(0,1);
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
	updatechart('input',$('#io_pod').val(),$(this).data("value"));
});
$(".activity_period").on("click", function(){
	loadevent($('#activity_pod').val(),$(this).data("value"));
});
function timeAgo(fromDate, toDate = new Date()) {
	const seconds = Math.floor((toDate - new Date(fromDate)) / 1000);
  
	const intervals = [
	  { label: 'year', seconds: 31536000 },
	  { label: 'month', seconds: 2592000 },
	  { label: 'week', seconds: 604800 },
	  { label: 'day', seconds: 86400 },
	  { label: 'hour', seconds: 3600 },
	  { label: 'minute', seconds: 60 },
	  { label: 'second', seconds: 1 },
	];
  
	for (const interval of intervals) {
	  const count = Math.floor(seconds / interval.seconds);
	  if (count >= 1) {
		return `${count} ${interval.label}${count > 1 ? 's' : ''} ago`;
	  }
	}
  
	return 'just now';
  }
  
function time_ago(input) {
	const date = (input instanceof Date) ? input : new Date(input);
	const formatter = new Intl.RelativeTimeFormat('en');
	const ranges = {
	  years: 3600 * 24 * 365,
	  months: 3600 * 24 * 30,
	  weeks: 3600 * 24 * 7,
	  days: 3600 * 24,
	  hours: 3600,
	  minutes: 60,
	  seconds: 1
	};
	const secondsElapsed = (date.getTime() - Date.now()) / 1000;
	for (let key in ranges) {
	  if (ranges[key] < Math.abs(secondsElapsed)) {
		const delta = secondsElapsed / ranges[key];
		return formatter.format(Math.round(delta), key);
	  }
	}
  }
function timeConverter(UNIX_timestamp){

	//Math.floor(new Date('2012.08.10').getTime() / 1000)

	var a = new Date(UNIX_timestamp);
	var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
	var year = a.getFullYear();
	var month = months[a.getMonth()];
	var date = a.getDate();
	var hour = a.getHours();
	var min = a.getMinutes();
	var sec = a.getSeconds();
	var time = date + ' ' + month + ' ' + year + ' ' + hour + ':' + min + ':' + sec ;
	return time;
  }
  //https://cloud.fltt.fr/ocs/v2.php/apps/activity/api/v2/activity/all?format=json&previews=true&since=0
//https://cloud.fltt.fr/index.php/apps/cloudfloat/activity
$.ajax({
	url: "https://"+window.location.hostname+"/ocs/v2.php/apps/activity/api/v2/activity/all?format=json&previews=true&since=0",
	method: 'GET',
	data: {
	'user':1,
	},
	dataType: 'json',
	success: function(response) 
	{
	//	console.log(response);
	var textData=response.ocs.data;
	console.log(textData);

	
	$.each(textData, function(index, value) {
		//	console.log(value['name']);
var subject=value['subject'];
var datetime=value['datetime'];
var link=value['link'];

/*var msg=value['msg'];
var namespace=value['namespace'];
var type=value['type'];*/


$('#file_activity_txt').append(' <ul class="list-unstyled m-0 timeline"><div class="timeline-item border-left-dashed ps-4" style="border-bottom:1px dashed #d9dee3 "><span class="timeline-indicator-advanced timeline-indicator-warning border-0 shadow-none"><i class="icon-base bx bx-right-arrow-circle"></i></span><li class="email-list-item email-marked-read d-flex align-items-center " data-starred="true" data-bs-toggle="sidebar" data-target="#app-email-view"><div class="d-flex align-items-center w-100"><div class="email-list-item-content ms-2 ms-sm-0 me-2  align-items-center"><span class="email-list-item-username me-2 text-heading"><a href="'+link+'">'+timeConverter(datetime)+'<i class="icon-base bx bx-folder"></i></a></span></div></div></li><div class="d-flex"><small class="email-list-item-subject d-xl-inline-block d-block">'+subject+'</small></div><div class="d-flex justify-content-between pt-1 pb-2"><span class="badge bg-label-success">'+time_ago(datetime)+'</span></div></div></ul>');
		  });

	/*jQuery.each(textData, function(index, item) {
		// do something with `item` (or `this` is also `item` if you like)
		console.log(item);
		//$('#file_activity_txt').append('<li class="d-flex  pb-2 align-items-center"><div class="avatar flex-shrink-0 me-3"><span class="avatar-initial rounded-circle bg-label-primary "><i class="bx bx-video"></i></span></div><div class="row w-100 align-items-center"><div class="col-sm-8 col-lg-12 col-xxl-12 mb-1 mb-sm-0 mb-lg-1 mb-xxl-0"><p class="mb-0 lh-sm" style="font-size: 13px;">'+item.type+'-'+item.file+' </p> <span class="badge bg-label-warning">'+timeConverter(item.timestamp)+'</span></div></div></li>');
		$('#file_activity_txt').append(' <ul class="list-unstyled m-0 timeline"><div class="timeline-item border-left-dashed ps-4" style="border-bottom:1px dashed #d9dee3 "><span class="timeline-indicator-advanced timeline-indicator-warning border-0 shadow-none"><i class="icon-base bx bx-right-arrow-circle"></i></span><li class="email-list-item email-marked-read d-flex align-items-center " data-starred="true" data-bs-toggle="sidebar" data-target="#app-email-view"><div class="d-flex align-items-center w-100"><div class="email-list-item-content ms-2 ms-sm-0 me-2  align-items-center"><span class="email-list-item-username me-2 text-heading"><a href="">April 1, 2025 <i class="icon-base bx bx-folder"></i></a></span></div></div></li><div class="d-flex"><small class="email-list-item-subject d-xl-inline-block d-block">You deleted app password "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:136.0) Gecko/20100101 Firefox/136.0"</small></div><div class="d-flex justify-content-between pt-1 pb-2"><span class="badge bg-label-success">2 weeks ago</span></div></div></ul>');
	});*/

		//var aLines = textData.split("\\n");
  
	/*	var time = 500;
		 $.each(aLines, function(n, sLine) 
		 {
		   setTimeout( function(){

			$('#activity_txt').append('<li class="d-flex  pb-2 align-items-center"><div class="avatar flex-shrink-0 me-3"><span class="avatar-initial rounded-circle bg-label-primary "><i class="bx bx-video"></i></span></div><div class="row w-100 align-items-center"><div class="col-sm-8 col-lg-12 col-xxl-8 mb-1 mb-sm-0 mb-lg-1 mb-xxl-0"><p class="mb-0 lh-sm" style="font-size: 13px;">'+sLine+'</p></div></div></li>');

			 //$('#activity_txt').append('<li class="d-flex pb-2 align-items-center">'+sLine+'</li>');  
			 j=parseInt(j)+1;
		   }, time);
		   time += 800;
		  
		 });
		*/
	},
	error: function(error) {

	}
});
$.ajax({
	url: "https://"+window.location.hostname+"/index.php/apps/files/api/v1/stats",
	method: 'GET',
	data: {
	'user':1,
	},
	dataType: 'json',
	success: function(response) 
	{
		var per=(response.data.used/response.data.total)*100;
		//console.log(response.data.total);
		console.log(Math.round(per));
		fileChart(Math.round(per));
	
	},
	error: function(error) {

	}
});
var j=0;
$.ajax({
	url: "https://"+window.location.hostname+"/index.php/apps/cloudfloat/getapps",
	method: 'POST',
	data: {
	'user':1,
	},
	dataType: 'json',
	success: function(response) 
	{
		//var per=(response.data.used/response.data.total)*100;
		console.log(response);
		//console.log(Math.round(per));
		var textData=response.cpu_percentage;
		//var aLines = textData.split("\\n");
  
		var time = 500;
		 $.each(response, function(n, sLine) 
		 {
		   setTimeout( function(){

			$('#active_application').append(' <li class="d-flex align-items-center mb-2"><div class="avatar avatar-xs flex-shrink-0 me-3"><img src="'+sLine.logo+'" alt="User" class="rounded"></div><div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2"><div class="me-2"><div class="d-flex align-items-center"><h6 class="mb-0 me-2">'+sLine.name+'</h6><small class="text-success fw-medium d-flex align-items-center gap-1">'+sLine.image+'</small></div><small class=" fw-medium badge bg-label-danger" style="font-size: 10px;">'+sLine.host[0]+'</small></div></div></li>');

			 //$('#activity_txt').append('<li class="d-flex pb-2 align-items-center">'+sLine+'</li>');  
			 j=parseInt(j)+1;
		   }, time);
		   time += 800;
		  
		 });
		
		
	
	},
	error: function(error) {

	}
});