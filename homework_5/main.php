<main>
    <?php
        if(isset($_GET['ren'])){
            include "rename.php";
        } 
        if(isset($_POST["upload_file"])){
        }

        // echo "<pre>";
        // print_r(scandir("storage"));
        // echo "</pre>";

        $storage = scandir("storage");
    ?>  
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Download</th>
                <th>Rename</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                 for($i= 2; $i<count($storage); $i++){
            ?>
            <tr>
                <td><?=$storage[$i]?></td>
                <td><a href="storage/<?=$storage[$i]?>" download>download</a></td>
                <td><a href="?ren=<?=$storage[$i]?>">rename</a></td>
                <td><a href="?del=<?=$storage[$i]?>">delete</a></td>
            </tr>
            <?php 
                 }
            ?>
        </tbody>
    </table>
    <!-- <h1><?=$_POST['f_name']?></h1>   -->
</main>
