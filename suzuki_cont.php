<?php 
require_once './suzuki_model.php';
header('X-Frame-Options: DENY');
$array[] = 0;
$check = false;


if($_SERVER['REQUEST_METHOD']==='POST'){
    $number = htmlspecialchars($_POST['number']);
    if(is_numeric($number) === false){
        $e = '数字を入力してください';
    }
    if(mb_strlen($number) > 10){
        $e = '10桁以内の数字を入力してください';
    }
    if(mb_strlen($number) === 10){
        
        //入力された数字を1桁ずつに分ける
        $data = number_ten($number);
        //最大ー最小の値
        $result_number = sort_number_ten($data);
        //arrayに計算結果を追加
        array_push($array, $result_number);
        //上記を2週目からループ
        while($check === FALSE){
           $data = number_ten($result_number);
           $result_number_2 = sort_number_ten($data);
           
           if($result_number === $result_number_2 && mb_strlen($result_number_2) === mb_strlen($number) && $result_number_2 >= $number){
                break;
              
           }elseif(count($array) > 10000){
               $e = 'カプレカ数が見つかりません';
               break;
           }else{
               $result_number = $result_number_2;
               array_push($array , $result_number);
           }
        }
        
    }
    if(mb_strlen($number) === 9){
        
        //入力された数字を1桁ずつに分ける
        $data = number_nine($number);
        //最大ー最小の値
        $result_number = sort_number_nine($data);
        //arrayに計算結果を追加
        array_push($array, $result_number);
        //上記を2週目からループ
        while($check === FALSE){
           $data = number_nine($result_number);
           $result_number_2 = sort_number_nine($data);
           
           if($result_number === $result_number_2 && mb_strlen($result_number_2) === mb_strlen($number) && $result_number_2 >= $number){
                break;
              
           }elseif(count($array) > 10000){
               $e = 'カプレカ数が見つかりません';
               break;
           }else{
               $result_number = $result_number_2;
               array_push($array , $result_number);
           }
        }
        
    }
    
    if(mb_strlen($number) === 8){
        
        //入力された数字を1桁ずつに分ける
        $data = number_eight($number);
        //最大ー最小の値
        $result_number = sort_number_eight($data);
        //arrayに計算結果を追加
        array_push($array, $result_number);
        //上記を2週目からループ
        while($check === FALSE){
           $data = number_eight($result_number);
           $result_number_2 = sort_number_eight($data);
           
           if($result_number === $result_number_2 && mb_strlen($result_number_2) === mb_strlen($number) && $result_number_2 >= $number){
                break;
              
           }elseif(count($array) > 10000){
               $e = 'カプレカ数が見つかりません';
               break;
           }else{
               $result_number = $result_number_2;
               array_push($array , $result_number);
           }
        }
        
    }
    
    if(mb_strlen($number) === 7){
        
        //入力された数字を1桁ずつに分ける
        $data = number_seven($number);
        //最大ー最小の値
        $result_number = sort_number_seven($data);
        //arrayに計算結果を追加
        array_push($array, $result_number);
        //上記を2週目からループ
        while($check === FALSE){
           $data = number_seven($result_number);
           $result_number_2 = sort_number_seven($data);
           
           if($result_number === $result_number_2 && mb_strlen($result_number_2) === mb_strlen($number) && $result_number_2 >= $number){
                break;
              
           }elseif(count($array) > 10000){
               $e = 'カプレカ数が見つかりません';
               break;
           }else{
               $result_number = $result_number_2;
               array_push($array , $result_number);
           }
        }
        
    }
    
    if(mb_strlen($number) === 6){
        
        //入力された数字を1桁ずつに分ける
        $data = number_six($number);
        //最大ー最小の値
        $result_number = sort_number_six($data);
        //arrayに計算結果を追加
        array_push($array, $result_number);
        //上記を2週目からループ
       while($check === FALSE){
           $data = number_six($result_number);
           $result_number_2 = sort_number_six($data);
           
           if($result_number === $result_number_2 && mb_strlen($result_number_2) === mb_strlen($number) && $result_number_2 >= $number){
                break;
              
           }elseif(count($array) > 10000){
               $e = 'カプレカ数が見つかりません';
               break;
           }else{
               $result_number = $result_number_2;
               array_push($array , $result_number);
           }
        }
        
    }
    
    if(mb_strlen($number) === 5){
        
        //入力された数字を1桁ずつに分ける
        $data = number_five($number);
        //最大ー最小の値
        $result_number = sort_number_five($data);
        //arrayに計算結果を追加
        array_push($array, $result_number);
        //上記を2週目からループ
        while($check === FALSE){
           $data = number_five($result_number);
           $result_number_2 = sort_number_five($data);
           
           if($result_number === $result_number_2 && mb_strlen($result_number_2) === mb_strlen($number) && $result_number_2 >= $number){
                break;
              
           }elseif(count($array) > 10000){
               $e = 'カプレカ数が見つかりません';
               break;
           }else{
               $result_number = $result_number_2;
               array_push($array , $result_number);
           }
        }
        
    }
    
    if(mb_strlen($number) === 4){
        
        //入力された数字を1桁ずつに分ける
        $data = number_four($number);
        //最大ー最小の値
        $result_number = sort_number_four($data);
        //arrayに計算結果を追加
        array_push($array, $result_number);
        //上記を2週目からループ
        while($check === FALSE){
           $data = number_four($result_number);
           $result_number_2 = sort_number_four($data);
           
           if($result_number === $result_number_2 && mb_strlen($result_number_2) === mb_strlen($number) && $result_number_2 >= $number){
                break;
              
           }elseif(count($array) > 10000){
               $e = 'カプレカ数が見つかりません';
               break;
           }else{
               $result_number = $result_number_2;
               array_push($array , $result_number);
           }
        }
        
    }
    
    if(mb_strlen($number) === 3){
        //入力された数字を1桁ずつに分ける
        $data = number_three($number);
        //最大ー最小の値
        $result_number = sort_number_three($data);
        
        //上記を2週目からループ
        while($check === FALSE){
           $data = number_three($result_number);
           $result_number_2 = sort_number_three($data);
           
           if($result_number === $result_number_2 && mb_strlen($result_number_2) === mb_strlen($number) && $result_number_2 >= $number){
                break;
              
           }elseif(count($array) > 10000){
               $e = 'カプレカ数が見つかりません';
               break;
           }else{
               $result_number = $result_number_2;
               array_push($array , $result_number);
           }
        }
        
        
    }
    if(mb_strlen($number) === 2 || mb_strlen($number) === 1){
        $e = 'カプレカ数が存在しません';
    }
    
    
}


include_once './suzuki_view.php';

?>