<?php

header('Content-Type: application/json');
echo json_encode(dir_to_jstree_array('/var/www/html/scaleinfinite-nextcloud-all/data/admin'));

function dir_to_jstree_array($dir, $order = "a", $ext = array()) {

    if(empty($ext)) {
        $ext = array (
            "jpg", "gif", "jpeg", "png", "doc", "xls", "pdf", "tif","txt","docx"
        );
    }

    $listDir = array(
        'text' => basename($dir),
        'attr' => array (
            'rel' => 'folder'
        ),
        'metadata' => array (
            'id' => $dir
        ),
        'children' => array()
    );

    $files = array();
    $dirs = array();

    if($handler = opendir($dir))
    {
        while (($sub = readdir($handler)) !== FALSE)
        {
            if ($sub != "." && $sub != "..")
            {
                if(is_file($dir."/".$sub))
                {
                    $extension = pathinfo($dir."/".$sub, PATHINFO_EXTENSION);
                    if(in_array($extension, $ext)) {
                        $temp=array();
                        $temp['text']=$sub;
                        if($extension=='txt')
                        $temp['type']='file';
                       else if($extension=='jpg' || $extension=='png')
                        $temp['type']='img';
                        else if($extension=='pdf')
                        $temp['type']='pdf';
                        else if($extension=='docx' || $extension=='doc')
                        $temp['type']='document';
                       else
                        $temp['type']='css';
                        $temp['a_attr']['href']='https://cloud.fltt.fr/index.php/apps/files/files';
                        $temp['a_attr']['target']='_blank';
                        $temp['a_attr']['class']='link';
                       // $temp['type']='css';
                        $files []=$temp;

                        //$files []= $sub.'test';
                    }
                }elseif(is_dir($dir."/".$sub))
                {
                    $dirs []= $dir."/".$sub;
                }
            }
        }

        if($order === "a") {
            asort($dirs);
        } else {
            arsort($dirs);
        }

        foreach($dirs as $d) {
            $listDir['children'][]= dir_to_jstree_array($d);
        }

        if($order === "a") {
            asort($files);
        } else {
            arsort($files);
        }

        foreach($files as $file) {
            $listDir['children'][]= $file;
        }

        closedir($handler);
    }
    return $listDir;
}