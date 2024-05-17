<?php
class generateButton
{
    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;

        // return $this;
    }

    public function newButton($content = "", $attribute = [])
    {
        $myfile = fopen("{$this->fileName}.html", "a") or die("Unable to open file!");
        $tag = "<button";
        foreach ($attribute as $key => $value) {
            $tag .= " $key=\"$value\"";
        }
        $tag .= ">\n{$content}\n</button>\n";
        fwrite($myfile, $tag);

        fclose($myfile);
    }
}
