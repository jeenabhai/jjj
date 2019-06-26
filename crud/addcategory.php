<?php
	require_once("config.php"); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Crud</title>
</head>
<body>
     <div class="container-fluid">
        <div class="row">
             <div class="col-lg-12">
                <div class="panel-heading">
                    <h4>Add New Category</h4>
                </div>
                <form method="post" action="action/addcategory.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="txttitle">Title</label>
                        	<input type="text" name="txttitle" id="txttitle" class="form-control" placeholder="Title" required />
                    </div>
                    <div class="form-group">
                        <label for="filphoto">File</label>
                        	<input type="file" name="fileUplode" id="fileUplode" class="form-control" placeholder=""  />
                    </div>
                        			
                    <div class="form-group">
                        <input type="submit" name="btnsubmit" value="Add Category" class="btn btn-primary" />
                    </div>
                        <?php 
							if(isset($_REQUEST['msg']))
								echo "{$_REQUEST['msg']}";
						?>
                        <p class="text-center"><a href="subcategory.php" class="btn btn-primary">Sub CAtegory</a></p>
                </form>
                        		
        <div class="row">
            <div class="col-lg-12">
                <h4>Existing Categories</h4> <hr/>
                    <table id="myTable" width="100%" class="table table-bordered table-striped" border="2">
                        <thead>
                        	<tr>
                        		<th>Sr no</th>
                        		<th>Title</th>
                        		<th>File</th>
                        		<th colspan="2">Action</th>
                        	</tr>
                        </thead>
                        
                        <tbody>
                        	<?php 
								$sql = "select * from category order by id desc";
								$result = mysqli_query($link,$sql) or die(mysqli_error($link));
								$count=1;
								    while($row = mysqli_fetch_assoc($result)) {
												
							?>
                        		<tr>
									<td><?php echo $count++; ?></td>
									<td><?php echo $row['title']; ?></td>
								    <td><?php echo $row['fileUplode']; ?></td>
									<td>
                                        <a href="updatecategory.php?id=<?php echo $row['id']; ?>" class="edit_btn">Ediit</a>
                                    </td>
                                    <td>
                                        <a href="deletecategory.php?id=<?php echo $row['id']; ?>" class="del_btn">Delete</a></td>
                        			</tr>
                        	<?php } ?>
                        </tbody>
                    </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
