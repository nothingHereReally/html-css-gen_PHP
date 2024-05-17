<?php
class generateTable
{
    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;

        // return $this;
    }

    public function newTable($row, $column, $attribute = [])
    {
        $myfile = fopen("{$this->fileName}.html", "a") or die("Unable to open file!");







        $tag = "<table";

        foreach ($attribute as $key => $value) {
            $tag .= " $key=\"$value\"";
        }
        $tag .= ">";













        for ($i = 0; $i < $row; $i++) {
            $tag .= "<tr>\n";
            for ($j = 0; $j < $column; $j++) {
                $tag .= "<td>Content</td>\n";
            }
            $tag  .= "</tr>\n";
        }

        // Closing tag
        $closingTag = "</table>\n";
        $tag .= $closingTag;









        fwrite($myfile, $tag);
        fclose($myfile);
    }
}
