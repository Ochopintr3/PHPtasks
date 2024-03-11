<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php page</title>
</head>
<body>
    <h1>php page</h1>


    <form action="" method="post">
        <br>
        <input type="text" name="data">
        <br><br>
        <input type="text" name="age">
        <button>click</button>
    </form>

    <?php
        if(isset($_POST['data'])){
            echo $_POST['data'];
            print_r($_POST);
        }
    ?>

    <?php
    echo "<h1>GET</h1>";

    if(isset($_GET['x']) && isset($_GET['y'])){
        echo $_GET['x']."<br>";
        echo $_GET['y'];
    }
    
    ?>


    <?php
    echo "hello wold";
    $m = 45;
    echo "<hr>";
    echo $m;
    $s = "GAU";
    echo "<h1>$s</h1>";
    if($m>=30){
        echo "<h1></h1>";
    }

    for($i=0; $i<10; $i++){
        echo "<h3>$i</h3>";
    }

    $a = [3, 4, 98, "GAU", true];

    foreach($a as $v){
        echo $v."<br>";
    }

    $aa = ["name"=>"luka", "age"=>"20", "GPA"=>4, "uni"=>"GAU"];
    echo "<pre>";
    print_r($aa);
    
    
    ?>
</body>
</html>