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
        
        $myfile = fopen("../outdir/" . $this->fileName . ".html", "a") or die("Unable to open file!");


        $tag = "<img src=\"{$source}\"";

        foreach ($attribute as $key => $value) {
            $tag .= " $key=\"$value\"";
        }

        $tag .= ">\n";
        
        fwrite($myfile, $tag);
        fclose($myfile);
    }
}
