<html>
<head>
    <script language="JavaScript" type="text/javascript">
function checkUpdate(){
    return confirm('Are you sure?');
}
</script>
</head>
<style >
.b1{
background-color:white ;
}
</style>
<body class ="b1">
<form align="center" method="post">
<br>
<br>
<label>Select Name:</label>
<input type="text" name="name">
<br><br>
<label>Select Status:</label>
<input type="text" name="status">

<input type="hidden" name="option" value="delete" >
<br><br>

<button name="update" >Update</button>
<?php
      if(isset($_POST['update']))
        {
        $server = "localhost";
        $user = "root";
        $database="schema";
        // Create connection
        $conn =mysqli_connect($server, $user, "", $database);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $name=$_POST['name'];
        $status=$_POST['status'];        
        $query="UPDATE data SET  status='$status' where name='$name'";
        $run_query=mysqli_query($conn,$query);
        if($run_query)
        {
            echo "<script>alert('Record Updated Successfully')</script>";
        }
        else
        {
            echo "<script> alert('Invalid Record')</script>";
        }
        }
      ?>
       </form>
</body>
</html>