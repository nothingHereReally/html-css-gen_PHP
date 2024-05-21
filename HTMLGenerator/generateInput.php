<?php
class generateInput
{
    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;

        // return $this;
    }

    public function newInput($type, $attribute = [])
    {
        $myfile = fopen("../outdir/" . $this->fileName . ".html", "a") or die("Unable to open file!");
        $tag = "<input type='{$type}'";
        foreach ($attribute as $key => $value) {
            $tag .= " $key=\"$value\"";
        }
        $tag .= ">\n</input>\n";
        fwrite($myfile, $tag);

        fclose($myfile);
    }
}
