<html>
	<head>
		<title> Test</title>
<script type="text/javascript" src="jquery.js"></script>
<script language="JavaScript" >
	function collapse(number){
		numbero = "#" + number;

		$(numbero).slideToggle("fast");
		
	}

</script>
<style>
	.collapsable{
	display: none;
	}
	.collapse{
		background-color: gray;
		width: 300px;
		text-align:center;
		color:white;
	}
</style>
	</head>
<body>
<?php
/* This code takes an array of strings ($array_in) and makes a collapsable menu that is sorted alphabeticaly 
 * the collapsed menu has a css id according to the rule {first-letter}-tab for example banana is placed in the b-tab id.
 * I encourage not to have arrays with strings that start with words that are not letters, as it may cause problems with the jQuery selector.
 */
// This is the main array that is used to generate the tabs

$array_in = array("banana","apple","grapes","beans");
print_r($array_in);
sort($array_in);
$letters_array = array();
foreach ( $array_in as $key => $value ) 
{
		
	$explotado = substr($value, 0,1);
	$letters_array[$key] = $explotado;
	
	
}

$letters_array_unique =array_unique($letters_array);

foreach ($letters_array_unique as $key => $value) {
	print('<div class ="collapse" onclick="collapse(\''.$value.'-tab\')">'.$value.'</div><div class="collapsable" id="'.$value.'-tab"><ul>');	
	foreach ($array_in as $key2 => $value2) {
			$letter_to_place = substr($value2, 0,1);
		if($value == $letter_to_place){
			print("<li>".$value2."</li>");
		}
	}
	print"</ul></div>";
	
}



?>
</body>
</html>


