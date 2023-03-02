<style>
  .box1 {
    display: inline-block;
    margin: 0;
    padding: 10px;
    border: 1px solid black;
    background-color: red;
  }

  .box2 {
    background-color: red;
  }
</style>
<?php
  $n = 10; // jumlah baris
  for ($i = $n; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) { 
      echo '<div class="box1"';
      if ($j !== $i) {
        echo ' red';
      }
      echo '>'.$j.'</div>';
    }
    echo '<br>';
  }
?>