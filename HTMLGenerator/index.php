<?php
require_once "CreateHtml.php";
$html = new CreateHtml('libretto', 'final project', 'style');



$html
->newSection(['id'=>'header'])
    ->newSection(['id'=>'lefthead'])

    ->closeSection()

    ->newSection(['id'=>'rightthead'])

    ->closeSection()

->closeSection()


->newSection(['id'=>'mainmenubar']) 

//list wala na human

//     ->newList('al')
//     ->newList([
//     $html->link->newLink('Home','#'), 
//     $html->link->newLink('Reading','#'),

//     // $html->list->newList(['asdf', ['class'=>'sub1']]),
//     // $html->$link->newLink('Reading','#', [
//     //     $html->list->newList([
//     //         $html->link->newLink('Novels','#'),
//     //         $html->link->newLink('Hardbound','#'),
//     //         $html->link->newLink('Paperback','#'),
//     //         $html->link->newLink('Comics','#'),
//     //         $html->link->newLink('Categories','#'),
//     //     ], ['class'=>'sub1'])
//     // ]),
//     $html->link->newLink('Featured','#'),
//     $html->link->newLink('Orders','#'), 
//     $html->link->newLink('Deals and Offers','#')
//    ])    

->newul()
->newli("Home",["href" => "#"])->closeli()
->newli("Reading",["href" => "#"])
    ->newul()
    ->newli($html->link->newLink("Novels","#"))->closeli()
    ->newli($html->link->newLink("Hardbound","#"))->closeli()
    ->newli($html->link->newLink("Paperback","#"))->closeli()
    ->newli($html->link->newLink("Comics","#"))->closeli()
    ->newli($html->link->newLink("categories","#"))->closeli()
    ->closeul()
->closeli()
->newli("Featured",["href" => "#"])->closeli()
->newli("Orders",["href" => "#"])->closeli()
->newli("Deals and Offers",["href" => "#"])->closeli()
->closeul()



->closeSection()


->newSection(['id'=>'maincontainer'])

    ->newSection(['id'=>'headline'])

        ->newSection(['id'=>'headleft'])
            ->newIMG('images/hunger_games_trilogy.jpg',['title'=>'The Hunger Games Trilogy', 'alt' =>'Hunger Games Trilogy'])
        ->closeSection()

        ->newSection(['id'=>'headright'])
            ->br()
            ->br()
            ->newSpan('Special Offer', ['class'=>'headlineimpact'])

            ->br()
            ->newP('Limited Stocks Only!!!', ['class'=>'headlinetext'])
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

    ->newP('Copyrigh C Internation', ['id'=>'copyrighttext'])
    

->closeSection()

->br()
->closeHtml();




