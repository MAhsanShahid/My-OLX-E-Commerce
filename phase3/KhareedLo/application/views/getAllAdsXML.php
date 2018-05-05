
<?php

header('content-type:text/xml');
echo "<allAds>";

 foreach($val->result() as $row)
 {
 	
 	echo "<Title>";
    echo $row->Title;
    echo "</Title>";

    echo "<Category>";
    echo $row->Category;
    echo "</Category>";

    echo "<Price>";
    echo $row->Price;
    echo "</Price>";

    echo "<Location>";
    echo $row->Location;
    echo "</Location>";

    echo "<PhoneNo>";
    echo  $row->PhoneNo;
    echo "</PhoneNo>";


    echo "<email>";
    echo  $row->email;
    echo "</email>";

 }

echo "</allAds>";


?>