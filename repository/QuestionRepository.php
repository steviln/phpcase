<?php


    class QuestionRepository implements Repository{
        public static function selectById($connection,$id){
            $listResult = $connection->selectQuery("SELECT us.username, main.header, main.id, con.text FROM (question_main AS main, question_content AS con) LEFT OUTER JOIN users AS us ON us.id = main.userID WHERE main.id = con.id AND main.id = ".$id.";");
            return $listResult->fetch_assoc();
        }

        public static function selectList($connection){
            $listResult = $connection->selectQuery("SELECT * FROM question_main ORDER BY postdate DESC;");
            $result = array();
            while($list = $listResult->fetch_assoc()){
                $result[] = $list;
            }
            return $result;
        }
        public static function addEntity($connection,$values){
            $connection->insertQuery("INSERT INTO question_main(header,userID,postdate) VALUES('".$values['header']."',".$values['userID'].",NOW());");
            $connection->insertQuery("INSERT INTO question_content(id,text) VALUES(".$connection->lastInserted().",'".$values['content']."');");
        }
    }

?>