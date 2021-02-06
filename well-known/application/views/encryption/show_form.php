<!DOCTYPE html>
<html>
<head>
	<title>Encryption In Codeigniter</title>
</head>
<body>
		<div id="main">
			<div class="show_form">
				<h2>Encryption in CodeIgniter</h2>
				<hr>
				<?php
					echo form_open('Encryption/key_encoder');
					echo "<div class='error_msg'>";
					echo  validation_errors();
					echo "</div>";
					echo form_label('Enter your Message');
					echo "<br>";
					$data = array(
						'name' => 'key',
						'placeholder' => 'Please Enter a Message'
					);
					echo form_input($data);
					echo "<br>"."<br>";
					echo form_submit('submit','Encode');	
					echo form_close();

					if(isset($decrypt_value) && $decrypt_value != NULL ){
						echo form_fieldset('Decrypted Message',"class= 'result_decode'");
						echo "<b>".$decrypt_value."</b>";
						echo form_fieldset_close();

					}

				?>
			</div>
		</div>
			<?php 
						if(isset($encrypt_value) && $encrypt_value != NULL ){
						echo form_fieldset('Encrypted Message',"class= 'result_decode'");
						echo "<b>".$encrypt_value."</b>";
						echo form_fieldset_close();
						echo "<div class='decode_form'>";
						echo form_open('Encryption/key_decoder');
						echo form_label('Decode Encrypted Message');
						$data = array(
							'name' => 'encrypt_key',
							'value'=> $encrypt_value
						);
						echo form_input($data);
						echo"<br>"."<br>"; 
						echo form_submit('submit','Decode');
						echo form_close();
						echo "</div>";
					}

			?>
</body>
</html>