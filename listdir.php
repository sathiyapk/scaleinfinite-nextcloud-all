/<?php
$log_directory = '/var/www/html/scaleinfinite-nextcloud-all/data/admin';


//header('Content-Type: application/json');
function listFolderFiles($dir)
{
    $fileInfo     = scandir($dir);
    $allFileLists = [];
    $jstree = [];
    $i=1;


    foreach ($fileInfo as $folder) {
        if ($folder !== '.' && $folder !== '..') {
            if (is_dir($dir . DIRECTORY_SEPARATOR . $folder) === true) {
                $allFileLists[$folder] = listFolderFiles($dir . DIRECTORY_SEPARATOR . $folder);
                $temp=array();
                $temp['id']=$i;
                $temp['text']=$folder;
                $jstree[]=$temp;
                $i=$i+1;
            } else {
                $allFileLists[$folder] = $folder;
                $temp=array();
                $temp['id']=$i;
                $temp['text_child']=$folder;
                print_r($temp);
                $jstree[]=$temp;
              //echo $dir;
                $i=$i+1;
               // echo $dir;
               echo $folder;
            }
        }
    }

   // return $allFileLists;
    return $jstree;
}//end listFolderFiles()


$dir = listFolderFiles('/var/www/html/scaleinfinite-nextcloud-all/data/admin');
//echo '<pre>';
print_r(json_encode($dir));
//echo '</pre>'

//listFolderFiles('/var/www/html/scaleinfinite-nextcloud-all/data/admin');

?>