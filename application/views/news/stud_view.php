<html>
<head> <title> <h1> student deatils </h1> </title>
</head>
<body bgcolor="blue">

<?php
    foreach($info as $details)
    {
    	  echo $details['title'].'<br />';
    	  echo $details['date'].'<br />';
    }
 ?>
 </body>
 </html>

