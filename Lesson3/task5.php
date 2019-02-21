<?php

function spaceReplace($string) {
	return str_replace(' ', '_', $string);
}

echo spaceReplace('Шла Маша по шоссе и сосала сушку');