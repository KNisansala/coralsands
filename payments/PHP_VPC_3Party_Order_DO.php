	<?php
	include_once(dirname(__FILE__) . '/../class/Invoices.php');
	include_once(dirname(__FILE__) . '/../class/Booking.php');
	include_once(dirname(__FILE__) . '/../class/Helper.php');
	include_once(dirname(__FILE__) . '/../class/DB.php');
	session_start();
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	// $actual_link = "https://coralsandshotel.com/payments/PHP_VPC_3Party_Order_DO.php?type=invoice";

	// if ($_SERVER['SERVER_NAME'] == 'localhost') {
	if ($_SERVER['SERVER_NAME'] == 'coralsandshotel.com') {
		if ($actual_link == 'https://coralsandshotel.com/payments/PHP_VPC_3Party_Order_DO.php?type=invoice' || $actual_link == 'https://coralsandshotel.com/payments/PHP_VPC_3Party_Order_DO.php?type=booking') {
			if ($_SESSION['NEW_CAPTCHA'] == $_SESSION['CAPTCHACODE']) {
				$type = $_GET['type'];
				if ($type == 'invoice') {
					$invoice = INVOICES::getAttemptsByInvoice($_POST['vpc_OrderInfo']);
				} elseif ($type == 'booking') {
					$invoice = Booking::getAttemptsByBooking($_POST['vpc_OrderInfo']);
				}

				if ($invoice['attempts'] != '' && $invoice['attempts'] != NULL && $invoice['attempts'] < 3 && $invoice['status'] == 0 && $invoice['id'] == $_POST['vpc_OrderInfo']) {
					$res = HELPER::addFormSubmission($_POST['vpc_OrderInfo'], $type, json_encode($_POST), $actual_link);
					$attempt_count = $invoice['attempts'] + 1;
					if ($type == 'invoice') {
						$res1 = INVOICES::updateAttempts($attempt_count, $_POST['vpc_OrderInfo']);
					} elseif ($type == 'booking') {
						$res1 = Booking::updateAttempts($attempt_count, $_POST['vpc_OrderInfo']);
					}

					include('VPCPaymentConnection.php');
					$conn = new VPCPaymentConnection();
					// $againLink = '';
					// This is secret for encoding the SHA256 hash
					// This secret will vary from merchant to merchant
					// $secureSecret_test = "0BECBA82B13E6708B51082ACE388E2EF";
					$secureSecret = "186A82E8A70BDEBC9F91A67D90EC1E35";
					// $secureSecret_old = "CE318770C1CC8D93E36301AAC81FC5A5";
					// Set the Secure Hash Secret used by the VPC connection object
					$conn->setSecureSecret($secureSecret);
					// *******************************************
					// START OF MAIN PROGRAM
					// *******************************************
					// Sort the POST data - it's important to get the ordering right
					ksort($_POST);
					// add the start of the vpcURL querystring parameters
					$vpcURL = $_POST["virtualPaymentClientURL"];
					// This is the title for display
					$title  = $_POST["Title"];
					// Remove the Virtual Payment Client URL from the parameter hash as we 
					// do not want to send these fields to the Virtual Payment Client.
					unset($_POST["virtualPaymentClientURL"]);
					unset($_POST["SubButL"]);
					unset($_POST["Title"]);
					// Add VPC post data to the Digital Order
					foreach ($_POST as $key => $value) {
						if (strlen($value) > 0) {
							$conn->addDigitalOrderField($key, $value);
						}
					}
					// Add original order HTML so that another transaction can be attempted.
					$conn->addDigitalOrderField("AgainLink", $againLink);
					// Obtain a one-way hash of the Digital Order data and add this to the Digital Order
					$secureHash = $conn->hashAllFields();
					$conn->addDigitalOrderField("Title", $title);
					$conn->addDigitalOrderField("vpc_SecureHash", $secureHash);
					$conn->addDigitalOrderField("vpc_SecureHashType", "SHA256");
					// Obtain the redirection URL and redirect the web browser
					$vpcURL = $conn->getDigitalOrder($vpcURL);
					header("Location: " . $vpcURL);
					//echo "<a href=$vpcURL>$vpcURL</a>";
				} else {
					echo "<h3>Invalid Attempt.</h3>";
				}
			} else {
				echo "<h3>Invalid Captcha Code.</h3>";
			}
		} else {
			echo "<h3>Invalid Request.</h3>";
			exit;
		}
	} else {
		echo "<h3>Invalid Request.</h3>";
		exit;
	}
	?>