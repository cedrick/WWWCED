<?php

	echo form_open(base_url() . 'main/insert_data');
	$fname = array(
										'name' => 'fname',
										'id'	 => 'fname',
										'value'	 => '',
									);
									
	$lname = array(
										'name' => 'lname',
										'id'	 => 'lname',
										'value'	 => ''
									);
									
									
	 $mi = array(
										 'name' => 'mi',
										 'id'	 => 'mi',
										 'value'	 => '',
	 									 'maxlength'   => '2',
	 									 'style'       => 'width:20%',
										);
										
	$gender = array(
                  	''  => '',
					'Male'  => 'Male',
                  	'Female'    => 'Female'
                );
                
                
     $month = array(
                  	''  => '',
					'January'  => 'January',
                  	'February'    => 'February',
     				'March'  => 'March',
                  	'April'    => 'April',
     				'May'  => 'May',
                  	'June'    => 'June',
     				'July'  => 'July',
                  	'August'    => 'August',
     				'September'  => 'September',
                  	'October'    => 'October',
     				'November'  => 'November',
                  	'December'    => 'December'
     
                );
                
      $day = array(
                  	''  => '',
					'1'  => '1',
                  	'2'    => '2',
      				'3'  => '3',
                  	'4'    => '4',
      				'5'  => '5',
                  	'6'    => '6',
      				'7'  => '7',
                  	'8'    => '8',
      				'9'  => '9',
                  	'10'    => '10',
      				'11'  => '11',
                  	'12'    => '12',
     				'13'  => '13',
                  	'14'    => '14',
      				'15'  => '15',
                  	'16'    => '16',
      				'17'  => '17',
                  	'18'    => '18',
      				'19'  => '19',
                  	'20'    => '20',
      				'21'  => '21',
                  	'22'    => '22',
      				'23'  => '23',
                  	'24'    => '24',
      				'25'  => '25',
                  	'26'    => '26',
      				'27'  => '27',
                  	'28'    => '28',
      				'29'  => '29',
                  	'30'    => '30',
      				'31'    => '31',
                );
                
                
   $year = array(
											'name' => 'year',
											'id'	 => 'year',
											'value'	 => '',
		 									'maxlength'   => '4',
		 									'style'       => 'width:15%',
										);  
                
                
    $area_code = array(
											'name' => 'area_code',
											'id'	 => 'area_code',
											'value'	 => '',
		 									'maxlength'   => '4',
		 									'style'       => 'width:15%',
										);  
										
 	$number = array(
											'name' => 'number',
											'id'	 => 'number',
											'value'	 => '',
		 									'maxlength'   => '7',
		 									'style'       => 'width:30%',
										);  
										
										
	 $guardian= array(
											'name' => 'guardian',
											'id'	 => 'guardian',
											'value'	 => ''
										);
										
									
	 $address = array(
											'name' => 'address',
											'id'	 => 'address',
											'value'	 => ''
										);
										
	 $remarks = array(
											'name' => 'remarks',
											'id'	 => 'remarks',
											'value'	 => ''
										);
									

?>
<table align="center">
  <tr>
      <td>
       First Name:
      </td>
      <td>
         <?php echo form_input($fname); ?>
      </td>
  </tr>
  <tr>
    <td>
      MI:
    </td>
      <td>
         <?php echo form_input($mi); ?>
      </td>
  </tr>
   <tr>
      <td>
        Last Name:
      </td>
      <td>
         <?php echo form_input($lname); ?>   
      </td>
  </tr>
  <tr>
  	<td>
    	 Gender:
    </td>
    <td>
      	<?php echo form_dropdown('gender',$gender); ?> 
    </td>
  </tr>
   <tr>
  	<td>
    	 Birth Day:
    </td>
    <td>
      	<?php echo form_dropdown('month',$month); ?> <?php echo form_dropdown('day',$day); ?>  <?php echo form_input($year); ?>   
    </td>
  </tr>
  <tr>
  	<td>
    	 Contact#:
    </td>
    <td>
      	<?php echo form_input($area_code); ?> <?php echo form_input($number); ?>
    </td>
  </tr>
  <tr>
  	<td>
    	 Guardian:
    </td>
    <td>
      	<?php echo form_input($guardian); ?>
    </td>
  </tr>
   <tr>
  	<td>
    	 Address:
    </td>
    <td>
      	<?php echo form_textarea($address); ?> 
    </td>
  </tr>
  <tr>
   <tr>
  	<td>
    	Remarks:
    </td>
    <td>
      	<?php echo form_textarea($remarks); ?> 
    </td>
  </tr>
  <tr>
  	<td>
  		
  	</td>
    <td>  
        <?php echo form_submit(array('name' => 'submit_name', 'id' => 'submit_id', ), 'Register'); ?>
     </td>
   </tr>
</table>
<br />
<div align="center"> 
 <font color="#AA0000" face="Arial">
  <?php echo validation_errors(); ?>
  <?php echo $data; ?>
 </font>    
</div>
<?php echo form_close(); ?>
<br /><br />