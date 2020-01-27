
<?php
class postmodel extends DB {

  function get(){
    return $this->select("SELECT * FROM `posts` where post_pk= :num", array(':num' => 2));
  }
}
?>


