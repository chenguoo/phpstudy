<?php
/**
 * filter test
 * @authors cheney (2270292886@qq.com)
 * @date    2017-08-29 16:27:17
 * @version $Id$
 */

if (!filter_has_var(INPUT_GET, "email")) {
	echo ("Input type does not exist");
} else {
	if (!filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL)) {
		echo "E-Mail is not valid";
	} else {
		echo "E-Mail is valid";
	}
}
