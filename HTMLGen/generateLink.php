<?php
class generateLink
{
    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;

        // return $this;
    }

    public function newLink($linkName, $link, $attribute = [])
    {
        $myfile = fopen("{$this->fileName}.html", "a") or die("Unable to open file!");
        $tag = "<a href='{$link}'";
        foreach ($attribute as $key => $value) {
            $tag .= " $key=\"$value\"";
        }
        $tag .= ">{$linkName}</a>\n";
        fwrite($myfile, $tag);

        fclose($myfile);
    }
}
