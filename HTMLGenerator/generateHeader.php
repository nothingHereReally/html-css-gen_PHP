<?php
class generateHeader
{
    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;

        // return $this;
    }

    public function newHeader($attribute = [])
    {
        $myfile = fopen("{$this->fileName}.html", "a") or die("Unable to open file!");
        $tag = "\n<header";
        foreach ($attribute as $key => $value) {
            $tag .= " $key=\"$value\"";
        }
        $tag .= ">\n";
        fwrite($myfile, $tag);

        fclose($myfile);
    }

    public function closeHeader()
    {
        $myfile = fopen("{$this->fileName}.html", "a") or die("Unable to open file!");
        $tag = "</header>\n";
        fwrite($myfile, $tag);
        fclose($myfile);
    }
}
