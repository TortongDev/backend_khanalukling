
<?php
require_once(dirname(__DIR__) ."/App/Connection.php");
class Controllers {
    public function __construct()
    {
    }
    public function login($id){
        require dirname(__DIR__)."/Views/login.php";
    }
    public function index(){
        require_once(dirname(__DIR__)."/Views/content.form.php");
    }
    public function api(){
        $conn = new Connection(true);
        $stmt = $conn->pdo->prepare("INSERT INTO tb_content (
            topic, date_start, date_end, content_description, content_text) 
            VALUES (?,?,?,?,?)");
        $stmt->execute([
            $_POST['topic'],
            $_POST['date_start'],
            $_POST['date_end'],
            $_POST['content_description'],
            $_POST['editor']
        ]);
    }
    public function getContent(){
        $conn = new Connection(true);
        $data = $conn->pdo->query("select * from tb_content where 1=1");
        while($r = $data->fetch(PDO::FETCH_ASSOC)):
            $json[] = array(
                'content_type' => $r['content_text']
            );
        endwhile;
        echo json_encode($json);
    }
}