<?php

    // in these interfaces I have not included return action. I simply did not take the time to plan for their use. 

    interface Action{
        public function setData($holder);
        public function display();
        public function postCheck() : bool;
        public function redirect();
    }


?>