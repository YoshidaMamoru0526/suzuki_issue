<?php
function number_ten($number){
    strval($number);
    
    $i = mb_substr($number,0,1);
    $j = mb_substr($number,1,1);
    $k = mb_substr($number,2,1);
    $l = mb_substr($number,3,1);
    $m = mb_substr($number,4,1);
    $n = mb_substr($number,5,1);
    $o = mb_substr($number,6,1);
    $p = mb_substr($number,7,1);
    $q = mb_substr($number,8,1);
    $r = mb_substr($number,9,1);
    
    
    $data = array($i , $j , $k , $l , $m , $n , $o , $p , $q , $r);
    return $data;
}
function number_nine($number){
    strval($number);
    
    $i = mb_substr($number,0,1);
    $j = mb_substr($number,1,1);
    $k = mb_substr($number,2,1);
    $l = mb_substr($number,3,1);
    $m = mb_substr($number,4,1);
    $n = mb_substr($number,5,1);
    $o = mb_substr($number,6,1);
    $p = mb_substr($number,7,1);
    $q = mb_substr($number,8,1);
    
    $data = array($i , $j , $k , $l , $m , $n , $o , $p , $q );
    return $data;
}
function number_eight($number){
    strval($number);
    
    $i = mb_substr($number,0,1);
    $j = mb_substr($number,1,1);
    $k = mb_substr($number,2,1);
    $l = mb_substr($number,3,1);
    $m = mb_substr($number,4,1);
    $n = mb_substr($number,5,1);
    $o = mb_substr($number,6,1);
    $p = mb_substr($number,7,1);
    
    $data = array($i , $j , $k , $l , $m , $n , $o , $p);
    return $data;
}
function number_seven($number){
    strval($number);
    
    $i = mb_substr($number,0,1);
    $j = mb_substr($number,1,1);
    $k = mb_substr($number,2,1);
    $l = mb_substr($number,3,1);
    $m = mb_substr($number,4,1);
    $n = mb_substr($number,5,1);
    $o = mb_substr($number,6,1);
    
    $data = array($i , $j , $k , $l , $m , $n , $o);
    return $data;
}
function number_six($number){
    strval($number);
    
    $i = mb_substr($number,0,1);
    $j = mb_substr($number,1,1);
    $k = mb_substr($number,2,1);
    $l = mb_substr($number,3,1);
    $m = mb_substr($number,4,1);
    $n = mb_substr($number,5,1);
    
    $data = array($i , $j , $k , $l , $m , $n);
    return $data;
}
function number_five($number){
    strval($number);
    
    $i = mb_substr($number,0,1);
    $j = mb_substr($number,1,1);
    $k = mb_substr($number,2,1);
    $l = mb_substr($number,3,1);
    $m = mb_substr($number,4,1);
    
    $data = array($i , $j , $k , $l , $m);
    return $data;
}
function number_four($number){
    strval($number);
    
    $i = mb_substr($number,0,1);
    $j = mb_substr($number,1,1);
    $k = mb_substr($number,2,1);
    $l = mb_substr($number,3,1);
    
    $data = array($i , $j , $k , $l);
    return $data;
}

function number_three($number){
    strval($number);
    
    $i = mb_substr($number,0,1);
    $j = mb_substr($number,1,1);
    $k = mb_substr($number,2,1);
    
    $data = array($i , $j , $k);
    return $data;
}
function sort_number_ten($data){
    rsort($data);
    $max = $data[0]*1000000000+$data[1]*100000000+$data[2]*10000000+$data[3]*1000000+$data[4]*100000+$data[5]*10000+$data[6]*1000+$data[7]*100+$data[8]*10+$data[9];
    sort($data);
    $min = $data[0]*1000000000+$data[1]*100000000+$data[2]*10000000+$data[3]*1000000+$data[4]*100000+$data[5]*10000+$data[6]*1000+$data[7]*100+$data[8]*10+$data[9];
    $result_number = $max - $min;
    return $result_number;
}
function sort_number_nine($data){
    rsort($data);
    $max = $data[0]*100000000+$data[1]*10000000+$data[2]*1000000+$data[3]*100000+$data[4]*10000+$data[5]*1000+$data[6]*100+$data[7]*10+$data[8];
    sort($data);
    $min = $data[0]*100000000+$data[1]*10000000+$data[2]*1000000+$data[3]*100000+$data[4]*10000+$data[5]*1000+$data[6]*100+$data[7]*10+$data[8];
    $result_number = $max - $min;
    return $result_number;
}
function sort_number_eight($data){
    rsort($data);
    $max = $data[0]*10000000+$data[1]*1000000+$data[2]*100000+$data[3]*10000+$data[4]*1000+$data[5]*100+$data[6]*10+$data[7];
    sort($data);
    $min = $data[0]*10000000+$data[1]*1000000+$data[2]*100000+$data[3]*10000+$data[4]*1000+$data[5]*100+$data[6]*10+$data[7];
    $result_number = $max - $min;
    return $result_number;
}
function sort_number_seven($data){
    rsort($data);
    $max = $data[0]*1000000+$data[1]*100000+$data[2]*10000+$data[3]*1000+$data[4]*100+$data[5]*10+$data[6];
    sort($data);
    $min = $data[0]*1000000+$data[1]*100000+$data[2]*10000+$data[3]*1000+$data[4]*100+$data[5]*10+$data[6];
    $result_number = $max - $min;
    return $result_number;
}
function sort_number_six($data){
    rsort($data);
    $max = $data[0]*100000+$data[1]*10000+$data[2]*1000+$data[3]*100+$data[4]*10+$data[5];
    sort($data);
    $min = $data[0]*100000+$data[1]*10000+$data[2]*1000+$data[3]*100+$data[4]*10+$data[5];
    $result_number = $max - $min;
    return $result_number;
}
function sort_number_five($data){
    rsort($data);
    $max = $data[0]*10000+$data[1]*1000+$data[2]*100+$data[3]*10+$data[4];
    sort($data);
    $min = $data[0]*10000+$data[1]*1000+$data[2]*100+$data[3]*10+$data[4];
    $result_number = $max - $min;
    return $result_number;
}
function sort_number_four($data){
    rsort($data);
    $max = $data[0]*1000+$data[1]*100+$data[2]*10+$data[3];
    sort($data);
    $min = $data[0]*1000+$data[1]*100+$data[2]*10+$data[3];
    $result_number = $max - $min;
    return $result_number;
}
function sort_number_three($data){
    rsort($data);
    $max = $data[0]*100+$data[1]*10+$data[2];
    sort($data);
    $min = $data[0]*100+$data[1]*10+$data[2];
    $result_number = $max - $min;
    return $result_number;
}

function push_number(){
    
    
    
}

?>