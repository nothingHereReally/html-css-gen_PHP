<?php
class generateNav
{
    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;

        // return $this;
    }

    public function newNav($attribute = [])
    {
      
        $myfile = fopen("../outdir/" . $this->fileName . ".html", "a") or die("Unable to open file!");
        $tag = "\n<nav";
        foreach ($attribute as $key => $value) {
            $tag .= " $key=\"$value\"";
        }
        $tag .= ">\n";
        fwrite($myfile, $tag);

        fclose($myfile);
    }

    public function closeNav()
    {
        $myfile = fopen("../outdir/" . $this->fileName . ".html", "a") or die("Unable to open file!");
        $tag = "</nav>\n";
        fwrite($myfile, $tag);
        fclose($myfile);
    }
}
