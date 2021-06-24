<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
    <div class="row">
    <div class="col">
      
   <p>
    <?php 
        $from = "marthekod@gmail.com";
        $to = "menendezon@gmail.com";
        $subject = "L'amour de ma vie";
        
        $html = "<table style='margin:auto; width:70%; min-width:500px; font-size:1.1em'>";
        $html .= "<tr><td colspan='2'><img src='https://alphahaiti.com/wp-content/uploads/2021/05/sajes-unlock.png' alt='Logo SajesUnlock' style='display:block; margin-left:auto; margin-right:auto; width:25%; padding:10px'></td></tr>";
        $html .= "<tr style='border-style:dotted; border-color:silver; border-width:2px 0 2px 0' ><td style='width:30%'>&nbsp;</td><td style='width:70%; padding:10px'><p>Hello, User</p><p>New product on sajesunlock store</p></td></tr>";
        $html .= "<tr><td style='width:30%;'><img src='https://images.samsung.com/is/image/samsung/assets/africa_fr/galaxy-a52/pcd/a-category/img_bnn_galaxy_device.png' style='display:block; width:100%;' alt='Portable Samsung'></td><td style='width:70%; padding:10px'><p>Lorem ipsum, dolor sit amet consectetur adipisicing, Lorem ipsum, dolor sit amet consectetur adipisicing.</p><strong>$170 US</strong><p>&nbsp;</p><button style='display:block; width:130px; height:50px; margin-left:auto; margin-right:auto; color:#FFF; background-color:#f26523; border-radius:10px; padding:10px; border:0; font-size:1.25em'>Shop now</button></td></tr>";
        $html .= "<tr style='border-style:dotted; border-color:silver; border-width:2px 0 2px 0' ><td colspan='2' style='padding: 15px; text-align:center'><a href='#'>See all products</a></td></tr>";
        $html .= "<tr><td colspan='2' style='padding: 15px; text-align:center'><a href='#'>Visit our website</a> &#124; <a href='#'>Unsubscribe</a></td></tr>";
        $html .= "<tr><td colspan='2' style='padding: 15px; text-align:center'>&#169;sajesunlock Inc.</td></tr>";
        $html .= "</table>";


        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= "From: $from" . "\r\n";

        mail($to, $subject, $html, $headers);
    ?></p>

    </div>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>