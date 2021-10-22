<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php deleteRows(); ?>



<?php include "includes/header.php" ?>
    
<div class="container">
    
    <div class="col-xm-6">
        <h1 class="text-center">Delete</h1>
 <form action="login_delete.php" method="post">
        
        <div class="form-group">
        <lable for="username">Username</lable>    
        <input type="text" name="username" class="form-control">
        </div>
        
        <div class="form-group">
        <lable for="password">Password</lable>
        <input type="password" name="password" class="form-control"> 
        </div>
        
        <div class="form-group">
            <select name="id" id="">
                
                <?php 
                
                ashowAllData();
                
                ?>
            </select>
            
        </div>
        <br/>
        <input class="btn btn-primary" type="submit" name="submit" value="DELETE">
        
</form>
     
        
    </div>
<?php include "includes/footer.php" ?>