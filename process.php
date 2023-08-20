
<html>
      <head>
        <script type="text/javascript" language="JavaScript">
                  function clickedButton()
            {

                window.location = 'http://localhost:8012/food_br%20_v2/food.php'

            }
             </script>
      </head>
<?php
	$name_ = $_POST['name_'];
	$sand1 = $_POST['sand1'];
	$sand2 = $_POST['sand2'];
	$sand3 = $_POST['sand3'];
	$sand4 = $_POST['sand4'];
	$sand5 = $_POST['sand5'];
	$sand6 = $_POST['sand6'];
	$sand7 = $_POST['sand7'];
	$sand8 = $_POST['sand8'];
	$count_food1 = $_POST['count_food1'];
	$count_food2 = $_POST['count_food2'];
	$count_food3 = $_POST['count_food3'];
	$count_food4 = $_POST['count_food4'];
	$count_food5 = $_POST['count_food5'];
	$count_food6 = $_POST['count_food6'];
	$count_food7 = $_POST['count_food7'];
	$count_food8 = $_POST['count_food8'];

	
	
	
	
	
	
	

	// Database connection
	$conn = new mysqli('localhost','root','','registration');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(name_,sand1,count_food1,sand2,count_food2,sand3,count_food3,sand4,count_food4,sand5,count_food5,sand6,count_food6,sand7,count_food7,sand8,count_food8) values(?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?,?, ?, ?, ?,?)");
		$stmt->bind_param("ssisisisisisisisi",$name_, $sand1,$count_food1,$sand2,$count_food2,$sand3,$count_food3,$sand4,$count_food4,$sand5,$count_food5,$sand6,$count_food6,$sand7,$count_food7,$sand8,$count_food8);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
	
		$stmt->close();
		$conn->close();
	}
	
	
	
	
	?>




	
  <form name="login_form" method="post">
            ..................
            <input type="button" value="back" onClick="clickedButton()"/>
      </form>
 </html>
