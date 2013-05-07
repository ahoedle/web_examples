<!DOCTYPE html>
<html>
	
	<head>
		<title> Formulareingaben validieren </title>
		<meta charset="UTF-8"/>
		<style type="text/css">
			.fehler { color: red; font-weight: bold; }
		</style>
	</head>
	
	<body>

		<?php
			$themen = array("...", "HTML", "CSS", "JavaScript", "PHP");
		
			if (isset($_POST["gesendet"])) {
				formverarbeiten();
			} else {
				formausgeben();
			}
			
			function formausgeben($vorname="", $nachname="", $email="", $thema="", $fehler="") {
				global $themen;
				
				if (!empty($fehler)) {
					// class='fehler' verweist auf die-CSS Formatierung
					echo("<p class='fehler'>$fehler</p>");
				}
		?>
		
				<form method="POST" action="<?php echo(htmlspecialchars($_SERVER["PHP_SELF"])); ?>" >
					Vorname: <br/>
					<input type="text" name="vorname" size="20" maxlength="30" value="<?php echo(htmlspecialchars($vorname)); ?>" />
			
					<br/>
					Nachname*: <br/>
					<input type="text" name="nachname" size="20" maxlength="30" value="<?php echo(htmlspecialchars($nachname)); ?>" />
					
					<br />
					E-Mail-Adresse: <br/>
					<input type="email" name="email" size="50" maxlength="60" value="<?php echo(htmlspecialchars($email)); ?>" />

					<br/>
					Themenwunsch*: <br/>
					<select name="thema">
						<?php 
							foreach ($themen as $el) {
								if ($el == $thema) {
									// damit das bereits ausgewählte Thema wieder ausgewählt wird
									$gew = " selected='selected' ";
								} else {
									$gew = "";
								}
								/* 
									<option value="HTML" selected="selected" >
										HTML
									</option> 
								*/
								echo("<option value='$el' $gew> 
										$el 
									  </option>\n");
							}
						?>
					</select>
					
					<br/>
					<br/>
					<input type="submit" name="gesendet" />
				</form>
		<?php
			}
				
			function formverarbeiten() {
				global $themen;
				
				if (isset($_POST["nachname"]) && is_string($_POST["nachname"])) {
					$nachname = trim($_POST["nachname"]);
				} else {
					$nachname = "";
				}
				
				if (isset($_POST["vorname"]) && is_string($_POST["vorname"])) {
					$vorname = trim($_POST["vorname"]);
				} else {
					$vorname = "";
				}
				
				if (isset($_POST["email"]) && is_string($_POST["email"])) {
					$email = trim($_POST["email"]);
				} else {
					$email = "";
				}
				
				if (isset($_POST["thema"]) && is_string($_POST["thema"])) {
					$thema = trim($_POST["thema"]);
				} else {
					$thema = "";
				}
					
				$fehler = "";
				
				if (empty($nachname)) {
					$fehler = "Bitte geben Sie Ihren Nachnamen an. ";
				}
				
				if (!in_array($thema, $themen) || $thema == "...") {
					$fehler .= "Bitte wählen Sie ein Thema.";
				}
				
				if (strlen($fehler) > 0) {
					formausgeben($vorname, $nachname, $email, $thema, $fehler);
				} else {
					echo("Vielen Dank für Ihre Eingaben");
				}
			}
		?>
	
	
				
		
	</body>

</html>