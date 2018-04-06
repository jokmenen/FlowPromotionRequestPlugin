<?php
 /*
   Plugin Name: Flow Promotion Request
   */
   
function FlowGenerateForm(){
	
	//$HTML = file_get_contents(plugins_url('/html/requestForm.php',__FILE__ ));
    //echo $HTML;
	
}

add_shortcode('FlowPromoGenerate',FlowGenerateForm);
add_action("admin_post_FlowPromotieaanvraag",FlowPromotionRequest);
   
function parsePOST($post){	
		$format = "%s : %s ";

		echo "Verzonden: <br>";

		foreach (array_keys($post) as $element){
			
			$myObj->$element = $post[$element];
		
		}

		$myJSON = json_encode($myObj);

		echo $myJSON;
	}

	function sendJSONMail($JSON){
		// Mail aanvraag
		require_once('PHPMailer-master/class.phpmailer.php');

		$file_to_attach = $JSON;


		$bodytext = "Dear Web Commissioner!

		[commissaris] wants to hand in a promotion request for [activiteit]. You can find the promotion request, as well as optionally an .ics file for the digital agenda implementation. 

		Kind regards,
		Sheldon.
		";


		$email = new PHPMailer();
		$email->From      = 'info@svflow.nl';
		$email->FromName  = 'Promotieaanvraag Distributer';
		$email->Subject   = 'Promotieaanvraag'; //van maken Promotion Request [naam activiteit] [commissaris]
		$email->Body      = $bodytext;
		$email->AddAddress( 'vicevoorzitter@svflow.nl', 'meerminman' );
		$email->AddCC( 'website@svflow.nl', 'mosseljongeee' );

		$email->AddStringAttachment( $file_to_attach , 'aanvraag.json');
		print($email->Send());

		return 0;

		}   
   
function FlowPromotionRequest(){
		
	   

	if ($_POST["fromPage"]==1){
			
		$json = parsePOST($_POST);
		sendJSONMail($json);


	}
	else {
		
		echo "ERROR, Please use the Promotion Request Form";
		return 1;
	}

	// You can contact Ramon Pieternella (jokmenen@gmail.com) for any questions about this promotion request system. Please add "Flow Promotion Request" as a subject. 
}
?>