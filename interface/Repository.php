<?php

// Note that this feature is not used very elegantly, as I do not use a framework around this functionality

interface Repository{
    public static function selectById($connection,$id);
    public static function selectList($connection);
    public static function addEntity($connection,$values);
}


?>