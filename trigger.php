<?php

  if(@$_POST['go']) {
    $startfile = fopen("play.txt", "w");
    fwrite($startfile, microtime(true) * 1000);
    fclose($startfile);
  }

?>

<!DOCTYPE html>
<html>
<head>
  <title>Go Button</title>
</head>
<body>

  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

  <form method="post">
    <input type="submit" name="go" onClick="go()" value="Play Video" />
  </form>

</body>
</html>