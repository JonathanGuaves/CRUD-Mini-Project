<?php

function inputElement($icon, $placeholder, $name, $value)
{
	$ele = "

	<div class=\"input-group mb-3\">
  		<div class=\"input-group-text bg-warning\">$icon</div>
  		<input type=\"text\" name='$name' value='$value' autocomplete=\"off\" class=\"form-control\" placeholder='$placeholder' aria-label=\"Name\" aria-describedby=\"basic-addon1\">

	</div>

	";

	echo $ele;
}

function buttonElement($btnid, $styleclass, $text, $name, $attr)
{
	$btn = "
		<button name='$name''$attr' class='$styleclass' id='$btnid'>$text</button>

	";

	echo $btn;
}