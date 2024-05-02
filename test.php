<?php
require "autoloader.php"

use Generator\CSS\CSSGenerator as CSSGen;
$style = new CSSGen();
$style->addSelector("h1")->setColor("#8a1a14");
$style->addSelector("hr")->setColor("#60570e");
$style->selectSelector("*")->setFontFamily("sans-serif");
$style->alterProp("font-family", $style->getPropValues("font-family").", Roboto");

?>

<!DOCTYPE html>
<html>
   <head>
      <title>CSS test</title>
	  <meta charset="utf-8">
	  <style type="text/css">
	    <?php
	       echo $style->getCSStext();
	    ?>
	  </style>
   </head>
   <body>
      <h1>hello world</h1>
      <hr>
      <p>hello I am someone, blah. I'm currently learning how to code in php
         as my main backend programming tool. I like to watch movies, series,
         and this is just a test for the css Generator or library that will
         be written in php.
      </p>
      <hr>
      <table>
	 <tr>
	    <th>original Adventure Time</th>
	    <th>inverse Adventure Time</th>
	 </tr>
	 <tr>
	    <td>Finn Mertens</td>
	    <td>Fionna Campbell</td>
	 </tr>
	 <tr>
	    <td>Jacob "Jake", Sr.</td>
	    <td>Cake the cat</td>
	 </tr>
	 <tr>
	    <td>Simon Petrikov "Ice King"</td>
	    <td>Ice Prince</td>
	 </tr>
	 <tr>
	    <td>Marceline Abadeer</td>
	    <td>Marshall Lee</td>
	 </tr>
	 <tr>
	    <td>Bonnibel "Bonnie" Bubblegum, "PB"</td>
	    <td>Gary Prince</td>
	 </tr>
      </table>
   </body>
</html>
