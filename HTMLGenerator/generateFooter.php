<?php
class generateFooter
{
    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;

        // return $this;
    }

    public function newFooter($attribute = [])

    {
        
        $myfile = fopen("../outdir/" . $this->fileName . ".html", "a") or die("Unable to open file!");

        $tag = "<footer";
        foreach ($attribute as $key => $value) {
            $tag .= " $key=\"$value\"";
        }
        $tag .= ">\n";

        fwrite($myfile, $tag);
        fclose($myfile);
    }

    public function closeFooter()
    {
       
        $myfile = fopen("../outdir/" . $this->fileName . ".html", "a") or die("Unable to open file!");

        $tag = "</footer>\n";
        fwrite($myfile, $tag);
        fclose($myfile);
    }
}
