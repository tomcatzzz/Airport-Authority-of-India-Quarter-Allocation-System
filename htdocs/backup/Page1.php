<?php $myVariable = "Some text";?>
<form method="post" action="page2.php">
 <input type="hidden" name="text" value="<?php echo $myVariable; ?>">
 <button type="submit">Submit</button>
</form>