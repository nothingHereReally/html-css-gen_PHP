<?php
class generateHeading
{
    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;

        // return $this;
    }

    public function newHeading($type, $content = "", $attribute = [])
    {
        $myfile = fopen("../outdir/" . $this->fileName . ".html", "a") or die("Unable to open file!");
       

        $tag = "<h{$type}";
        foreach ($attribute as $key => $value) {
            $tag .= " $key=\"$value\"";
        }
        $tag .= ">{$content}</h{$type}>\n";
        fwrite($myfile, $tag);
        fclose($myfile);
    }
}
