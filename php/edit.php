<?php 
include "conf.php";

    $id = $_GET['id'];

    $sql = "SELECT * FROM catstore WHERE Id = $id";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $pname = $row["pname"];
        $pprice = $row["pprice"];
        $type = $row["type"];
        $cap = $row["cap"];
        $rate = $row["rate"];
	}

if(isset($_POST['submit'])) {

    $new_pname = $_POST['pname'];
    $new_pprice = $_POST['pprice'];
    $new_ptype = $_POST['type'];
    $new_cap = $_POST['cap'];
    $new_type = $_POST['rate'];

    $update_sql = "UPDATE catstore SET pname = '$new_pname', pprice = '$new_pprice', ptype = '$new_ptype', cap = '$new_cap', rate = '$new_rate' WHERE Id = $id";
	
    if(mysqli_query($conn, $update_sql)) {
		header("Location: read.php");

    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<html lang="en">
<head></head>
<body>
    <h2>Edit Record</h2>
    <form method="post" action="">
        First Name:<input type="text" id="pname" name="pname" value="<?php echo $pname; ?>"><br>
        Last Name:<input type="text" id="pprice" name="pprice" value="<?php echo $pprice; ?>"><br>
        Mobile Number:<input type="text" id="type" name="type" value="<?php echo $type; ?>"><br>
        Birthday: <input type="text" id="cap" name="cap" value="<?php echo $cap; ?>"><br><br> 
        Birthday: <input type="text" id="rate" name="rate" value="<?php echo $rate; ?>"><br><br>     
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>
