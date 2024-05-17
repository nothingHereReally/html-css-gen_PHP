<?php
// require_once "generateHeader.php";
// require_once "generateDiv.php";
// require_once "generatePara.php";
// require_once "generateButton.php";
require_once "autoloader.php";
class CreateHtml
{

    private $fileName;
    private $title;
    private $heading;
    private $p;
    private $input;
    private $button;
    private $div;
    private $table;
    private $cssLink;
    private $footer;
    private $header;
    private $section;
    private $nav;
    private $img;

    private $list;
    private $br;

    private $link;

    public function __construct($fileName, $title, $cssLink, $attribute = [])
    {
        $this->fileName = $fileName;
        $this->title = $title;
        $this->cssLink = $cssLink;
        $this->heading = new generateHeading($fileName);
        $this->div = new generateDiv($fileName);
        $this->p = new generatePara($fileName);
        $this->button = new generateButton($fileName);
        $this->input = new generateInput($fileName);
        $this->link = new generateLink($fileName);
        $this->table = new generateTable($fileName);
        $this->footer = new generateFooter($fileName);
        $this->section = new generateSection($fileName);

        $this->nav = new generateNav($fileName);
        $this->header = new generateHeader($fileName);
        $this->list = new generateList($fileName);

        $this->img = new generateImage($fileName);

        $this->br = new Br($fileName);

        $myfile = fopen("{$this->fileName}.html", "w") or die("Unable to open file!");

        // $txt = "<!DOCTYPE html>\n";
        // $txt .= "<html>\n";
        // $txt .= "<head>\n";
        // $txt .= "<title>{$this->title}</title>\n";
        // $txt .= "</head>\n";
        // $txt .= "<body>\n";

        //added some details for head







        $txt = "<!DOCTYPE html>\n";
        $txt .= "<html>\n";
        $txt .= "<head>\n";
        $txt .= "<meta charset=\"UTF-8\">\n";
        $txt .= "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
        $txt .= "<title>{$this->title}</title>\n";
        // Link to your CSS file
        $txt .= "<link rel=\"stylesheet\" href=\"{$this->cssLink}.css\">\n";
        $txt .= "</head>\n";
        $txt .= "<body";


        foreach ($attribute as $key => $value) {
            $txt .= " $key=\"$value\"";
        }

        $txt .= ">\n";










        fwrite($myfile, $txt);

        echo "HTML content saved to file: $fileName";

        fclose($myfile);
        // return $this;
    }


    public function closeHtml()
    {
        $myfile = fopen("{$this->fileName}.html", "a") or die("Unable to open file!");
        $txt = "\n</body>\n\n";
        $txt .= "</html>\n";
        fwrite($myfile, $txt);
        fclose($myfile);

        return $this;
    }

    public function newHeading($type, $content = '', $attribute = [])
    {
        $this->heading->newHeading($type, $content, $attribute);
        return $this;
    }

    public function br()
    {
        $this->br->br();
        return $this;
    }



    public function newIMG($source, $attribute = [])
    {
        $this->img->newIMG($source, $attribute);
        return $this;
    }






    public function newP($content, $attribute = [])
    {
        $this->p->newP($content, $attribute);
        return $this;
    }

    public function newButton($content, $attribute = [])
    {
        $this->button->newButton($content, $attribute);
        return $this;
    }

    public function newInput($type, $attribute = [])
    {
        $this->input->newInput($type, $attribute);
        return $this;
    }
    public function newLink($linkName, $link, $attribute = [])
    {
        $this->link->newLink($linkName, $link, $attribute);
        return $this;
    }

    public function newDiv($attribute = [])
    {
        $this->div->newDiv($attribute);
        return $this;
    }


    public function closeDiv()
    {
        $this->div->closeDiv();
        return $this;
    }


    public function newSection($attribute = [])
    {
        $this->section->newSection($attribute);
        return $this;
    }

    public function closeSection()
    {
        $this->section->closeSection();
        return $this;
    }


    public function newNav($attribute = [])
    {
        $this->nav->newNav($attribute);
        return $this;
    }

    public function closeNav()
    {
        $this->nav->closeNav();
        return $this;
    }








    public function newHeader($attribute = [])
    {
        $this->header->newHeader($attribute);
        return $this;
    }

    public function closeHeader()
    {
        $this->header->closeHeader();
        return $this;
    }

    public function newFooter($attribute = [])
    {
        $this->footer->newFooter($attribute);
        return $this;
    }

    public function closeFooter()
    {
        $this->footer->closeFooter();
        return $this;
    }


    public function newList($list = [], $attribute = [])
    {
        $this->list->newList($list, $attribute);
        return $this;
    }


    public function newTable($row, $column, $attribute = [])
    {
        $this->table->newTable($row, $column, $attribute);
        return $this;
    }
}
