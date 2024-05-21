<?php
require_once "CreateHtml.php";
$html = new CreateHtml('libretto', 'final project', ['../outdir/styles/cssmenu1','../outdir/styles/cssmenu2','../outdir/styles/libmenu','../outdir/styles/libretto','../outdir/styles/multimenu']);



$html
->newSection(['id'=>'header'])
    ->newSection(['id'=>'lefthead'])

    ->closeSection()

    ->newSection(['id'=>'righthead'])

    ->closeSection()

->closeSection()


->newSection(['id'=>'mainmenubar']) 


    ->newul(['id'=>'mainmenu'])
    // ->newli("Home",["href" => "#"])->closeli()

    ->newli($html->link->newLink('Home', '#'))->closeli()
    ->newli($html->link->newLink('Reading', '#'))
        ->newul(['class'=>'sub1'])
        ->newli($html->link->newLink("Novels","#"))->closeli()
        ->newli($html->link->newLink("Hardbound","#"))->closeli()
        ->newli($html->link->newLink("Paperback","#"))->closeli()
        ->newli($html->link->newLink("Comics","#"))->closeli()
        ->newli($html->link->newLink("categories","#"))->closeli()
        ->closeul()
    ->closeli()
    ->newli($html->link->newLink('Featured', '#'))->closeli()
    ->newli($html->link->newLink('Orders', '#'))->closeli()
    ->newli($html->link->newLink('Deals & offers', '#'))->closeli()
    ->closeul()



->closeSection()


->newSection(['id'=>'maincontainer'])

    ->newSection(['id'=>'headline'])

        ->newSection(['id'=>'headlleft'])
            ->newIMG('images/hunger_games_trilogy.jpg',['title'=>'The Hunger Games Trilogy', 'alt' =>'Hunger Games Trilogy'])
        ->closeSection()

        ->newSection(['id'=>'headlright'])
            ->br()
            ->br()
            ->newSpan('Special Offer!!!', ['class'=>'headlineimpact'])

            ->br()
            ->newP('Limited stocks only!!!', ['class'=>'headlinetext'])
            ->br()

        ->closeSection()



    ->closeSection()

    ->newSection(['id'=>'left'])

    ->closeSection()

    ->newSection(['id'=>'right'])
        ->newP('Book News', ['class'=>'blockheadings'])

        ->newSection(['id'=>'placeholder'])

            ->newSection(['class'=>'sections'])

                ->newP('literature')
                
                ->newSpan(' &quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
                qui officia deserunt mollit anim id est laborum.&quot;', ['class'=>'sectiontext'])

            ->closeSection()

            ->newSection(['class'=>'sections'])

                ->newP('Arts')
                
                ->newSpan(' &quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
                qui officia deserunt mollit anim id est laborum.&quot;', ['class'=>'sectiontext'])

            ->closeSection()
            ->br()

            ->newSection(['class'=>'sections'])

                ->newP('Drama')
               
                ->newSpan(' &quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
                qui officia deserunt mollit anim id est laborum.&quot;', ['class'=>'sectiontext'])
            
            ->closeSection()

            ->newSection(['class'=>'sections'])

                ->newP('Science/Fiction')
                ->newSpan(' &quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
                qui officia deserunt mollit anim id est laborum.&quot;', ['class'=>'sectiontext'])
    
            ->closeSection()
            ->br()

            ->newSection(['class'=>'sections'])

                ->newP('Horror')
                ->newSpan(' &quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
                qui officia deserunt mollit anim id est laborum.&quot;', ['class'=>'sectiontext'])
            
            ->closeSection()

            ->newSection(['class'=>'sections'])
                ->newP('Love Story')
                ->newSpan(' &quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
                qui officia deserunt mollit anim id est laborum.&quot;', ['class'=>'sectiontext'])
        
            ->closeSection()
            



        ->closeSection()

    ->closeSection()

->closeSection()



->newSection(['id'=>'footer'])

    ->newP('Copyright © International Web Development, All rights reserved 2013', ['id'=>'copyrighttext'])
    

->closeSection()

->br()
->closeHtml();




