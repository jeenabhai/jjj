<?php
    require_once("config.php"); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Crud</title>
</head>
<body>
    <?php 
        extract($_REQUEST);
        $sql = "select * from category where id='$id'";
        $result = mysqli_query($link,$sql) or die(mysqli_error());
        $row = mysqli_fetch_assoc($result);
    ?>
     <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Categories</h1>
                          
                                <form method="post" action="action/updatecategory.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="txttitle">Title</label>
                                        <input type="text" name="txttitle" id="txttitle" class="form-control" placeholder="Title" required value="<?php echo $row['title']; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="filphoto">File</label>
                                        <input type="file" name="fileUplode" id="fileUplode" class="form-control" placeholder="" required value="<?php echo $row['fileUplode']; ?>" />
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="submit" name="btnsubmit" value="UpdateCategory" class="btn btn-primary" />
                                       
                                    </div>
                                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                    <input type="hidden" name="oldfileUplode" value="<?php echo $row['fileUplode']; ?>" />
                                    <?php 
                                        if(isset($_REQUEST['msg']))
                                            echo "{$_REQUEST['msg']}";
                                    ?>
                                </form>
                                
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
</body>

</html>
