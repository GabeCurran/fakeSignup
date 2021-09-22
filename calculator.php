<?php
	error_reporting(0);
	if (isset($_POST['calculatorSubmit'])) {

        /* If user input is empty, set to 0 */
		if (empty($_POST['num1'])) $_POST['num1'] = 0;
		if (empty($_POST['num2'])) $_POST['num2'] = 0;

        /* Switch to check for which operator to use */
		switch($_POST['options']) {
			case 'add':
				$result = ($_POST['num1'] + $_POST['num2']);
				break;
			case 'subtract':
				$result = ($_POST['num1'] - $_POST['num2']);
				break;
			case 'multiply':
				$result = ($_POST['num1'] * $_POST['num2']);
				break;
			case 'divide':
				if ($_POST['num2'] == 0) {
					$result = 'Invalid';
					break;
				}
				$result = ($_POST['num1'] / $_POST['num2']);
				break;
		}
	} else $result = 'Invalid';
?>

<!-- Hidden Form for containing calculation to submit later. -->
<form method='post' action='home.view.php' name='submitCalculation'>
	<input type='hidden' name='calculatorResult' value=<?php echo $result ?>>
</form>

<script>
    /* When Calculator loads, submit calculation */
	window.onload = function() {
		document.forms['submitCalculation'].submit();
	}
</script>