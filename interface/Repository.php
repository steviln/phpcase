<?php

// Note that this feature is not used very elegantly, as I do not use a framework around this functionality

interface Repository{
    public function selectById($connection,$id);
    public function selectList($connection);
    public function addEntity($connection,$values);
}


?>