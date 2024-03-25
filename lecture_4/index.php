<?php
    include "file_and_folder.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div>
            <form method="post">
                <input type="text" name="dir_name"> - <button>Create Folder</button> <label class="err-mess"><?=$dir_err?></label>
            </form>
        </div>
        <div>
            <form method="post">
                <input type="text" name="file_name"> - <button>Create File</button> <label class="err-mess"><?=$file_err?></label>
            </form>
        </div>
    </header>
    <main>
        <?php
            print_r(scandir("drive"));
            $drive  = scandir("drive");
            for($i=2; $i<count($drive); $i++){
        ?>
        <div class="d-list">
            <?=$drive[$i]?>
        </div>
        <?php
            }
        ?>
    </main>
</body>
</html>