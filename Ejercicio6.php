
<form action="insert.php" method="post">
    Value1: <input type="text" name = "field1" /><br/>
    Value2: <input type="text" name = "field2" /><br/>
    Value3: <input type="text" name = "field3" /><br/>
    Value4: <input type="text" name = "field4" /><br/>
    Value5: <input type="text" name = "field5" /><br/>
    <input type="submit" />
</form>
<?php
$username = "your_username";
$password = "your_pass";
$database = "your_db";

$mysqli = new mysqli("localhost", $username, $password, $database);

// Don't forget to properly escape your values before you send them to DB
// to prevent SQL injection attacks.

$field1 = $mysqli->real_escape_string($_POST['field1']);
$field2 = $mysqli->real_escape_string($_POST['field2']);
$field3 = $mysqli->real_escape_string($_POST['field3']);
$field4 = $mysqli->real_escape_string($_POST['field4']);
$field5 = $mysqli->real_escape_string($_POST['field5']);

$query = "INSERT INTO table_name (col1, col2, col3, col4, col5)
            VALUES ('{$field1}','{$field2}','{$field3}','{$field4}','{$field5}')";

$mysqli->query($query);
$mysqli->close();
SELECT * FROM table_name;
<?php
$query = $mysqli->query("SELECT * FROM table_name");
$query = "SELECT * FROM table_name";

if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["col1"];
        $field2name = $row["col2"];
        $field3name = $row["col3"];
        $field4name = $row["col4"];
        $field5name = $row["col5"];
    }

    /* free result set */
    $result->free();
}
<?php
$username = "username";
$password = "password";
$database = "your_database";
$mysqli = new mysqli("localhost", $username, $password, $database);

$query = "SELECT * FROM table_name";
echo "<b> <center>Database Output</center> </b> <br> <br>";

if ($result = $mysqli->query($query)) {

    while ($row = $result->fetch_assoc()) {
        $field1name = $row["col1"];
        $field2name = $row["col2"];
        $field3name = $row["col3"];
        $field4name = $row["col4"];
        $field5name = $row["col5"];

        echo '<b>'.$field1name.$field2name.'</b><br />';
        echo $field5name.'<br />';
        echo $field5name.'<br />';
        echo $field5name;
    }

/*freeresultset*/
$result->free();
}
<?php echo $variablename; ?>
<html>
<body>
<?php 
$username = "username"; 
$password = "password"; 
$database = "your_database"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM table_name";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Value1</font> </td> 
          <td> <font face="Arial">Value2</font> </td> 
          <td> <font face="Arial">Value3</font> </td> 
          <td> <font face="Arial">Value4</font> </td> 
          <td> <font face="Arial">Value5</font> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["col1"];
        $field2name = $row["col2"];
        $field3name = $row["col3"];
        $field4name = $row["col4"];
        $field5name = $row["col5"]; 

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>