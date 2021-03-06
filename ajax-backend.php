<?PHP
/*
 | Ajax backend
 | Currently set to extract data from helicon books store
 */

/*
 | Read command line parameters
 | $id - HTML id to replace
 */
$id = isset($_GET['id']) ? $_GET['id'] : '';

if($id == 'page') {
	$filename = isset($_GET['file']) ? $_GET['file'] : '';
	$height = isset($_GET['height']) ? $_GET['height'] : 0;
	$width = isset($_GET['width']) ? $_GET['width'] : 0;
	$bookname = isset($_GET['bookname']) ? $_GET['bookname'] : '';
	$chapter = isset($_GET['chapter']) ? $_GET['chapter'] : 0;
	
	if($chapter) {
		setcookie($bookname, $chapter, time() + 60*60*24*30);
	}
	
	print "<iframe seamless=\"seamless\" src=\"$filename\" height=\"$height\" width=\"$width\" style=\"border:0;\"></iframe>\n";
}

?>
