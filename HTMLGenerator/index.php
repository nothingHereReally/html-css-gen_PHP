<?php
require_once "autoloader.php";
$html = new CreateHtml('testInFinalForm', 'title', 'style', ['id' => 'css-zen-garden']);


// $html
//     ->newDiv(['class' => 'div', 'name' => 'div'])
//     ->newHeader(2, "Hello", ['class' => 'test header', 'name' => 'header'])
//     ->newP('Hello WOrld This is a Paragraph')
//     ->newButton('Click Me', ['class' => 'test header', 'name' => 'header'])
//     ->newInput('text')
//     ->newlink('Facebook', 'https://www.facebook.com/', ['class' => 'fb'])
//     ->closeDiv()
//     ->closeHtml();



// $html
//     ->newDiv(['class' => 'link1'])
//     ->newHeading(1, 'Welcome to My Website')
//     ->newlink('Home', "home.com", ['class' => 'link1'])
//     ->newlink('About', "home.com", ['class' => 'link1'])
//     ->closeDiv()
//     ->newDiv()
//     ->newDiv(['id' => 'home'])
//     ->newHeading(1, 'home', ['class' => 'about'])->newTable(2, 2, ['id' => 'head'])
//     ->closeDiv()
//     ->newP('asdf', ['class' => 'link1'])
//     ->closeHtml();


$html
    ->newDiv(['class' => 'page-wrapper'])

    ->newSection(['class' => 'intro', 'id' => 'zen-intro'])
    ->newHeader(['role' => 'banner'])
    ->newHeading(1)
    ->newHeading(2)
    ->closeHeader()

    ->newDiv(['class' => 'summary', 'id' => 'zen-summary', 'role' => 'article'])
    ->newP('A demonstration of what can be accomplished through')
    ->newLink('css file', '/examples/style.css', ['title' => 'This pages sample CSS, the file you may modify.'])
    ->closeDiv()

    ->newNav(['class' => 'as'])

    ->newFooter()
    ->closeFooter()
    ->closeNav()
    ->newList(["Apple", "Banana", "Cherry"], ["class" => "fruit-list", "id" => "myFruitList"])
    ->newIMG("path/to/your/image.jpg", ["alt" => "Description of the image", "width" => "500"])
    ->br()
    ->closeSection()

    ->closeHtml();
