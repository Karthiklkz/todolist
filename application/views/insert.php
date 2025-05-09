<!DOCTYPE html>
<html>
  <head>
    <title> Task Form </title>
  </head>
  <body>
    <h2> Task Form </h2>
    <form method="post" action="<?=base_url()?>/tasks/savedata">
      <label>Enter Task</label>
      <input type="text" name="task" id="task" placeholder="Enter Task"> <br>
      <input type="submit" name="save" id="save" value="save">
      </form>
     </body>
</html>