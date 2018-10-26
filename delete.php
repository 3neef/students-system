<?php 

require_once 'db.php';
require_once 'footer.php';

session_start();




if (isset($_POST['btn-delete'])) {
    $id = $_GET['delete_id'];
    


    if ($student->delete($id)) {
        header("location:index.php");

    
    }else {
     echo 'faild';
    }
    
} 
if (isset($_GET['delete_id'])) {

 
    ?>
    

<html>
    <head>
        <title>Mazin Hafiz</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="static\css\uikit.min.css" />
        <link rel="stylesheet" href="static\fonts\css\font-awesome.min.css">
        <script src="static\js\jquery-3.2.1.slim.min.js"></script>
        <script src="static\js\uikit.min.js"></script>
        <script src="static\js\uikit-icons.min.js"></script>
    </head>
    <body>


<div class=" uk-grid-match uk-position-center	" uk-grid>
    <div>
        <div class="uk-card uk-card-hover uk-card-body ">
            <h3 class="uk-card-title">Delete</h3>
            

    <table class="uk-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>grade</th>
            <th>Department</th>
            <th>Actions</th>
        </tr>
    </thead>
    
    <tbody>
        <tr>

        <?php
        
        
        $query= "SELECT * FROM `students` WHERE `id`=:id";
        $stmt= $conn->prepare($query);
        $stmt->execute(array(":id"=>$_GET['delete_id']));

            while($row=$stmt->fetch(PDO::FETCH_BOTH)){
        ?>
      <tr> 
      <td><?php echo $row['name']; ?> </td>
      <td><?php echo $row['age']; ?> </td>
      <td><?php echo $row['grade']; ?> </td>
      <td><?php echo $row['department']; ?> </td>
        
      <td>
     <form method="post">
         <input type="hidden" value="<?php echo $row['id']; ?>">
     <button class="uk-button uk-button-danger" type="submit" name="btn-delete">Delete</button>


     </form>


      </td> 
            </tr> 
            <?php
        } 
         ?>
            
    </tbody>
</table>

    
    


        </div>
    </div>
    </div>

    
    
    
    <?php
}




?>

