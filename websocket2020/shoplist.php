

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    
    
    
    <div id="lista">
      
      
      
    </div>
    
    
    
    
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <script type="text/javascript">
      console.log("test");
var conn = new WebSocket('ws://localhost:8080');
conn.onopen = function(e) {
  console.log("Connection established!");
};

conn.onmessage = function(e) {

$("#lista").text(e.data)

};
      
      
      
    </script>
    
  </body>
</html>

