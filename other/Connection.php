<?php


    class Connection{

        // I am aware that the application is vulnerable to SQL injection among other things, but I did not take the time to prect against it. What I usually does is to use a framework
        // of some kind to protect against SQL injection.

        // Another issue not taken care of is fallback key when the connections and queries fail
        // Some methods are included mostly for what would have been added had the project been expanded

        private $connection = null;


        public function init($username, $password, $host, $database){
            $this->connection = new mysqli($host, $username, $password);
            mysqli_select_db($this->connection,$database);
        }

        public function selectQuery($sql){
            return $this->connection->query($sql);
        }

        public function lastInserted() : int{
            return $this->connection->insert_id;
        }

        public function insertQuery($sql){
            $this->connection->query($sql);      
        }

        public function deleteQuery($sql){
            $this->connection->query($sql);      
        }




    }



?>