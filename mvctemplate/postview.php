<?php
function postview(){
  
  ?>
  <div class="row">
    <div class="col-xs-12 col-md-8">
    
      <ul><?php
        
        
        $postmodel = new postmodel();
        foreach ($postmodel->get() as $post) {
          echo "<li>" . $post['rubrik'] . "</li>";
        }
      ?></ul>
    
    
    </div>



    <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>  
  </div>
  
  <?php
  
}