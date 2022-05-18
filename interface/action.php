<?php

    // in these interfaces I have not included return action. I simply did not take the time to plan for their use.
    // action sent in as GET parameter just for this case. I usually use friendly URLs like localhost/login, localhost/frontpage and so on. But did not want to mess about with the http access file here.  

    interface Action{
        public function setData($holder);
        public function display();
        public function postCheck() : bool;
        public function redirect();
    }


?>