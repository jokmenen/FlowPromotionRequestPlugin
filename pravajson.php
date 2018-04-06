<?php
 /*
   Plugin Name: Flow Promotion Request
   */
   include 'settings.php';
   
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
	
	function getAddressFromTextarea($txtarea){
		
		$arr = explode("\n",$txtarea);
		return $arr;
		
		
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
		$email->From      = get_option('from');
		$email->FromName  = get_option('fromTit');
		$email->Subject   = get_option('subject'); //van maken Promotion Request [naam activiteit] [commissaris]
		$email->Body      = get_option('body');
		foreach(getAddressFromTextarea(get_option('to')) as $toMail){
			$email->AddCC( $toMail );
		}
		
		
		//$email->AddAddress( 'vicevoorzitter@svflow.nl', 'meerminman' );
		//$email->AddCC( 'website@svflow.nl', 'mosseljongeee' );

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