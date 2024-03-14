<?php 
// use OCP\Util; // include Apps-loader js
// Util::addScript('helloworld', 'apps-loader.js');
include("modal-popup.php"); 
include("modal-otp.php");

$_SESSION['email'] = 'graphicssource@gmail.com';
$backendURL = "https://api.fltt.fr";

?>

<script  type="text/javascript" nonce="<?php p(\OC::$server->getContentSecurityPolicyNonceManager()->getNonce()) ?>">var namespace= '<?php echo $_SESSION["email"];?>', refresh=0, favResult=0; favPage='false'; imageGridId=0, backend_url = "<?php echo $backendURL;?>"; </script>
<?php
script('helloworld', array(
          'apps-loader'
       //  'get_data'
        ));
        ?>
<div class="app-content-wrapper scale-bg overflow-scroll">
<div class="container-xxl flex-grow-1 container-p-y">
<form class="row g-3 mb-3" onsubmit="return false">
   <div class="col-11  ms-4 skeleton text-center">
      <input type="text" id="search" class="form-control" placeholder="Search App..." aria-label="Search App...">
   </div>
   <!-- <div class="col-2  ">
      <button type="button" class="btn btn-primary skeleton">All</button>
      
      </div> -->
</form>
<!-- Static Card begin -->
<!-- <div class="container-xxl flex-grow-1 container-p-y  ">
   <div class="row" id="inner-body" >
      <div class="col-lg-4 col-md-6 col-sm-6 mb-4 ">
         <div class="card h-100 cardMaster ">
            <div class=" card-header d-flex align-items-center gap-5  border-light border-bottom p-0 pb-1" data-desc="Ubuntu is a Debian-based Linux operating system based on free software." data-logo="<?php print_unescaped(image_path('helloworld', '../img/ubuntu-logo.png')); ?>">
               <span class="d-flex justify-content-center applogo"><img src="<?php print_unescaped(image_path('helloworld', '../img/ubuntu-logo.png')); ?>" class=" rounded p-1 mt-2 ms-2 img-fluid" alt="Logo of ubuntu" style="width:3rem; "></span>
               <h6 class="card-title mt-3 pt-1 text-dark" style="margin-right: 3rem; font-size:1.5rem; font-weight:300;font-family: 'Oswald'; ">
                  Ubuntu
               </h6>
               <div class="  fav-btn" id="fav-btn-ubuntu "><a href="" class="badge badge-center rounded-pills bg-label-dark pt-2 me-2 "><i class="fa-regular fa-star" data-name="ubuntu"></i></a></div>
            </div>
            <div class="card-body text-left mt-2 ps-3 pt-2 pe-2 h-25"><span><small class="text-justify d-block">Ubuntu is a Debian-based Linux operating system based on free software. </small></span></div>
            <span>
               <div class="card-footer mt-2 ps-3 pt-2 pb-2 pe-2 text-center border-light border-top installexp"><button type="button" class=" btn btn-label-linkedin btn-sm" onclick="showPopup('ubuntu','<?php print_unescaped(image_path('helloworld', '../img/ubuntu-logo.png')); ?>','Ubuntu is a Debian-based Linux operating system based on free software.')"><i class="bx bx-cloud-download"></i>&nbsp; Install</button></div>
            </span>
         </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 mb-4 ">
         <div class="card h-100 cardMaster ">
            <div class=" card-header d-flex align-items-center gap-5  border-light border-bottom p-0 pb-1" data-desc="Busybox base image." data-logo="<?php print_unescaped(image_path('helloworld', '../img/busybox-logo.png')); ?>">
               <span class="d-flex justify-content-center applogo"><img src="<?php print_unescaped(image_path('helloworld', '../img/busybox-logo.png')); ?>" class=" rounded p-1 mt-2 ms-2 img-fluid" alt="Logo of busybox" style="width:3rem; "></span>
               <h6 class="card-title mt-3 pt-1 text-dark" style="margin-right: 3rem; font-size:1.5rem; font-weight:300;font-family: 'Oswald'; ">
                  Busybox
               </h6>
               <div class="  fav-btn" id="fav-btn-busybox "><a href="" class="badge badge-center rounded-pills bg-label-dark pt-2 me-2 "><i class="fa-regular fa-star" data-name="busybox"></i></a></div>
            </div>
            <div class="card-body text-left mt-2 ps-3 pt-2 pe-2 h-25"><span><small class="text-justify d-block">Busybox base image. </small></span></div>
            <span>
               <div class="card-footer mt-2 ps-3 pt-2 pb-2 pe-2 text-center border-light border-top installexp"><button type="button" class=" btn btn-label-linkedin btn-sm" onclick="showPopup('busybox','<?php print_unescaped(image_path('helloworld', '../img/busybox-logo.png')); ?>','Busybox base image.')"><i class="bx bx-cloud-download"></i>&nbsp; Install</button></div>
            </span>
         </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 mb-4 ">
         <div class="card h-100 cardMaster ">
            <div class=" card-header d-flex align-items-center gap-5  border-light border-bottom p-0 pb-1" data-desc="Python is an interpreted, interactive, object-oriented, open-source programming language." data-logo="<?php print_unescaped(image_path('helloworld', '../img/python-logo.png')); ?>">
               <span class="d-flex justify-content-center applogo"><img src="<?php print_unescaped(image_path('helloworld', '../img/python-logo.png')); ?>" class=" rounded p-1 mt-2 ms-2 img-fluid" alt="Logo of python" style="width:3rem; "></span>
               <h6 class="card-title mt-3 pt-1 text-dark" style="margin-right: 3rem; font-size:1.5rem; font-weight:300;font-family: 'Oswald'; ">
                  Python
               </h6>
               <div class="  fav-btn" id="fav-btn-python "><a href="" class="badge badge-center rounded-pills bg-label-dark pt-2 me-2 "><i class="fa-regular fa-star" data-name="python"></i></a></div>
            </div>
            <div class="card-body text-left mt-2 ps-3 pt-2 pe-2 h-25"><span><small class="text-justify d-block">Python is an interpreted, interactive, object-oriented, open-source programming language. </small></span></div>
            <span>
               <div class="card-footer mt-2 ps-3 pt-2 pb-2 pe-2 text-center border-light border-top installexp"><button type="button" class=" btn btn-label-linkedin btn-sm" onclick="showPopup('python','<?php print_unescaped(image_path('helloworld', '../img/python-logo.png')); ?>','Python is an interpreted, interactive, object-oriented, open-source programming language.')"><i class="bx bx-cloud-download"></i>&nbsp; Install</button></div>
            </span>
         </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 mb-4 ">
         <div class="card h-100 cardMaster ">
            <div class=" card-header d-flex align-items-center gap-5  border-light border-bottom p-0 pb-1" data-desc="Ubuntu is a Debian-based Linux operating system based on free software." data-logo="<?php print_unescaped(image_path('helloworld', '../img/ubuntu-logo.png')); ?>">
               <span class="d-flex justify-content-center applogo"><img src="<?php print_unescaped(image_path('helloworld', '../img/ubuntu-logo.png')); ?>" class=" rounded p-1 mt-2 ms-2 img-fluid" alt="Logo of ubuntu" style="width:3rem; "></span>
               <h6 class="card-title mt-3 pt-1 text-dark" style="margin-right: 3rem; font-size:1.5rem; font-weight:300;font-family: 'Oswald'; ">
                  Ubuntu
               </h6>
               <div class="  fav-btn" id="fav-btn-ubuntu "><a href="" class="badge badge-center rounded-pills bg-label-dark pt-2 me-2 "><i class="fa-regular fa-star" data-name="ubuntu"></i></a></div>
            </div>
            <div class="card-body text-left mt-2 ps-3 pt-2 pe-2 h-25"><span><small class="text-justify d-block">Ubuntu is a Debian-based Linux operating system based on free software. </small></span></div>
            <span>
               <div class="card-footer mt-2 ps-3 pt-2 pb-2 pe-2 text-center border-light border-top installexp"><button type="button" class=" btn btn-label-linkedin btn-sm" onclick="showPopup('ubuntu','<?php print_unescaped(image_path('helloworld', '../img/ubuntu-logo.png')); ?>','Ubuntu is a Debian-based Linux operating system based on free software.')"><i class="bx bx-cloud-download"></i>&nbsp; Install</button></div>
            </span>
         </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 mb-4 ">
         <div class="card h-100 cardMaster ">
            <div class=" card-header d-flex align-items-center gap-5  border-light border-bottom p-0 pb-1" data-desc="Busybox base image." data-logo="<?php print_unescaped(image_path('helloworld', '../img/busybox-logo.png')); ?>">
               <span class="d-flex justify-content-center applogo"><img src="<?php print_unescaped(image_path('helloworld', '../img/busybox-logo.png')); ?>" class=" rounded p-1 mt-2 ms-2 img-fluid" alt="Logo of busybox" style="width:3rem; "></span>
               <h6 class="card-title mt-3 pt-1 text-dark" style="margin-right: 3rem; font-size:1.5rem; font-weight:300;font-family: 'Oswald'; ">
                  Busybox
               </h6>
               <div class="  fav-btn" id="fav-btn-busybox "><a href="" class="badge badge-center rounded-pills bg-label-dark pt-2 me-2 "><i class="fa-regular fa-star" data-name="busybox"></i></a></div>
            </div>
            <div class="card-body text-left mt-2 ps-3 pt-2 pe-2 h-25"><span><small class="text-justify d-block">Busybox base image. </small></span></div>
            <span>
               <div class="card-footer mt-2 ps-3 pt-2 pb-2 pe-2 text-center border-light border-top installexp"><button type="button" class=" btn btn-label-linkedin btn-sm" onclick="showPopup('busybox','<?php print_unescaped(image_path('helloworld', '../img/busybox-logo.png')); ?>','Busybox base image.')"><i class="bx bx-cloud-download"></i>&nbsp; Install</button></div>
            </span>
         </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 mb-4 ">
         <div class="card h-100 cardMaster ">
            <div class=" card-header d-flex align-items-center gap-5  border-light border-bottom p-0 pb-1" data-desc="Python is an interpreted, interactive, object-oriented, open-source programming language." data-logo="<?php print_unescaped(image_path('helloworld', '../img/python-logo.png')); ?>">
               <span class="d-flex justify-content-center applogo"><img src="<?php print_unescaped(image_path('helloworld', '../img/python-logo.png')); ?>" class=" rounded p-1 mt-2 ms-2 img-fluid" alt="Logo of python" style="width:3rem; "></span>
               <h6 class="card-title mt-3 pt-1 text-dark" style="margin-right: 3rem; font-size:1.5rem; font-weight:300;font-family: 'Oswald'; ">
                  Python
               </h6>
               <div class="  fav-btn" id="fav-btn-python "><a href="" class="badge badge-center rounded-pills bg-label-dark pt-2 me-2 "><i class="fa-regular fa-star" data-name="python"></i></a></div>
            </div>
            <div class="card-body text-left mt-2 ps-3 pt-2 pe-2 h-25"><span><small class="text-justify d-block">Python is an interpreted, interactive, object-oriented, open-source programming language. </small></span></div>
            <span>
               <div class="card-footer mt-2 ps-3 pt-2 pb-2 pe-2 text-center border-light border-top installexp"><button type="button" class=" btn btn-label-linkedin btn-sm" onclick="showPopup('python','<?php print_unescaped(image_path('helloworld', '../img/python-logo.png')); ?>','Python is an interpreted, interactive, object-oriented, open-source programming language.')"><i class="bx bx-cloud-download"></i>&nbsp; Install</button></div>
            </span>
         </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 mb-4 ">
         <div class="card h-100 cardMaster ">
            <div class=" card-header d-flex align-items-center gap-5  border-light border-bottom p-0 pb-1" data-desc="Ubuntu is a Debian-based Linux operating system based on free software." data-logo="<?php print_unescaped(image_path('helloworld', '../img/ubuntu-logo.png')); ?>">
               <span class="d-flex justify-content-center applogo"><img src="<?php print_unescaped(image_path('helloworld', '../img/ubuntu-logo.png')); ?>" class=" rounded p-1 mt-2 ms-2 img-fluid" alt="Logo of ubuntu" style="width:3rem; "></span>
               <h6 class="card-title mt-3 pt-1 text-dark" style="margin-right: 3rem; font-size:1.5rem; font-weight:300;font-family: 'Oswald'; ">
                  Ubuntu
               </h6>
               <div class="  fav-btn" id="fav-btn-ubuntu "><a href="" class="badge badge-center rounded-pills bg-label-dark pt-2 me-2 "><i class="fa-regular fa-star" data-name="ubuntu"></i></a></div>
            </div>
            <div class="card-body text-left mt-2 ps-3 pt-2 pe-2 h-25"><span><small class="text-justify d-block">Ubuntu is a Debian-based Linux operating system based on free software. </small></span></div>
            <span>
               <div class="card-footer mt-2 ps-3 pt-2 pb-2 pe-2 text-center border-light border-top installexp"><button type="button" class=" btn btn-label-linkedin btn-sm" onclick="showPopup('ubuntu','<?php print_unescaped(image_path('helloworld', '../img/ubuntu-logo.png')); ?>','Ubuntu is a Debian-based Linux operating system based on free software.')"><i class="bx bx-cloud-download"></i>&nbsp; Install</button></div>
            </span>
         </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 mb-4 ">
         <div class="card h-100 cardMaster ">
            <div class=" card-header d-flex align-items-center gap-5  border-light border-bottom p-0 pb-1" data-desc="Busybox base image." data-logo="<?php print_unescaped(image_path('helloworld', '../img/busybox-logo.png')); ?>">
               <span class="d-flex justify-content-center applogo"><img src="<?php print_unescaped(image_path('helloworld', '../img/busybox-logo.png')); ?>" class=" rounded p-1 mt-2 ms-2 img-fluid" alt="Logo of busybox" style="width:3rem; "></span>
               <h6 class="card-title mt-3 pt-1 text-dark" style="margin-right: 3rem; font-size:1.5rem; font-weight:300;font-family: 'Oswald'; ">
                  Busybox
               </h6>
               <div class="  fav-btn" id="fav-btn-busybox "><a href="" class="badge badge-center rounded-pills bg-label-dark pt-2 me-2 "><i class="fa-regular fa-star" data-name="busybox"></i></a></div>
            </div>
            <div class="card-body text-left mt-2 ps-3 pt-2 pe-2 h-25"><span><small class="text-justify d-block">Busybox base image. </small></span></div>
            <span>
               <div class="card-footer mt-2 ps-3 pt-2 pb-2 pe-2 text-center border-light border-top installexp"><button type="button" class=" btn btn-label-linkedin btn-sm" onclick="showPopup('busybox','<?php print_unescaped(image_path('helloworld', '../img/busybox-logo.png')); ?>','Busybox base image.')"><i class="bx bx-cloud-download"></i>&nbsp; Install</button></div>
            </span>
         </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 mb-4 ">
         <div class="card h-100 cardMaster ">
            <div class=" card-header d-flex align-items-center gap-5  border-light border-bottom p-0 pb-1" data-desc="Python is an interpreted, interactive, object-oriented, open-source programming language." data-logo="<?php print_unescaped(image_path('helloworld', '../img/python-logo.png')); ?>">
               <span class="d-flex justify-content-center applogo"><img src="<?php print_unescaped(image_path('helloworld', '../img/python-logo.png')); ?>" class=" rounded p-1 mt-2 ms-2 img-fluid" alt="Logo of python" style="width:3rem; "></span>
               <h6 class="card-title mt-3 pt-1 text-dark" style="margin-right: 3rem; font-size:1.5rem; font-weight:300;font-family: 'Oswald'; ">
                  Python
               </h6>
               <div class="  fav-btn" id="fav-btn-python "><a href="" class="badge badge-center rounded-pills bg-label-dark pt-2 me-2 "><i class="fa-regular fa-star" data-name="python"></i></a></div>
            </div>
            <div class="card-body text-left mt-2 ps-3 pt-2 pe-2 h-25"><span><small class="text-justify d-block">Python is an interpreted, interactive, object-oriented, open-source programming language. </small></span></div>
            <span>
               <div class="card-footer mt-2 ps-3 pt-2 pb-2 pe-2 text-center border-light border-top installexp"><button type="button" class=" btn btn-label-linkedin btn-sm" onclick="showPopup('python','<?php print_unescaped(image_path('helloworld', '../img/python-logo.png')); ?>','Python is an interpreted, interactive, object-oriented, open-source programming language.')"><i class="bx bx-cloud-download"></i>&nbsp; Install</button></div>
            </span>
         </div>
      </div>
   </div>
