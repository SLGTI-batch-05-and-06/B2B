
<?php include_once('script.php');
include_once('Config.php');

$_SESSION['Name']="Ibrahim";
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C2C BUSSINESS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="StyleAddProduct2.css">

</head>

<body>

<!----------------------------------------------HEADER------------------------------------------------------------->

<?php include ("ZHeader2.php")?>

<!----------------------------------------------ABOUT------------------------------------------------------------->

<section class="container">
<h2>Galary</h2>
    <div class="row">
        

        <div class="Glry_Contailner">
            <a href="#">
                <div class="img_edit"></div>

                <h3>THis is Title</h3>
                <p>This is Paregraph</p>
            </a>
        </div>

        
        <div class="Glry_Contailner">
            <a href="#">
                <div class="img_edit"></div>

                <h3>THis is Title</h3>
                <p>This is Paregraph</p>
            </a>
        </div>

        
        <div class="Glry_Contailner">
            <a href="#">
                <div class="img_edit"></div>

                <h3>THis is Title</h3>
                <p>This is Paregraph</p>
            </a>
        </div>

        
        <div class="Glry_Contailner">
            <a href="#">
                <div class="img_edit"></div>

                <h3>THis is Title</h3>
                <p>This is Paregraph</p>
            </a>
        </div>







        <div class="row">
    

        <div class="Glry_Contailner">
            <a href="#">
                <div class="img_edit"></div>

                <h3>THis is Title</h3>
                <p>This is Paregraph</p>
            </a>
        </div>

        
        <div class="Glry_Contailner">
            <a href="#">
                <div class="img_edit"></div>

                <h3>THis is Title</h3>
                <p>This is Paregraph</p>
            </a>
        </div>

        
        <div class="Glry_Contailner">
            <a href="#">
                <div class="img_edit"></div>

                <h3>THis is Title</h3>
                <p>This is Paregraph</p>
            </a>
        </div>

        
        <div class="Glry_Contailner">
            <a href="#">
                <div class="img_edit"></div>

                <h3>THis is Title</h3>
                <p>This is Paregraph</p>
            </a>
        </div>





    
        
        <div class="galary_upload">
            <form action="Include/" method="POST" enctype="multipart/form-data">

            <input type="text" name="NAME" placeholder="Enter Username" > 
            <input type="text" name="Title" placeholder="Enter title" > 
            <input type="text" name="Description" placeholder="Image Description" > 
            <input type="file" name="IMAGE"  class="box" accept="IMAGE/jpg, IMAGE/jpeg, IMAGE/png">
            <button type="submit" name ="submit">UPLOAD</button>

            </form>
        </div>
        
        
    </div>
</section>









 <!----------------------------------------------footer------------------------------------------------------------->

    <?php include ("ZFooter2.php")?>

    




</body>

</html>