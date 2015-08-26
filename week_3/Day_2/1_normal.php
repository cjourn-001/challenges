<?php
            $suits = array ("clubs", "diamonds", "hearts", "spades");
            $faces = array (
                "Ace" => 1, "2" => 2,"3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7,
                "8" => 8, "9" => 9, "10" => 10, "Jack" => 11, "Queen" => 12, "King" => 13
            );
            $deck = array();


            // print here
            // $deck = array()
            //      array() // clubs
            //      array() // diamonds
            //      array() // hearts
            //      array() // spades
            // );
            
            $deck = array();
            
            foreach($suits as $suit){
                $suitCards = array();
                
                //clubs
                foreach($faces as $key => $face){
                    $suitCards[$key . " of " . $suit] = $face;
                }
                $deck[$suit] = $suitCards;
            }

        var_dump($deck);
?>
