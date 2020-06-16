<!DOCTYPEW html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>カプリカ数</title>
    </head>
    <body>
        <h1>カプレカ数</h1>
        <p>条件：0＜n＜1,000,000,000の範囲で入力してください</p>
        <?php 
        if(isset($e) === TRUE){ ?>
             <p><?php print $e ?></p>
        <?php } ?>
       
        <form method="post" action="suzuki_controller.php">
            <input type="number" min=0  max=1000000000 name="number"><br>
            <input type="submit" value="計算">
        </form>
        <?php
        if(isset($result_number) === TRUE && isset($e) !== TRUE){ ?>
            <p>カプレカ数は <?php print $result_number ?> です。</p>
        <?php } ?>
    </body>
</html>