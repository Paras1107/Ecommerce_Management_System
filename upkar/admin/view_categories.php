<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--bootstrap-css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-grid.min.css" integrity="sha512-i1b/nzkVo97VN5WbEtaPebBG8REvjWeqNclJ6AItj7msdVcaveKrlIIByDpvjk5nwHjXkIqGZscVxOrTb9tsMA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <!--fontlink-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>View Categories-Admin</title>
    </head>
    <style>
        #container{
            box-shadow:10px 10px 10px 5px blanchedalmond,10px 10px 10px 5px inset blanchedalmond;
            text-align: center;
    /* overflow: scroll; */
}
    </style>
    <body>
    <div class="mt-4" id="container">
  <h3 class="text-dark text-center mt-5 p-3">All Categories</h3>
   <table class="table table-responsive-display-none table-striped table-hover table-bordered mt-3 mb-2">
    <thead class="table-light text-center">
    <tr>
        <th>Category ID</th>
        <th>Title</th>
        <th colspan="2">Update</th>
    </tr>
    </thead>
    <tbody>
        <?php
$select_category="Select * from categories where category_status!='Inactive'";
$run=mysqli_query($conn,$select_category);
while($row=mysqli_fetch_array($run)){
    $category_id=$row['category_id'];
    $category_title=$row['category_title'];
    echo "<tr>
    <td>$category_id</td>
    <td>$category_title</td>
    <td><a href='index.php?edit_category=$category_id' class='btn btn-outline-success m-auto'>Edit</a><a href='index.php?delete_category=$category_id' class='btn btn-outline-danger m-auto' data-toggle='modal' data-target='#exampleModal'>Delete</a></td>
    </tr>
    ";
    

}
        ?>
        </tbody>
        </table>
</div>
 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete this category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Deleting this Category may cause error in Your data..
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="index.php?view_category" class="text-decoration-none">Close</a></button>
        <button type="button" class="btn btn-Danger"><a href='index.php?delete_category=<?php echo $category_id?>' type='button' class='btn btn-outline-danger m-auto'>Yes Delete</a></button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
