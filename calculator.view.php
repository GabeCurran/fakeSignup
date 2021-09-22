<h2>Calculator</h2>
<form id='calculator' action='calculator.php' method='post'>

    <!-- User Number Inputs -->
	<input type='number' name='num1'>
	<input type='number' name='num2'>

    <!-- Calculation Options -->
	<select name='options'>
		<option value='add'>Add</option>
		<option value='subtract'>Subtract</option>
		<option value='multiply'>Multiply</option>
		<option value='divide'>Divide</option>
	</select>

    <!-- Submit Calculation Inputs -->
	<button type='submit' name='calculatorSubmit'>Submit</button>

    <!-- Ternary Operator to output Result, remains "?" while no calculation. -->
	<p>Your answer is: <?php echo $_POST['calculatorResult'] ?></p>
    
</form>