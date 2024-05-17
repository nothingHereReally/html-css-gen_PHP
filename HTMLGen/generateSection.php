<?php
class generateSection
{
    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;

        // return $this;
    }

    public function newSection($attribute = [])
    {
        $myfile = fopen("{$this->fileName}.html", "a") or die("Unable to open file!");
        $tag = "\n<section";
        foreach ($attribute as $key => $value) {
            $tag .= " $key=\"$value\"";
        }
        $tag .= ">\n";
        fwrite($myfile, $tag);

        fclose($myfile);
    }

    public function closeSection()
    {
        $myfile = fopen("{$this->fileName}.html", "a") or die("Unable to open file!");
        $tag = "</section>\n";
        fwrite($myfile, $tag);
        fclose($myfile);
    }
}
