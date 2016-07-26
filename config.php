<?php
/*Configuration Settings*/

define('DB_HOST', 'localhost'); /*Database Server*/
define('DB_NAME', 'WEBADMIN'); /*Database Name*/
define('DB_USER', 'root'); /*Database Username*/
define('DB_PWD',  ''); /*Database Password*/
$siteBrand=  'PlaceHolder_siteBrand';

  /*Prepare Query to pull current settings from SiteConfig*/
  $sql="SELECT ConfigName
              ,ShortTextValue
        FROM SiteConfig";
  /*echo '<br>sql :'.$sql;*/
 
  $link = connectDB();

/*Run the query, if ConfigName matches ‘siteBrand, then set $siteBrand to ShortTextValue returned in from the query*/
  if ($result = mysqli_query($link,$sql)){
      while ($row = mysqli_fetch_array($result))  {
        if ($row[0] == 'siteBrand') { $siteBrand = $row[1];}
     } 
  }
  /*Close database connection*/
	mysqli_close ( $link );
?>

