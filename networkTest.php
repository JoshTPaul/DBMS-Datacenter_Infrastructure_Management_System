
<!DOCTYPE html>
<html>

 <head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="/argon-dashboard-master/assets/img/brand/favicon.png" rel="icon" type="image/png">
<link href="/argon-dashboard-master/assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet">
<link href="/argon-dashboard-master/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
<link type="text/css" href="/argon-dashboard-master/assets/css/argon-dashboard.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="netStyle.css">

<script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
              crossorigin="anonymous">
    </script>
<head>

<body>

<img src="images/bg3.png" id="bg">
<div class="container" id="mainmenu">
    <div class="introDiv">
        <p>Network</p>
            <a href="home.php">
            <button class="btn btn-primary">Back</button>
            </a>
    </div>



<div class="testBG">

<div id="lan" class="card sm-1">
  <img class="card-img-top" src="n1.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">LAN</h5>
    <p class="card-text">LAN or Local Area Network connects network devices in such a way that personal computer and workstations can share data, tools and programs</p>
  </div>
</div>

<div id="wan" class="card sm-1">
  <img class="card-img-top" src="n2.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">WAN</h5>
    <p class="card-text" >WAN or Wide Area Network is a telecommunications network that extends over a large geographical area for the primary purpose of computer networking. Wide area networks are often established with leased telecommunication circuits</p>
  </div>
</div>

<div id="man" class="card sm-1">
  <img class="card-img-top" src="n3.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">MAN</h5>
    <p class="card-text"> MAN or Metropolitan Area Network is a network that interconnects users with computer resources in a geographic area or region larger than that covered by even a large local area network (LAN) but smaller than the area covered by a wide area network (WAN).</p>
  </div>
</div>

</div>

<script>
    $(document).ready(function() {
        $(".container").toggle();
    $("#lan").click(function(){
         window.location.href="network1Test.php";
        });
        $("#wan").click(function(){
         window.location.href="network2Test.php";
        });
        $("#man").click(function(){
         window.location.href="network3Test.php";
        });
      
    });
    </script>

<script src="../assets/js/plugins/jquery/dist/jquery.min.js"></script>
<script src="../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/argon-dashboard.min.js"></script>


</body>
</html>