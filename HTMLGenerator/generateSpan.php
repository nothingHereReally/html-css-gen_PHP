<?php
class generateSpan
{
    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;

        // return $this;
    }

    public function newSpan($content = '', $attribute = [])
    {
        
        $myfile = fopen("../outdir/" . $this->fileName . ".html", "a") or die("Unable to open file!");
        $tag = "<span";
        foreach ($attribute as $key => $value) {
            $tag .= " $key=\"$value\"";
        }
        $tag .= ">{$content}</span>\n";
        fwrite($myfile, $tag);

        fclose($myfile);
    }
}
