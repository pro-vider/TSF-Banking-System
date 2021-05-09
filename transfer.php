<?php
include 'connection.php';
$select1="SELECT * from Users ";
$select2="SELECT * from Users ";
$query1=$connection->query($select1);
$query2=$connection->query($select2);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Transfer</title>
    <!-- Custom CSS--->
    <link rel="Stylesheet" href="index.css">
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  </head>
    <body> 
        <header class="headert">
            <h1>Money Transfer</h1>
        </header> 
        <div class="col-md-9 mx-auto mt-5">
            <form action="transact.php" method="POST">
            <div class="form-group mt-4">
                <label for="exampleFormControlSelect1"><strong>Sender Name:</strong></label>
                <select name="sender" class="form-control" id="exampleFormControlSelect1" required>
                  <?php
                  while($result=mysqli_fetch_array($query1))
                  {
                 ?>
                  <option value="<?php echo $result['Name']?>"><?php echo $result['Name']?></option>
                   <?php
              }
              ?>
                </select>
              </div>
              <div class="form-group mt-5">
                <label for="exampleFormControlSelect1"><strong>Reciever Name:</strong></label>
                <select name="receiver" class="form-control" id="exampleFormControlSelect1" required>
                <?php
                  while($res=mysqli_fetch_array($query2))
                  {
                 ?>
                  <option value="<?php echo $res['Name']?>"><?php echo $res['Name']?></option>
                   <?php
              }
              ?>
                 
                </select>
              </div>
              <div class="form-group mt-5">
                <label for="formGroupExampleInput"><strong>Amount:</strong></label>
                <input name="amount" type="number" class="form-control" id="formGroupExampleInput" placeholder="Amount" required>
              </div>
              <div class="mt-5 d-flex justify-content-center">
                <button type="submit" class="buttona">Transact</button>
              </div>
            </form>  
            <div class="home">
            <a href="index.html"><button class="buttona">Home</button></a>
          </div> 
        </div>


      <!--Proper JS-->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
      <!--Bootstrap JS-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    </body> 
</html>     