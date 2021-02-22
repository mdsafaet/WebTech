<?php
	    $name="";
        $err_name="";
        $uname="";
        $err_uname="";
        $pass="";
        $err_pass="";
       
        $cpass="";
        $err_cpass="";
		
		$code="";
	    $err_code="";
		 
	    $num="";
	    $err_num="";

        $mail="";
        $err_mail="";
        


        $bdate="";
        $err_bdate="";

        $bmonth="";
        $err_bmonth="";

        $byear="";
        $err_byear="";

        $gender="";
        $err_gender="";
       
        $hear="";
        $err_hear="";
        
        $bio="";
        $err_bio="";
	
		
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["name"])){
                $err_name="Name required";
            }
            else if(strlen($_POST["name"]) < 6){
                $err_name="Name must be more than 6 characters long";
            }

            else{   
                $name=htmlspecialchars($_POST["name"]);

            }

            if(empty($_POST["uname"])){
                $err_uname="User name required";
            }
            else if(strlen($_POST["uname"]) < 6){
                $err_uname="Username must be more than 6 characters long";
            }
            else if(strpos($_POST["uname"]," ")){
                $err_uname="Username should not contain whitespace";
            }

            else{   
                $uname=$_POST["uname"];
			}
			if (empty($_POST["pass"]))
			{
				$err_pass="**Password Required";
			}
			 elseif(strpos($_POST["pass"],":"))
			{
				$err_pass="**Password should not contain ':'";
			}
			else
			{
				$pass=$_POST["pass"];
			}
			 if(!isset($_POST["hear"])){
                $err_hear="This must be selected";
            }
            else{
                $hear=$_POST["hear"];
            }


            if(empty($_POST["tarea"])){
                $err_bio="Bio should not be empty";
            }
            else{
                $bio=htmlspecialchars($_POST["tarea"]);
            }
			
			
		
		
		}
?>






<html>
	<head></head>
	<body>
		<center>
		<form action="" method="post">
		<fieldset>
		<legend align="center">Club Member Registration</legend>
			<table>
				   <tr>
					       <td><span >Name</span></td>
					       <td><input type="text" name="name" value="<?php echo $name;?>"> </td>
						   <td><span><?php echo $err_name;?></span></td>
				     </tr>
				
				   <tr>
					     <td><span >Username</span></td>
					     <td><input type="text" name="uname" value="<?php echo $uname;?>"></td>
						 <td><span><?php echo $err_uname;?></span></td>
				     </tr>
				<tr>
					<td><span>Password</span></td>
					<td><input type="password" name="pass" value="<?php echo $pass;?>"></td>
					<td><span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span>Confirm Password</span></td>
					<td><input type="password" name="cpass" value="<?php echo $cpass;?>"></td>
					<td><span><?php echo $err_cpass;?></span></td>
				</tr>
				<tr>
					<td><span>Email</span></td>
					<td><input type="text" name="email" value="<?php echo $email;?>"></td>
					<td><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td><span>Phone</span></td>
					<td><input type="text" name="code" value="<?php echo $code;?>" placeholder="Code" size="4">-<input type="text" name="num" value="<?php echo $num;?>" placeholder = "Number" size="10"></td>
					<td><span><?php echo $err_code;?></span><span><?php echo $err_num;?></span></td>
				</tr>
				<tr>
					<td><span>Address</span></td>
					<td><input type="text" name="sa" placeholder="Street Address"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="text" name="city" placeholder = "City" size="6">-<input type="text" name="state" placeholder = "State" size="8"></td>
				</tr>
				<tr>
					<td><td>
					<input type="text" name="Pocode" placeholder = "Postal/Zip Code">
				</tr>
				
				<tr>
				<td><span>Birth Date</span></td>
				
				<td>
				<select name="day">
					<option disabled selected>Day</option>
					<?php
						for($i=1;$i<=31;$i++)
						{
							echo "<option>$i</option>";
						}
					?>
					</select>
					<select name="month">
					<option disabled selected>Month</option>
					<?php
						$mon= array("January","February","March","April","May","June","July","August","September","October","November","December");
						for($j=0;$j<count($mon);$j++)
						{
							echo "<option>$mon[$j]</option>";
						}
					?>
				</select>
				<select name="year">
					<option disabled selected>Year</option>
					<?php
						for($k=1971;$k<=2040;$k++)
						{
							echo "<option>$k</option>";
						}
					?>
				</select>
				</td>
				</tr>
                   <tr>
                       <td><span>Gender:</span></td>
                        <td><input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="male">Female
                            <span><?php echo $err_gender;?></span></td>
                    </tr>	
					
				     <tr>
                        <td><span>Where did you hear about us:</span></td>
                        <td> <input type="checkbox"value="A friend of colleague" name="hear[]"> A friend of colleague </br>
                        <input type="checkbox" value="Google" name="hear[]">Google </br>
                        <input type="checkbox" value="Blogpost" name="hear[]">Blogpost </br>
                        <input type="checkbox" value="News Article" name="hear[]">News Article </br> 
                        <span><?php echo $err_hear;?></span></td>
                    </tr>
				
				
				<tr>
                        <td><span>Bio:</span></td>
                        <td><textarea name="tarea"></textarea><br>
                        <input type="submit" value="Register" >
                        <span><?php echo $err_bio;?></span></td>
						
						</tr>
			</table>
		</form>
		</center>
	</body>
</html>