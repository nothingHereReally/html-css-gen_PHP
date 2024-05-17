<?php
class generateImage
{
    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;

        // return $this;
    }

    public function newIMG($source, $attribute = [])
    {
        $myfile = fopen("{$this->fileName}.html", "a") or die("Unable to open file!");

        // if (!is_numeric($type) || $type < 1 || $type > 6) {
        //     $type = 1;
        // }

        $tag = "<img src=\"{$source}\"";

        foreach ($attribute as $key => $value) {
            $tag .= " $key=\"$value\"";
        }

        $tag .= ">\n";
        // $tag .= $content;
        // $tag .= "\n</h{$type}>\n";
        fwrite($myfile, $tag);
        fclose($myfile);
    }
}
