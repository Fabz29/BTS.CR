<?php
$extensions_allowed = array();
$extensions_allowed [] = 'php';
$extensions_allowed [] = 'html';
$extensions_allowed [] = 'ini';
$extensions_allowed [] = 'tpl';
$extensions_allowed [] = 'twig';
function listeFichiers($dir){
  global $extensions_allowed;
  if ($handle = opendir($dir)) {
   /* Ceci est la façon correcte de traverser un dossier. */
   while (false !== ($file = readdir($handle))) {
   if (($file <>'.') & ($file<>'..')) {
   if (is_file($dir.'/'.$file)){
   $extension = pathinfo($dir.'/'.$file, PATHINFO_EXTENSION);
   if (in_array($extension,$extensions_allowed)){
   $fileHandle = fopen($dir.'/'.$file, "r");
   $intro = fread($fileHandle, 3);
   fclose($fileHandle);
   if ($intro == "\xEF\xBB\xBF"){
   echo "$dir/$file\n";
   flush();
   }
   }
   } else {
   if (is_dir($dir.'/'.$file)){
   listeFichiers($dir.'/'.$file);
   }
   }
   }
   }
   closedir($handle);
  }
}
header("Content-type: text/plain\n\n");
set_time_limit(3600);
$path = $_SERVER['DOCUMENT_ROOT'];
if (substr($path,-1)=='/'){
  $path =  substr($path,0,-1);
}
listeFichiers($path);
?>
En savoir plus sur http://www.paperblog.fr/1880790/l-encodage-utf-8-avec-bom-fait-apparaitre-un-i-en-haut-de-page/#yY1kAAeYB04Y9CUT.99