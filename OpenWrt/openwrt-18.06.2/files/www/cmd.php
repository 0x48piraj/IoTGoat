<html>
  <body>
    <h1>OS Command Injection Interface</h1>

<?php
if (isset($_REQUEST['cmd'])) {
  $cmd = $_REQUEST['cmd'];

  if (!is_string($cmd)) {
    echo 'Invaild Input.<br/><br/>';
  }
  else {
    echo 'Attempting to run command:<br/>';
    if ($cmd !== NULL) {
      system($cmd);
    } else {
      echo 'Invalid input';
    }
    echo '<br/><br/>';
  }
}
?>
    <form>
      Enter command :
      <input name="cmd" />
    </form>
  </body>
</html>