</div> -->
    <!-- Static Card End -->
    
        <div class="w-100 d-none alert alert-success d-flex" role="alert" id="notification">
          <span class="badge badge-center rounded-pill bg-success border-label-success p-3 me-2" id="notifbadge">
            <i class="bx bx-detail fs-6" id="nospinning"></i>
            <div class="bx bx-check bx-sm d-none" id="checking"></div>
            <div class="d-none spinner-border spinner-border-sm text-white" role="status" id="spinning" style="position:absolute;">
               <span class="visually-hidden">Loading...</span>
            </div>
          </span>
          <div class="d-flex flex-column ps-1">
            <h6 class="alert-heading d-flex align-items-center fw-bold mb-1" id="notiftitle"></h6>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="position: absolute;right: 1rem;top: 1.5rem;" control-id="ControlID-1"></button>
            <span id="notifbody"></span>
          </div>
        </div>
    <div class="row " id="inner-body"></div>
    <div class="w-100 d-flex justify-content-center" id="intersection">
      <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">             
      </div>
    </div>
    
</div>
</div>
<script  nonce="<?php p(\OC::$server->getContentSecurityPolicyNonceManager()->getNonce()) ?>" src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js"></script>
<!-- <script src="apps-loader-js.js"></script> -->

<!-- -------------- Lazy Loading -------------- -->
<!-- <script type="text/javascript"  nonce="<?php p(\OC::$server->getContentSecurityPolicyNonceManager()->getNonce()) ?>">
window.onload = function(){
   alert(" Inline script running"); 
}
</script> -->
<?php 
function lazyloading($start, $limit) {

   try {
       // Make sure to include necessary namespace or import
          $query = \OC::$server->getDatabaseConnection()->getQueryBuilder();
         $query->select('*')
         ->from('DockerHub_Data')
         ->orderBy('downloads', 'desc')
         ->setFirstResult($start)
         ->setMaxResults($limit);

         $cursor = $query->execute();
         $data = $cursor->fetchAll(); // Fetch all rows
         $response = array();
         if (!empty($data)) {
            foreach ($data as $row) {
               // Process each row
               array_push($response, array("name" => $row['Name'], "logo" => $row['Logo'], "desc" => $row['Description']));
               // $response = [
               //       'Name'      => $row['Name'], 
               //       'Link'         => $row ['Link'],
               //       'Logo'        => $row ['Logo'],               
               // ];
              
            }
         } 
      //echo json_encode($response) . "\n"; // Output JSON data     
       return json_encode($response);
     
   } catch (\Exception $e) { 
       http_response_code(500);
       echo $e->getMessage();
   }
}

