<?php
/**
 *
 * @authors cheney (2270292886@qq.com)
 * @date    2017-08-29 16:36:31
 * @version $Id$
 */
class Emp {
	public $name = "";
	public $hobbies = "";
	public $birthdate = "";
}
$e = new Emp();
$e->name = "sachin";
$e->hobbies = "sports";
//$e->birthdate = date('m/d/Y h:i:s a', "8/5/1974 12:20:03 pm");
$e->birthdate = date('m/d/Y h:i:s a', strtotime("8/5/1974 12:20:03"));

echo json_encode($e);
?>
