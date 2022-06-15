<?php
require_once('player_abstract.class.php');
class subZero extends AbstractPlayer {
    function desenhar()
    {
        return "<div>
            <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKNasLCYxYby--Hg7Kyg8fTITsOtv5Al1yA6BeexNQ6WlrW223WOliJm5A4nPatrgHoX8&usqp=CAU'>
        </div>";
        
    }
}