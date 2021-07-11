<DOCTYPE!>
<!DOCTYPE html>
<html>
<head>

    <!--------------------Bootstrap CSS------------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-------------------Google fonts--------------------->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

    <!-------------------W3 animations-------------------->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .container{
            margin-top: 17%;
            width: 50%;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .fontstyle{
            font-family: 'Acme', sans-serif;
            color: black;
            font-size: 20px;
            text-align: center;
        }
        .algn{
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        .row{
            margin-right: 10%;
            margin-left: 10%;
        }
    </style>
    <title>First Page</title>
</head>
<body>
    <font class="fontstyle">
        <?php require_once "./navbar.php" ?>

        <?php
        $Name = filter_input(INPUT_POST, 'Name');
        $usn = filter_input(INPUT_POST, 'usn');
        $aNO = filter_input(INPUT_POST, 'AssgNo');
        $sub = filter_input(INPUT_POST, 'sub');


        if(isset($_FILES["file"])) {

            $file_name= $_FILES['file']['name'];
            $file_size= $_FILES['file']['size'];
            $file_tmp= $_FILES['file']['tmp_name'];
            $file_type= $_FILES['file']['type'];

            switch($sub) {
                case "1":
                    move_uploaded_file($file_tmp, "Assignment/File Structures/".$file_name);?>
                    <div class = "container" style="background-color: #BDE87F;">
                        <p><i class="fa fa-check-circle" style="color: green; font-size:70px;"></i> <br>Uploaded File structres Assignment</p>
                    </div>
                    <?php
                    break;

                case "2":
                    move_uploaded_file($file_tmp, "Assignment/Web Technology/".$file_name);?>
                    <div class = "container" style="background-color: #BDE87F;">
                        <p><i class="fa fa-check-circle" style="color: green; font-size:70px;"></i> <br>Uploaded Web Technology Assignment</p>
                    </div>
                    <?php
                    break;

                case "3":
                    move_uploaded_file($file_tmp, "Assignment/Software Testing/".$file_name);?>
                    <div class = "container" style="background-color: #BDE87F;">
                        <p><i class="fa fa-check-circle" style="color: green; font-size:70px;"></i> <br>Uploaded Software Testing Assignment</p>
                    </div>
                    <?php
                    break;
            }
        }

        ?>
    </font>
</body>
</html>
