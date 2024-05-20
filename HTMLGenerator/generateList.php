<?php
class generateList
{
    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;

        // return $this;
    }
    //OLD
    public function newList($list = [], $attribute = [])
    {
        $myfile = fopen("../outdir/{$this->fileName}.html", "w") or die("Unable to open file!");


        $tag = "<ul";

        foreach ($attribute as $key => $value) {
            $tag .= " $key=\"$value\"";
        }
        $tag .= ">\n";


        foreach ($list as $item) {
            $tag .= "    <li>" . $item . "</li>\n";
        }


        // Closing tag
        $closingTag = "</ul>\n";
        $tag .= $closingTag;


        fwrite($myfile, $tag);
        fclose($myfile);

        return  $tag;
    }


    public function newul($attribute = [])
    {

        $myfile = fopen("../outdir/" . $this->fileName . ".html", "a") or die("Unable to open file!");
        $tag = "<ul";

        foreach ($attribute as $key => $value) {
            $tag .= " $key=\"$value\"";
        }
        $tag .= ">\n";
        fwrite($myfile, $tag);
        fclose($myfile);
    }

    public function closeul()
    {
        $myfile = fopen("../outdir/" . $this->fileName . ".html", "a") or die("Unable to open file!");
        $tag = "</ul>\n";
        fwrite($myfile, $tag);
        fclose($myfile);
    }

    public function newli($content = '', $attribute = [])
    {
        $myfile = fopen("../outdir/" . $this->fileName . ".html", "a") or die("Unable to open file!");
        $tag = "<li";

        foreach ($attribute as $key => $value) {
            $tag .= " $key=\"$value\"";
        }
        $tag .= ">\n {$content} \n";

    

        fwrite($myfile, $tag);
        fclose($myfile);
    }



    public function closeli()
    {
        $myfile = fopen("../outdir/" . $this->fileName . ".html", "a") or die("Unable to open file!");
        $tag = "</li>\n";
        fwrite($myfile, $tag);
        fclose($myfile);
    }

}
