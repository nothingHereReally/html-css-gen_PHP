<?php
class Br
{
    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;

        // return $this;
    }

    public function br()
    {
        $myfile = fopen("{$this->fileName}.html", "a") or die("Unable to open file!");
        $tag = "<br>";

        fwrite($myfile, $tag);

        fclose($myfile);
    }
}
