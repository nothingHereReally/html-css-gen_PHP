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
        $myfile = fopen("{$this->fileName}.html", "a") or die("Unable to open file!");

        // if (!is_numeric($type) || $type < 1 || $type > 6) {
        //     $type = 1;
        // }

        $tag = "<h{$type}";
        foreach ($attribute as $key => $value) {
            $tag .= " $key=\"$value\"";
        }
        $tag .= ">{$content}</h{$type}>\n";
        // $tag .= $content;
        // $tag .= "\n</h{$type}>\n";
        fwrite($myfile, $tag);
        fclose($myfile);
    }
}
