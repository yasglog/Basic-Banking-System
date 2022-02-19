<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TransferMoney</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
  
   
</head>
<body>

<?php
    include 'conn.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>
<div class="container">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">mail</th>
      <th scope="col">Balanece</th>
      <th scope="col">operation</th>
    </tr>
  </thead>
  <tbody>
  <?php 
       while($rows=mysqli_fetch_assoc($result)){
    ?>
    <tr>
      <td class="one"><?php echo $rows['id']?></td>
      <td class="one"><?php echo $rows['name']?></td>
      <td class="one"><?php echo $rows['email']?></td>
      <td class="one"><?php echo $rows['balance']?></td>
      <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color : #A569BD;">Transfer</button></a></td> 
    </tr>
    <?php
            }
        ?>
  </tbody>

</table>


</div>
<footer class="text">
            <p>&copy 2022.<b>Bank of Sparks Foundation</b> . All Right Reserved</p>
</footer>
</body>
</html>