?>
<script type="text/javascript"  nonce="<?php p(\OC::$server->getContentSecurityPolicyNonceManager()->getNonce()) ?>">
   $( document ).ready(function() {  
     
         // alert(" Inline script running");   
        // $("#parent").html('<div class=" spinner-border spinner-border-lg text-primary" role="status" style="position:fixed; top:50%; left:50%;">','<span class="visually-hidden">Loading...</span>','</div>');
      //   $("#parent").html("<?php// echo test(); ?>");
        
  });
  $(document).ready(function () {
    var start = 0;
    var limit = 19;
    var reachedMax = false;

    var fav_applist = [];

  
    function getData() {
     
        if (!reachedMax) {        // reachedmax = true = all images have been retrieved and there is nothing left to display
                     
            Cookies.set('start', start, { expires: 365 });
            Cookies.set('limit', limit, { expires: 365 });            
            var data = <?php echo lazyloading($_COOKIE['start'], $_COOKIE['limit']); ?>;     
                 
            if (data == "reachedMax") {
                reachedMax = true;
            } else {
                start += limit;
                 var jsonArray = data;               
                console.log(jsonArray);
                var html = generate_app_grid(jsonArray);
                console.log(html);
                if (refresh == 0) {
                    refresh += 1;
                    $("#inner-body").html($.parseHTML(html));
                } else {
                    $("#inner-body").append($.parseHTML(html));

                }
            }

            // $.ajax({
            //     type: 'POST',
            //     url: "lazyloading.php",
            //     headers: {"Content-type": "application/x-www-form-urlencoded; charset=UTF-8"},
            //     data: Object.entries({getData: 1, start: start, limit: limit, fav: 0}).map(([k, v]) => {
            //         return k + '=' + v
            //     }).join('&'),
            //     success: function (data) {
            //     }
            // })
        }
    }

    // $("#parent").html('<div class=" spinner-border spinner-border-lg text-primary" role="status" style="position:fixed; top:50%; left:50%;">','<span class="visually-hidden">Loading...</span>','</div>');
    console.log("test0");
    getData();
    // ajaxcheckFav(fav_applist);
    console.log("After get data");
    var options = {
        root: null,
        rootMargin: "0px",
        // When 100% = 1.0 of the loader spinner is visible fire the callback
        threshold: 1.0,
    };

    const callback = (entries) => {
        // callback is also called directly after instanciation, this condition avoid to launch getdata in this case;
        if (entries[0].intersectionRatio <= 0) return;
        console.log($(".cardMaster").length)
        getData();
        console.log($(".cardMaster").length)
    }

    const intersectionObserver = new IntersectionObserver(callback, options);
    // start observing
   //  setTimeout(() => {
   //      intersectionObserver.observe(document.querySelector("#intersection"))
   //  }, 500);

});  
</script>