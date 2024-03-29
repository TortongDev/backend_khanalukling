
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
        $topic = filter_input(INPUT_GET,"topic", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $content_description = filter_input(INPUT_GET,"content_description", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        
        $topic = isset($topic) ? htmlspecialchars(trim($topic)) : '';
        $content_description = isset($content_description) ? htmlspecialchars(trim($content_description)) : '';
        $conn = new Connection(true);
       
       $stmt = $conn->pdo->prepare("INSERT INTO tb_content (
            topic, 
            date_start, 
            date_end, 
            content_description, 
            content_text
        ) 
        VALUES (?,?,?,?,?)");

        $stmt->execute([
            $topic,
            $_POST['date_start'],
            $_POST['date_end'],
            $content_description,
            $_POST['editor']
        ]);
    }
    public function getContent($token){
        $conn = new Connection(true);
        $data = $conn->pdo->query("
            SELECT 
                topic, 
                date_start, 
                date_end, 
                content_description, 
                content_text 
            FROM tb_content WHERE 1=1
        ");
        while($r = $data->fetch(PDO::FETCH_ASSOC)):
            $json[] = array(
                'topic'        => $r['topic'],
                'date_start'   => $r['date_start'],
                'date_end'     => $r['date_end'],
                'content_desc' => $r['content_description'],
                'content_type' => $r['content_text']
            );
        endwhile;
        echo json_encode($json);
    }
}