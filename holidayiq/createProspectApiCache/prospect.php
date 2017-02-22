<?php

function performCurl($curlUrl){
	$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => $curlUrl,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    "authorization: Basic c3VtaXQ6c3VtaXQxMjM=",
		    "cache-control: no-cache",
		    "postman-token: 344f8557-1883-aa2a-1737-6a088d029cad"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  echo $response;
		}

		echo '\n\n';
}

$destinationIds = array(604,
605,
606,
607,
608,
609,
610,
611,
612,
613,
614,
615,
616,
617,
618,
619,
620,
621,
622,
623,
624,
625,
626,
627,
628,
629,
630,
631,
632,
633,
634,
635,
636,
637,
638,
639,
640,
641,
642,
643,
644,
645,
646,
647,
648,
649,
650,
651,
652,
653,
654,
655,
656,
657,
658,
659,
660,
661,
662,
663,
664,
665,
666,
667);
	
echo '---------------Caching packages -------------------------------';
//cache packages 
foreach ($destinationIds as $key => $value) {
	$curlUrl = 'http://vayu.holidayiq.com/v1/destination/packages?destination_id='.$value;
	performCurl($curlUrl);

	// sleep(1);
}

echo '---------------Caching blogs  -------------------------------';

//cache blogs data
foreach ($destinationIds as $key => $value) {
		$curlUrl = "http://vayu.holidayiq.com/v3/destination/blogs/".$value;

		performCurl($curlUrl);

		// sleep(1);
}

echo '---------------Caching top moderated images -------------------------------';

//cache top moderated images for destinations

foreach ($destinationIds as $key => $value) {
	$curlUrl = "http://vayu.holidayiq.com/v1/top-moderated-destination-photos?size_limit=320x205&limit=5&object_id=".$value;
	performCurl($curlUrl);

	// sleep(1);
}

echo '---------------Caching similar destination -------------------------------';

//cache similar destinations
foreach ($destinationIds as $key => $value) {
	$curlUrl = "http://vayu.holidayiq.com/v3/similar-destinations/".$value.'?limit=10&image_size_filter=320x205';
	performCurl($curlUrl);

	sleep(1);
}




