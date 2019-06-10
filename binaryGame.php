<!DOCTYPE html>
<html>
  <head>
    <title>Final Project</title>
  </head>


  <body>

    <h1>Final Project</h1>
    <p>Demo of our final project</p>

    <?php
       // define variables and set to empty values
       $arg1 = $arg2 = $output = $retc = "";
	$i = rand(1,64);

	echo "Write the number ";
        echo $i;
        echo  " in Binary, always use 8 digits";

?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Arg1: <input type="text" name="arg1"><br>
      Arg2: <input type="text" name="arg2" value="<?php echo $i; ?>"><br>
      <br>
      <input type="submit" value="Go!">
    </form>
<?php
while ($i == $j)
{
}

       if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $arg1 = test_input($_POST["arg1"]);
         $arg2 = test_input($_POST["arg2"]);
         exec("/usr/lib/cgi-bin/sp1a/correctCheck " . $arg1 . " " . $arg2 , $output, $retc);
       }

       function test_input($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
       }


    ?>



    <?php
       // only display if return code is numeric - i.e. exec has been called

         echo "<h2>Your Input:</h2>";
         echo $arg1;
         echo "<br>";
       
         echo "<h2>Program Output (an array):</h2>";
         foreach ($output as $line) {
           echo $line;
           echo "<br>";
       }
         echo "<h2>Program Return Code:</h2>";
         echo $retc;
	echo $arg2;
       
    ?>
    
  </body>
</html>
