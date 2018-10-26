<?php 

require_once 'db.php';
require_once 'header.php';
require_once 'footer.php';


if (isset($_POST['btn-update'])) {
    $id = $_GET['edit_id'];
    $name = $_POST['name'];
    $age =$_POST['age'];
    $grade =$_POST['grade'];
    $department =$_POST['department'];


    if ($student->update($id,$name,$age,$grade,$department)) {
        header("location:index.php");

    
    }else {
     echo 'faild';
    }
    
} 
if (isset($_GET['edit_id'])) {
$id =$_GET['edit_id'];
extract($student->getID($id));

} else {
    # code...
}




?>

<ul class="uk-navbar-nav">
<button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #modal-example"> <li>create  &nbsp;  <i class="fa fa-plus-square mycolor" aria-hidden="true"></i></button>

   
</li>
</ul>

</div>
</nav>
<hr class="uk-divider-icon">
 


<div class= " uk-grid-match uk-position-center" uk-grid>
    <div>
        <div class="uk-card uk-card-hover uk-card-body">
            <h3 class="uk-card-title">Update Person</h3>
    





<form method="post">
    <fieldset class="uk-fieldset">


        <div class="uk-margin">
            <input class="uk-input" type="text" value="<?php echo $name; ?>" name="name" required >
        </div>

        
        <div class="uk-margin">
            <input class="uk-input" type="number" value="<?php echo $age; ?>" name="age" required>
        </div>

        
        <div class="uk-margin">
            <input class="uk-input" type="text" value="<?php echo $grade; ?>" name="grade" required>
        </div>

        
        <div class="uk-margin">
            <input class="uk-input" type="text" value="<?php echo $department; ?>" name="department" required>
        </div>

        

    </fieldset>


    
        <p class="uk-text-right">
            <button class="uk-button uk-button-primary" type="submit" name="btn-update">update</button>
        </p>
</form>

    </div>
    </div>
    </div>
</div>


