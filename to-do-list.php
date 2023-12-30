<?php  
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Daily To Do List</title>
</head>
<body>
    <div class="container">
        <div class="text-center mt-2">
            <h1>To Do List</h1>
            <p>Useing PHP Session</p>
        </div>
        
        <div class="row mt-5">
            <form action="" method="POST">
                <div class="d-flex justify-content-between p-0 m-0">
                    <div class="col-md-8">
                        <input class="form-control" type="text" id="name" name="name" placeholder="Create List Item">
                    </div>
                    <div class="col-md-2">
                        <button class="form-control btn btn-primary" type="submit">Save</button>
                    </div>
                </div>
            </form> 
        </div>
        
        <div class="row mt-5">
            <?php
                if (isset($_POST['name'])) {

                    $to_do_array = array(
                        'name'  => $_POST['name'],
                        'today' => (new DateTime())->format("Y-m-d H:i:s"),
                    ); 

                    if(isset($_SESSION["to-do-list"])) {
                        $is_available = false;
                        foreach ($_SESSION["to-do-list"] as $key => $value) {
                            if ($_SESSION["to-do-list"][$key]['name'] == $_POST["name"]) {
                                $is_available = true;
                            }
                        }
                        if(!$is_available) {
                            $_SESSION["to-do-list"][] = $to_do_array;
                        }
                    } else {
                        $_SESSION["to-do-list"][] = $to_do_array;
                    }
                }
            ?>
            <table class="table table-bordered border-primary table-striped">
                <tr>
                    <td>#</td>
                    <td>Name</td>
                    <td>Time</td>
                </tr>
                    <?php 
                        if (!empty($_SESSION["to-do-list"])) {
                            $SL = 1;
                            foreach ($_SESSION["to-do-list"] as $key => $value){
                                
                                $name   = $_SESSION["to-do-list"][$key]['name'];
                                $time   = $_SESSION["to-do-list"][$key]['today'];
                    ?>
                <tr class="border-dark">
                    <td><?= $SL++; ?></td>
                    <td><?= $name; ?></td>
                    <td><?= $time; ?></td>
                </tr>
                    <?php
                            }
                        }
                    ?>
            </table>
        </div>
    </div>
</body>
</html>
