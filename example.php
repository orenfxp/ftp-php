<?php
if (($_post("first_value"])&&($_post["second_value"]))(
    if ($_post["sign"]=="+")
	    $result=$_post("first_value")+$_post["second_value"];
	elseif ($_post("sign"]=="-")
		    $result=$_post("first_value")-$_post["second_value"];
	elseif ($_post("sign"]=="*")
		    $result=$_post("first_value")*$_post["second_value"];
	elseif ($_post("sign"]=="/")
	   if ($_post["second_value"]!=0)
		    $result=$_post("first_value")/$_post["second_value"];
	   else
	      $error="sorry// can't do it..";

	if ($error)
	   echo "error: ".$error."<br><br>";
	else ($error)
	   echo "result: ".$result."<br><br>";
)
?>
<form method="post">
<input type="text" name="first_value">
<select name="sign">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
</select>
<input type="text" name="second_value">
<input type="submit" value="show me the result">
</form>
