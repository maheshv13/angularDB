<?php
    require 'database.php';
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: index.php");
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM customers where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.css" rel="stylesheet">

</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Read a Customer</h3>
                    </div>
                     
                    <div class="form-horizontal" >
                      <div class="form-group">
                        <label class="form-label">Name</label>
                        <div class="">
                            <label class="checkbox">
                                <?php echo $data['name'];?>
                            </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Email Address</label>
                        <div class="">
                            <label class="checkbox">
                                <?php echo $data['email'];?>
                            </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Mobile Number</label>
                        <div class="">
                            <label class="checkbox">
                                <?php echo $data['mobile'];?>
                            </label>
                        </div>
                      </div>
                        <div class="form-actions">
                          <a class="btn btn-default" href="index.php">Back</a>
                       </div>
                     
                      
                    </div>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>