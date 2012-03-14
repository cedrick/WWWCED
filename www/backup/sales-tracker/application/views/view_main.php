<br><br>
<center>
<div class=view_main>
<?php

	
echo form_open(base_url().'user/call_phone');								
				
				$phone = array(
										'name' => 'phone',
										'id'	 => 'phone',
										'value'	 =>'',
										'size'   => '50'
									);
									
				$campaign = array(		'' => '',
						'DEL' => 'DEL',
						'MIOHOME' => 'MIOHOME',
						'SNBB' => 'SNBB',
						'ACQ_STM' => 'ACQ_STM',
						'BPL' => 'BPL',
						'ARPU' => 'ARPU',
						'ARPU_GRPC' => 'ARPU_GRPC',
						'ARPU_GRPD' => 'ARPU_GRPD',
						'FTTH' => 'FTTH',
						'NEWBORN1' => 'NEWBORN1',
						'NEWBORN2' => 'NEWBORN2',
						'NEWBORN3' => 'NEWBORN3'
						);
				

?>
<br><br>

		<div class = "search">
			<font color = #EA3A41 face = arial>
				Enter Phonenumber: 
			</font>
		
				<?php echo form_input($phone); ?><?php echo form_dropdown($campaign); ?><?php echo form_submit(array('name' => 'submit_name', 'id' => 'submit_id', ), 'Search'); ?>
		</div>
		
<br><br>
<?php echo form_close(); ?>
</div>
<div align = center>
	<font color="#AA0000" face="Arial">
		<?php echo validation_errors(); ?>
	</font> 
</div>
</center>
<br><br>