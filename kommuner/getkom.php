
<?php
// tvätta in data. 
$countyid_clean= filter_input(INPUT_GET, 'countyid', FILTER_SANITIZE_STRING);

echo json_encode($countyid_clean);

// fråga db efter kommnuner med countyid 

// skcka arrayen tillbaka till clienten med json encode eller skicka en färdig select box



/*javascript skall detta ligga i 

$('body').on('change', '#id', function() {
  // Action goes here.
});





*/




?>
