
<?php

$server="localhost";
$user="root";
$pass="";
$dbname="datacenter";

$db=mysqli_connect($server,$user,$pass,$dbname) or die('Error');

$query="select * from ups_";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);

?>


<!DOCTYPE html>
<html>

 <head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="/argon-dashboard-master/assets/img/brand/favicon.png" rel="icon" type="image/png">
<link href="/argon-dashboard-master/assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet">
<link href="/argon-dashboard-master/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
<link type="text/css" href="/argon-dashboard-master/assets/css/argon-dashboard.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="mystyle.css">


<head>

<body>

<img src="images/bg3.png" id="bg">



<div class="container" id="mainmenu">
    <div class="introDiv">
        <p>Power</p>
            <a href="home.php">
            <button class="btn btn-primary">Back</button>
            </a>
    </div>

<div class="BGtest">
<div class="table-responsive">
    <div>
    <table class="table align-items-center">
        <thead class="thead-light">
            <tr>
                <th scope="col">
                    UPS Number
                </th>
                <th scope="col">
                   Output Wattage(kW)
                </th>
                <th scope="col">
                    Output Voltage(V)
                </th>
                <th scope="col">Backup Period(Min)</th>
                <th scope="col">Lifespan(Yrs)</th>
                <th scope="col"> Efficiency(%)</th>
            </tr>
        </thead>
        <tbody class="list">
            
            
  <?php
while($row = mysqli_fetch_array($result)){   
    echo "<tr>";             
    echo "<th scope=\"row\" class=\"name\">";
      echo         "     <div class=\"media align-items-center\">";
        echo         "       <div class=\"media-body\">";
 
    

                      echo     " <span class=\"mb-0 text-sm\">".$row["ups_id"]."</span>";
                   echo    "</div>";
          echo        "</div>";  
       echo        "</th>";
       echo        " <td class=\"budget\">";
      echo              $row["op_wattage"];
     echo          " </td>";
     echo        " <td class=\"budget\">";
      echo              $row["op_voltage"];
     echo          " </td>";
     
    echo          "  <td class=\"completion\">";
     echo            "   <div class=\"d-flex align-items-center\">";
       echo              "   <span class=\"mr-2\">".$row["backup_time"]."</span>";
       echo            " </div>";
       echo        " </td>";
       echo        " <td class=\"budget\">";
       echo              $row["lifespan"];
      echo          " </td>";
      echo        " <td class=\"budget\">";
      echo              $row["efficiency"];
     echo          " </td>";
       
      
          echo "</tr>";
}
            ?>
             </tbody>
         </table>
     </div>
  </div>

</div>



  <script>
    $(document).ready( function() {
        $(".container").toggle();
    });
</script>

<script src="../assets/js/plugins/jquery/dist/jquery.min.js"></script>
<script src="../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/argon-dashboard.min.js"></script>



<script src="/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>


</body>
</html>