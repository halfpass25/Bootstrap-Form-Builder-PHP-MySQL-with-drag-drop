<?PHP
include_once "User.php";
 
$user = new User();
$data = $user->read();
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Read operation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 
 
<div class="container">
  <h2>List of Users</h2>
 
  <div ><a href="create.php" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Create New User</a></div>
  <table class="table table-striped table-responsive">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile No</th>
        <th>Gender</th>
        <th>Disability</th>
        <th>Hobbies</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php if($data != null)
      {
foreach ($data as $row) {
    ?>
   <tr>
    <form name="userForm<?php echo $row['user_id']; ?>" role="form" method="POST" action="UserController.php">
    <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
    <td><?php echo $row["name"] ?></td>
    <td><?php echo $row["email"] ?></td>
    <td><?php echo $row["mobile_no"] ?></td>
    <td><?php echo $row["gender"] ?></td>
    <td><?php echo $row["disability"] ?></td>
 
    <td><?php $hobbies = $user->getHobbies($row['user_id']);
 
    if ($hobbies != NULL) {
 
        foreach ($hobbies as $hobby) {
            echo $hobby['hobby'] . ", ";
        }
    }
    ?>
 
 
     </td>
     <td>
      <?php echo $row["description"]; ?>
     </td>
    <td>
      <button type="submit" id="edit"  name="edit" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Edit</button>
      <button type="submit" id="delete"  name="delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> Delete </span></button>
    </td>
  </form>
   </tr>
 
<?php
}
}?>
    </tbody>
  </table>
</div>
 
</body>
</html>