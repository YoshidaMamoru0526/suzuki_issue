<?php  
    //標準入力画面
    print '0以上1000000000以下の、数字を入力してください';
    $num = trim(fgets(STDIN));
    //入力された数値を変数に保存
    $num_origin = $num;
    //あらかじめ入力された数字の桁数を変数に代入
    $range = mb_strlen($num);
    
    //結果の表示
    //エラーメッセージがあれば優先的に表示
    if(isset($e) === TRUE){
        print $e;
        exit;
    }
    if(get_answer($num , $range , $num_origin) >= $num_origin){
    //エラーメッセージがなければ計算結果を表示
    print 'カプレカ数は'.get_answer($num , $range , $num_origin).'です';
    exit;
    }else{
        $num_2 = $num_origin*10;
        $range = mb_strlen($num_2);
        
        if(get_answer($num_2 , $range , $num_origin) >= $num_origin){
            print 'カプレカ数は'.get_answer($num_2 , $range , $num_origin).'です';
            exit;
        }
    }
    
    
    // ------以下　関数定義-----//

    //エラーチェック
    if(is_numeric($num) !== TRUE){
        $e = '文字ではなく数値を入力してください';
        exit($e);
    }
    if($num < 0){
        $e = '自然数を入力してください';
        exit($e);
    }
    //入力された数値の最大ー最小を求める
    function get_big_small($num,$type,$range){
        $result = array();
        //$numの桁数が$rangeより小さくても、右端に０をつけたして桁数を合わせる。
        $num = str_pad($num , $range , 0 , STR_PAD_RIGHT);
        //入力された数値を1つごとの配列に分解する
        for($i=0 ; $i < $range ; $i++){
            $result[] = $num[$i];
        }
        //大きい順に並べる
        if($type === 'big'){
            rsort($result);
        }
        //小さい順に並べる
        if($type === 'small'){
            sort($result);
        }
        //文字列に変換して$strに代入
        $str = '';
        for($i = 0 ; $i < $range ; $i++){
            //結合して代入する
            $str .= $result[$i];
        }
        //数値に戻して返す
        return (int)$str;
    }
    
    //返された大きい順の数値と小さい順の数値を計算する
    function calculate($num , $range){
        //配列分解前に文字情報に変換
        $num = (String)$num;
        //大きい順に並べた数値を代入
        $big = get_big_small($num , 'big' , $range);
        //小さい順に並べた数値を代入
        $small = get_big_small($num , 'small' , $range);
        //最大ー最小の結果を返す
        return $big-$small;
    }
    
    //最大ー最小の答えと、1つ前に表示されている数値が同じが確認する
    function get_answer($num , $range , $num_origin){
        //$array[] = null;
        $hoge = null;
        
        //$hogeに代入された値と、計算された$numの値が揃うまでループ
        while($hoge !== $num){
            //$hogeには計算された$numを随時代入
            $hoge = $num;
            //$numの値で最大ー最小を計算してから、再度$numに代入
            $num = calculate($num , $range);
            
        }
    //$hogeと$numの値が揃ったものを返す
    return $num;
    }
    
    
    
    

?>