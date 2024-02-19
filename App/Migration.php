<?php 
require_once(dirname(__DIR__) ."/App/Connection.php");
class Migration
{
    public function __construct(){
        $conn = new Connection(true);
        $conn->pdo->query("DROP TABLE tb_content")->execute();

        // $check_table = $conn->pdo->query("SHOW TABLES");
        // while($r = $check_table->fetch(PDO::FETCH_ASSOC)):
        //     echo "<pre>";
        //     print_r($r['Tables_in_db_khanalukling']);
        //     echo "</pre>";
        // endwhile;

        // $check_table = $conn->pdo->query("SHOW TABLES");
        // $r = $check_table->fetch(PDO::FETCH_ASSOC);
        // if ($r['Tables_in_db_khanalukling'] === 'tb_constent'):
        //     echo "create table false.";
        // else:
        //     echo "<pre>";
        //     print_r($r['Tables_in_db_khanalukling']);
        //     echo "</pre>";
        //     $sql = "CREATE TABLE tb_content (id int(12) primary key auto_increment , topic varchar(255), date_start varchar(255), date_end varchar(255), content_status char(1) ,  content_description varchar(255), content_text longtext)";
        //     $stmt = $conn->pdo->query($sql);
        //     if($stmt){
        //         echo "create table success.";
        //     }else{
        //         echo "create table false.";
        //     }
            
        // endif;
        
    }
}
new Migration();

// while($r = $table->fetch(PDO::FETCH_ASSOC)):

// endwhile;
// $create = new Controllers();
// $create->api();