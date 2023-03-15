<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    
<!--popup For Add-->

<div class="container">
    <div class="modal-dialog">
      <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add Student</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="grid text-center" style="--bs-gap: .25rem 1rem;">
      <div class="g-col-6">
         <form action="dashboard.php" method="post" name="form1">
            <table class="m-auto">
                <tr> 
                    <td>NIS</td>
                    <td><input type="text" name="nis" placeholder="212212345"></td>
                </tr>
                <tr> 
                    <td>Name</td>
                    <td><input type="text" name="name" placeholder="Budi"></td>
                </tr>
                <tr> 
                    <td>Age</td>
                    <td><input type="text" name="umur" placeholder="19"></td>
                </tr>
                <tr> 
                    <td>Gender</td>
                    <td><input type="text" name="kelas" placeholder="Man"></td>
                </tr>
                <tr> 
                    <td>Status</td>
                    <td><input type="text" name="kelas" placeholder="Available"></td>
                </tr>
                <tr> 
                    <td>Collected</td>
                    <td><input type="text" name="kelas" placeholder="Rp 5000"></td>
                </tr>
                <tr> 
                    <td>Overall Score</td>
                    <td><input type="text" name="kelas" placeholder="95"></td>
                </tr>
            </table>
         
      </div>
  </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <input type="submit" name="Submit" class="btn btn-primary" value="Tambahkan">
              </form>

                  <?php
 

                    if(isset($_POST['Submit'])) {
                        $nis = $_POST['nis'];
                        $name = $_POST['name'];
                        $age = $_POST['age'];
                        $gender = $_POST['gender'];
                        $status = $_POST['status'];
                        $collected = $_POST['collected'];
                        $os = $_POST['os'];
                        

                        include_once("config.php");
                                

                        $result = mysqli_query($mysqli, "INSERT INTO pplg_db(nis,name,age,gender,status,collected,os) VALUES('$nis','$name','$age','$gender','$status','$collected','$os')");

                        header("Location: dashboard.php");

                    }

                    ?>
            </div>
          </div>
    </div>
</div>
</body>
</html>