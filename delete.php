<html>
<head>
    <script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
</head>
<style >
.b1{
background-color:Saffron;
}
</style>
<body class ="b1">
<form align="center" method="post">
<br>
<br>
<label>Id:</label>
<input type="text" class="form-control" name="id" >
<br><br>
<input type="hidden" name="option" value="delete">
<button name="delete">Delete</button>
<?php
      if(isset($_POST['delete']))
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
        $id=$_POST['id'];        
        $query="delete from data where id='$id'";
        $run_query=mysqli_query($conn,$query);
        
        if($run_query)
        {
            echo "Record Deleted";
        }
        else
        {
            echo "<script> alert('data not deleted')</script>";
        }
        }
      ?>


       </form>
</body>
</html>