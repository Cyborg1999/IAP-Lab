<?php

    require_once('controls/Crud_class');

     $crudobj = new Crud;

    if(isset($_POST['save']))
    {
        $first_name = $_POST['first_name'];
        $lastname = $_POST['lastname'];
        $usercity=$_POST['usercity'];

        $crudobj->getUserData($first_name,$lastname,$usercity);
        $crudobj->save();
    }

?>
    <!DOCTYPE html>
    <html>

    <head>

        <title>Lab 1</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>

    <body>
        
        <div class="containerg">
            <form class="form-group align-center" method="POST" action = "saveUser.php">
                <input type = "text" name = "first_name" required placeholder = "First Name" class="form-control"/>
                <input type = "text" name = "lastname" class = "form-control"/>
                <input type = "text" name = "user_city" class = "form-control"/>
                <button type = "submit" name = "save" class = "btn btn-primary">Save</button>
            </form>
        </div>
                           
    </body>

    </html> 