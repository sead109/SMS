<?php



	include ( "src/NexmoMessage.php" );


	/**
	 * To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('88f68bbc', 'Jq092R7GavmG8Ih6');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message.
	$info = $nexmo_sms->sendText( '+38762421670', 'NEXMO', 'Hello from nexmo' );

	// Step 3: Display an overview of the message
	echo $nexmo_sms->displayOverview($info);

	// Done!

?>
