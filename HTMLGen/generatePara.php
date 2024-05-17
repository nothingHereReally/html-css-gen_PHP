<?php
class generatePara
{
    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;

        // return $this;
    }

    public function newP($content = '', $attribute = [])
    {
        $myfile = fopen("{$this->fileName}.html", "a") or die("Unable to open file!");
        $tag = "<p";
        foreach ($attribute as $key => $value) {
            $tag .= " $key=\"$value\"";
        }
        $tag .= ">{$content}</p>\n";
        fwrite($myfile, $tag);

        fclose($myfile);
    }
}
