<?php

    require_once('interface/CRUD_class.php');
    include_once('controls/Connection.php');

    /**
     * * Database Connector*
     * **/
    // $con = new Database; 

    /***  
    **Insert code starts here*  
    **/ 
    
    $user = new User($first_name,$lastname,$usercity,$password,$username);//$first_name,$lastname,$usercity
    
    if(isset($_POST['save']))
    {
        $first_name = $_POST['first_name'];
        $lastname = $_POST['lastname'];
        $usercity=$_POST['user_city'];

       
       
        #$user->getUserData($first_name,$lastname,$usercity);
    
        // if($user->save($first_name,$lastname,$usercity))
        // {
        //     echo "User added Successfully";
        // }
        // else
        // {
        //     die("Error");
        // }
        $user->save();
        if (!$user->validateform()) {
              $user->createFormErrorSession();
              header("Refresh:0");
              die();
        }
        $res = $user->save();

        if($res){
            echo "Save Operation was successful";
        }else{
            echo "An error occured";
        }


    }

?>
    <html>

    <head>

        <title>Lab 1</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script type="text/javascript" src="Js/validate.js"></script>
        <link rel="stylesheet" type="text/css" href="Css/validate.css">
    </head>

    <body>
        
        <div class="container">
            <form class="form-group align-center" method="POST" name="user_details" onSubmit="return validateForm()" action = "saveUser.php">
                <input type = "text" name = "first_name" required placeholder = "First Name" class="form-control"/>
                <input type = "text" name = "lastname" class = "form-control"/>
                <input type = "text" name = "user_city" class = "form-control"/>
                <button type = "submit" name = "save" class = "btn btn-primary">Save</button>
            </form>
        </div>
                           
    </body>

    </html> 