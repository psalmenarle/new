<?php


 $domOBJ = new DOMDocument();
 $domOBJ->load("https://rarbg.to/rss.php");  
 
 $content = $domOBJ->getElementsByTagName("item");
 
 ?>
  <h1>MOVIES & TV SHOWS</h1>

    <?php
 foreach( $content as $data )
 { 


   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
   $guid = $data->getElementsByTagName("guid")->item(0)->nodeValue;
   $pubDate = $data->getElementsByTagName("pubDate")->item(0)->nodeValue;
   echo "
   <ul>
            <h2>BTS members</h2>
              <ul>
                  <li> $title </li>
                  <li> $link </li>
                  <li> $guid </li>
                  <li>$pubDate</li>
              </ul>
    </ul>
            ";
 }
?>
