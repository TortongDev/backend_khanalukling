<?php 
require_once(dirname(__DIR__) ."/App/Connection.php");
class Migration
{
    public function __construct(){
        $conn = new Connection(true);
        $check_table = $conn->pdo->query("SHOW TABLES");
        $r = $check_table->fetch(PDO::FETCH_ASSOC);
        if(!empty($r)):
            echo "มีตารางแล้ว";
            // $drop = $conn->pdo->exec("DROP TABLE tb_content");   
            return;
        else:
            $sql = "CREATE TABLE tb_content (id int(12) primary key auto_increment , topic varchar(255), date_start varchar(255), date_end varchar(255), content_status char(1) ,  content_description varchar(255), content_text longtext)";
            $stmt = $conn->pdo->query($sql);
            if($stmt){
                echo "create table success.";
                return;
            }else{
                echo "create table false.";
                return;
            }
        endif;
                    
    }
}
new Migration();

// while($r = $table->fetch(PDO::FETCH_ASSOC)):

// endwhile;
// $create = new Controllers();
// $create->api();