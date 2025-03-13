<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" 
          content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="footer.html">
    <link rel="stylesheet" 
          href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
    </script>
     <link rel="stylesheet" 
     href="styles.css">
</head>

<body>
  <nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">

    <!--logo in navbar -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="data:image/png;base64,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" width="30" height="30" alt="">
  </a>
</nav>
</div>
     <a class="div" href="regi.php"><h4>Pention Form</h4> </a>
     
    <ul class="div">
      <li><a href="icard registration.php"><h4>I-card registration</h4></a></li>
      <li><a href="print.php"><h4>print</h4></a></li>
      <li><a href="contact.php"><h4>contact us</h4></a></li>
      <li><a href="help.php"><h4>Help</h4></a></li>
    </ul>
  </div>
</nav>
</body>
</html>



