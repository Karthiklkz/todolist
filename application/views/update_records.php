<!DOCTYPE html>
<html>
  <head>
    <title> Update Form </title>
  </head>
  <body>
    <h2> Update Form </h2>
    <?php 
    foreach ($data as $row){
        $task = $row->task;
    }   
    ?>
<form method="post">
      <label>Enter Task</label>
      <input type="text" name="task" id="task" value="<?php echo $task;?>"> <br>
      <input type="submit" name="update" id="update" value="update">
      </form>
    <?
    ?>
    
     </body>
</html>