<?php  
    print '数字を入力してください';
    $num = trim(fgets(STDIN));
    
  
    //$num = 231;
    print get_answer($num);
    
    function get_big_small($num,$type){
        $result=array();
        for($i=0;$i<mb_strlen($num);$i++){
            $result[]=$num[$i];
        }
        if($type==='big'){
            rsort($result);
        }else{
            sort($result);
        }
        $str='';
        for($i=0;$i<mb_strlen($num);$i++){
            $str.=$result[$i];
        } 
        return (int)$str;
    }
    
    function cap($num){
        $num = (String)$num;
        $big = get_big_small($num,'big');
        $small=get_big_small($num,'small');
        return $big-$small;
    }
    
    
    function get_answer($num){
        $tmp=null;
        while($tmp!==$num){
            $tmp=$num;
            $num = cap($num);
        }
        return $num;
    }
    
    
    
    
    
    
    //print $stdin;
?>