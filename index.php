<?php 

require_once 'db.php';
require_once 'header.php';
require_once 'footer.php';


if (!isset($_SESSION['user_id'])) {
    header("location:login.php");
}

if (isset($_POST['btn-save'])) {
    $name = $_POST['name'];
    $age =$_POST['age'];
    $grade =$_POST['grade'];
    $department =$_POST['department'];


    if ($student->create($name,$age,$grade,$department)) {
        header("location:index.php");

    }else {
     echo 'faild';
    }
    
} 



?>


<style>
.mycolor{
    color: pink;
    size: 25px;
}
.col{
    color:red;

}
.color{
    color:blue;
}

</style>
<ul class="uk-navbar-nav">
<button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #modal-example"> <li>create  &nbsp;  <i class="fa fa-plus-square mycolor" aria-hidden="true"></i></button>
   
</li>
</ul>

</div>
</nav>
<hr class="uk-divider-icon">
 

<div class= "uk-position-center  uk-grid-match " uk-grid>
    <div>
        <div class="uk-card uk-card-hover uk-card-body">
            <h3 class="uk-card-title">Students</h3>
            <p style="text-align:right" class="font-italic text-success	"><span class="badge badge-warning">Hi <?php echo $_SESSION['username'];?></span>

            <table class="table table-hover table-bordered table-striped  table-dark">
     <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Grade</th>
            <th>Department</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php $student->dataview(); ?>   
    </tbody>
</table>
    



        </div>
    </div>
</div>

<a href="logout.php">&nbsp;<button type="button" class="btn btn-outline-danger btn-sm">LOGOUT</button>
<p style="text-align:right" class="font-italic text-info">New Admin?<a href="signup.php">&nbsp;<button type="button" class="btn btn-outline-secondary btn-sm">REGISTER</button>


<div id="modal-example" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Create Student</h2>

<form method="post">
    <fieldset class="uk-fieldset">


        <div class="uk-margin">
            <input class="uk-input" type="text" placeholder="Name" name="name" required >
        </div>

        
        <div class="uk-margin">
            <input class="uk-input" type="number" placeholder="Age" name="age" required>
        </div>

        
        <div class="uk-margin">
            <input class="uk-input" type="text" placeholder="Grade" name="grade" required>
        </div>

        
        <div class="uk-margin">
            <input class="uk-input" type="text" placeholder="Department" name="department" required>
        </div>

        

    </fieldset>


    
        <p class="uk-text-right">
            <button class="uk-button uk-button-primary" type="submit" name="btn-save">Save</button>
        </p>
</form>
    </div>
</div>

