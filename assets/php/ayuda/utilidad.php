<?php
$estatus =[1=>"Seleccione",2=>"Sin hacer",3=>"Haciendo",4=>"Hecho"];

$grupo =[1=>"Seleccione",2=>"Grupo ALPHA",3=>"Grupo BETA",4=>"Grupo CENTRAL",5=>"Grupo DELTA",
6=>"Grupo ELECON",7=>"Grupo FALCON",8=>"Para todos los grupos"];




function getLastElement($list){
    $scountList = count($list);
    $lastElement = $list[$scountList - 1];

    return $lastElement;
}

function getEstatusName($EstatusId){
    return $GLOBALS['estatus'] [$EstatusId];
}

function getGrupoName($grupoId){
    return $GLOBALS['grupo'] [$grupoId];
}

function searchProperty($list,$property,$value){

    $filter =[];
    foreach($list as $item){
        if($item[$property] == $value){
            array_push($filter,$item);
        }
    }

    return $filter;
}


function getIndexElement($list,$property,$value){

    $index = 0;

    foreach($list as $key => $item){
        if($item[$property] == $value){
        $index = $key;
        }
    }

    return $index;
}

?>