<?php
class generateList
{
    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;

        // return $this;
    }

    public function newList($list = [], $attribute = [])
    {
        $myfile = fopen("{$this->fileName}.html", "a") or die("Unable to open file!");


        $tag = "<ul";

        foreach ($attribute as $key => $value) {
            $tag .= " $key=\"$value\"";
        }
        $tag .= ">\n";


        foreach ($list as $item) {
            $tag .= "    <li>" . htmlspecialchars($item) . "</li>\n";
        }


        // Closing tag
        $closingTag = "</ul>\n";
        $tag .= $closingTag;


        fwrite($myfile, $tag);
        fclose($myfile);
    }
}
