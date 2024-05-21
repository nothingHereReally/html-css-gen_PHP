<?php
class generateDiv
{
    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;

        // return $this;
    }

    public function newDiv($attribute = [])
    {
        
        $myfile = fopen("../outdir/" . $this->fileName . ".html", "a") or die("Unable to open file!");

        $tag = "<div";
        foreach ($attribute as $key => $value) {
            $tag .= " $key=\"$value\"";
        }
        $tag .= ">\n";

        fwrite($myfile, $tag);
        fclose($myfile);
    }

    public function closeDiv()
    {
        ;
        $myfile = fopen("../outdir/" . $this->fileName . ".html", "a") or die("Unable to open file!");

        $tag = "</div>\n";
        fwrite($myfile, $tag);
        fclose($myfile);
    }
}
