Here is how to use our html generator

    Go to index.php in the HTML generator folder to create a file for your html.

    To create a file 
        $html = new CreateHtml('file name', 'html title', 'css file name');
        

    To add id, class, etc in the last paramater of an elements function call. For its content, add it in the first parameter or hover the function to show what are the possible parameters you can add to the element.

        For example

            newHeading($type, $content = '', $attribute = [])

            newHeading('this is for the type', 'this is for content', ['id'=>'idName])



    Here are all the funtion calls for elements and containers.

    
    For elements function call
    
        newHeading($type, $content = '', $attribute = [])

        br()

        newIMG($source, $attribute = [])
        
        newP($content, $attribute = [])
        
        newButton($content, $attribute = [])
        
        newInput($type, $attribute = [])
        
        newLink($linkName, $link, $attribute = [])
        
        newFooter($attribute = [])
        
        closeFooter()
        
        newList($list = [], $attribute = [])
        
        newTable($row, $column, $attribute = [])

    For container type function call    

        newDiv($attribute = [])
        closeDiv()
        
        divContainer($list = [], $attribute = [])
        
        newSection($attribute = [])
        closeSection()
        
        newNav($attribute = [])
        
        closeNav()
        
        newHeader($attribute = [])
        closeHeader()

        closeHtml()

method chaining can be done for this function call.

when adding an element to a list, use the variable and not method chaining. for example

    $html->newList([$html->link->newlink('asd', 'asd'), $html->list->newList([$html->link->newlink('this one', 'this one')])])   
    
    



    


    


for elements







