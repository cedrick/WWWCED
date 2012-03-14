<?php
/****************************************************************************
* DO NOT REMOVE *

Project: PHPWeby file renamer version 1.0
Url: http://phpweby.com/
Copyright: (C) 2008 Blagoj Janevski - bl@blagoj.com
Project Manager: Blagoj Janevski

More info, sample code and code implementation can be found here:
http://phpweby.com/software/filerenamer

For help, feature requests, comments, feedback, discussion ... please join our
Webmaster forums - http://forums.phpweby.com

Visit http://phpweby.com for the latest PHP tutorials, articles, etc.

///PLEASE BACKUP YOUR FILES BEFORE EXECUTING THIS SCRIPT///

*****************************************************************************
*  If you like this software please link to us!                             *
*  Use this code:						                                    *
*  <a href="http://phpweby.com/software/filerenamer">PHP file renamer</a>   *
*****************************************************************************

License:
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.

*********************************************************/


///PLEASE BACKUP YOUR FILES BEFORE EXECUTING THIS SCRIPT///

// the directory
// './' - is the current directory
// '../' - is the parent directory
// case sensitive
// e.x.: /home/user or c:\files
$dir='uploads/';

// 1 - uppercase all files
// 2 - lowercase all files
// 3 - do not uppercase or lowercase
$up=3;

//rename files that have $w in their filename
//case sensitive
//set to '' if you want to rename all files
$w='292012';

//do not rename files having $n in their filename
$n='';

//add prefix to files
$prefix='xxx_';

//add postfix
$postfix='';

//replace
$replace='WINTER_SOLUTIONS.jpeg';
$replace_with='WINTER_SOLUTIONS_INC.jpeg';

//true - traverse subdirectories
//false - do not traverse subdirectories
$tr=false;



////// do NOT change anything below this /////////
set_time_limit(120);
$files=array();
error_reporting(E_ERROR | E_PARSE);
function prep($f,$dir)
{
	global $up,$prefix,$postfix,$w,$replace_with,$replace,$n,$files;
	if(strpos($f,$n)!==false)
	return $f;
	$f=str_replace($replace,$replace_with,$f);
	if($up==1)
	$f=strtoupper($f);
	elseif($up==2)
	$f=strtolower($f);
	$f=$prefix.$f.$postfix;
	$files[]=$dir.$f;
	return $f;
}
$i=0;
function dir_tr($dir)
{
	global $i,$w,$tr,$files,$replace,$replace_with;
	$dir=rtrim(trim($dir,'\\'),'/') . '/';
	$d=@opendir($dir);
	if(!$d)die('The directory ' .$dir .' does not exists or PHP have no access to it<br><a target="_blank" href="http://forums.phpweby.com">Need help?</a>');


	while(false!==($file=@readdir($d)))
	{
		if ($file!='.' && $file!='..' && $file!='renamer.php')
		{
			if(is_file($dir.$file))
			{
				if($w=='' || (strpos($file,$w)!==false))
				{
					if(!in_array($dir.$file,$files))
					{
						rename($dir.$file,$dir.(prep($file,$dir)));
						$i++;
					}
				}
				else
				{
					if(is_file($dir.$replace) && $replace == $file)
					{
						rename($dir.$file,$dir.$replace_with);
						$i++;
					}
				}
			}
			else
			{
				if(is_dir($dir.$file))
				{
					if($tr)
					dir_tr($dir.$file);
				}
			}
		}
	}
	@closedir($d);
}
dir_tr($dir);
echo '<br>Renamed ' . $i . ' files in directory<br>' . $dir;
echo "<br>You can now delete renamer.php";
echo '<br><br>If you like this software please link to us!<br>Use this code:<br>
    '. htmlspecialchars('<a href="http://phpweby.com/software/filerenamer">PHP file renamer</a>') .'<br>
	More info and links can be found at <a href="http://phpweby.com/link" target="_blank">http://phpweby.com/link</a><br> ' ;
echo 'For help, comments, feedback, discussion ... please join our
	<a href="http://forums.phpweby.com" target="_blank" style="color:blue;font-weight:bold;">Webmaster Forums</a>';
?> 
