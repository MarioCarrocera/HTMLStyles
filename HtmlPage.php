<?php
ini_set('display_errors', true);
error_reporting(E_ERROR | E_PARSE | E_NOTICE | E_WARNING);

include_once('Classcommon.php');
$license = new CCLicense(3,2,1);

include_once('HtmlClass.php');
$html = new html();
$html->SetPage('page');
$html->SetMeta('screen');
$html->SetGoogle('letters');
$html->SetCss('MainCss');

// Just to have something to see on body
$google = $html->ShwCntIn('letters',"page");
?>	
<!DOCTYPE html>
<html>
	<?php $html->Getheader();?> 
<body>

This text is inside body an the Font family of body is defined like Oswald, can confirm es the same letter that is on the samples down

<?php foreach ($google as $clave => $valor) { if ($valor=='google') { ?>
	<p style=<?php echo '"font-family:'.$clave ; ?>">This is a paragraph <?php echo $clave; ?>.</p>
<?php }} ?>
</body>
</html>
<?php echo '<br>'.$license->logo . '</br>'.$license->url; ?> 
		