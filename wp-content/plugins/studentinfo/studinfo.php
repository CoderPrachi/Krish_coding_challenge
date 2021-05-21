<?php
	/*
	Plugin Name: Database TestStudent
	Plugin URI: https://studentinfo.com/
	Description: for student database
	
	*/
	
	$path = preg_replace('/wp-content.*$/','',__DIR__);
	require_once($path.'wp-load.php');
	function studinfo(){
		
		if(isset($_POST['submit'])){
			global $wpdb;
			$sname = $_POST['sname'];
			$phoneNumber = $_POST['phnum'];
			$emailId = $_POST['emailid'];
			$s1 = $_POST['sub1'];
			$s2 = $_POST['sub2'];
			$s3 = $_POST['sub3'];
			$s4 = $_POST['sub4'];
			$s5 = $_POST['sub5'];
			$total = $_POST['tmarks'];

			$wpdb->insert('wp_student',array('student_name'=>$sname,'phone_number'=>$phoneNumber,'email_id'=>$emailId,
			'marks_sub1'=>$s1,'marks_sub2'=>$s2,'marks_sub3'=>$s3,'marks_sub4'=>$s4,'marks_sub5'=>$s5,'total_marks'=>$total));			
		}

		
		?>
		
			<form action="" method="post">
				<label for="">Student Name </label> 
				<input type="text" name="sname"/><br/>

				<label for="">Phone Number </label> 
				<input type="text" name="phnum"/><br/>

				<label for="">Email id </label> 
				<input type="text" name="emailid"/><br/>

				<label for="">Subject 1 </label> 
				<input type="text" name="sub1"/><br/>

				<label for="">Subject 2 </label> 
				<input type="text" name="sub2"/><br/>

				<label for="">Subject 3 </label> 
				<input type="text" name="sub3"/><br/>

				<label for="">Subject 4 </label> 
				<input type="text" name="sub4"/><br/>

				<label for="">Subject 5 </label> 
				<input type="text" name="sub5"/><br/>

				<label for="">Total Marks </label> 
				<input type="text" name="tmarks"/><br/>

				<input type="submit" name="submit" value="SUBMIT"/>
			</form>
		<?php

		//echo "<table><tr><td>prachi</td><td>patil</td></tr></table>";
		
	}
	$posts = $wpdb->get_results("SELECT * FROM wp_student");
	print('<div class="info" style="margin:2%;"><table>
		<tr>
		<th>Name</th>
		<th>Phone Num.</th>
		<th>EmailId</th>
		<th>Subject1</th>
		<th>Subject2</th>
		<th>Subject3</th>
		<th>Subject4</th>
		<th>Subject5</th>
		<th>TOtal Marks</th>
		</tr>');
	foreach($posts as $single){
		echo '
	
		<tr>
		<td>',$single->student_name,'</td>
		<td>',$single->phone_number,'</td>
		<td>',$single->email_id,'</td>
		<td>',$single->marks_sub1,'</td>
		<td>',$single->marks_sub2,'</td>
		<td>',$single->marks_sub3,'</td>
		<td>',$single->marks_sub4,'</td>
		<td>',$single->marks_sub5,'</td>
		<td>',$single->total_marks,'</td>
		</tr><br/>
		';
	}
	print('<form action="" method="get"><input type="text" placeholder="Search for..." name="search">
	<input type="submit" value="search" onclick="callSearch()"></form></div></table>');
	
	$searchVal = $_GET['search'];
	
if(isset($_GET['search'])){
	$result = $wpdb->get_results("SELECT * FROM wp_student where `student_name` LIKE '%".$searchVal."%' or `phone_number` LIKE '%".$searchVal."%' or `email_id` LIKE '%".$searchVal."%'");
	
	
	//LIKE '%".$searchVal."%'
	$fileText = "";
	foreach($result as $single){
		$fileText = "
		Name = $fileText$single->student_name
		Mob No = $single->phone_number
		email = $single->email_id
		sub1 = $single->marks_sub1
		sub2 = $single->marks_sub2
		sub3 = $single->marks_sub3
		sub4 = $single->marks_sub4
		sub5 = $single->marks_sub5
		total marks = $single->total_marks" ;
	}
	$myfile = fopen("studentdata.txt", "w");
	fwrite($myfile,$fileText);
	echo $fileText,"<br/>";
	print('<a href="studentdata.txt" download="studentdetailspdf">CLICK TO DOWNLOAD</a>');
}
	add_shortcode('studentinformation','studinfo');

?>

