<?php
class Content {
    public function __construct() {
        header('Content-type: application/json');
        header('Access-Control-Allow-Origin: *');
        session_start();
    }
    public function contentAll($token) {
        echo 'Your Token Api : '.$token;
        if($token !== $_SESSION['CSRF_TOKEN']){
            exit;
        }
        $content = array(
            array(
                "contentID"         => 1,
                "contentTopic"      => "news 1 test",
                "contentDesc"       => "lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem",
                "contentDateStart"  => "2024-02-16",
                "contentDateEnd"    => "2024-12-16",
                "status"            => true,
            ),
            array(
                "contentID"         => 2,
                "contentTopic"      => "news 1 test",
                "contentDesc"       => "lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem",
                "contentDateStart"  => "2024-02-16",
                "contentDateEnd"    => "2024-12-16",
                "status"            => true,

            ),
            array(
                "contentID"         => 3,
                "contentTopic"      => "news 1 test",
                "contentDesc"       => "lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem",
                "contentDateStart"  => "2024-02-16",
                "contentDateEnd"    => "2024-12-16",
                "status"            => true,

            ),
            array(
                "contentID"         => 4,
                "contentTopic"      => "news 1 test",
                "contentDesc"       => "lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem",
                "contentDateStart"  => "2024-02-16",
                "contentDateEnd"    => "2024-12-16",
                "status"            => true,

            ),
            array(
                "contentID"         => 5,
                "contentTopic"      => "news 1 test",
                "contentDesc"       => "lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem",
                "contentDateStart"  => "2024-02-16",
                "contentDateEnd"    => "2024-12-16",
                "status"            => true,

            ),
            array(
                "contentID"         => 6,
                "contentTopic"      => "news 1 test",
                "contentDesc"       => "lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem",
                "contentDateStart"  => "2024-02-16",
                "contentDateEnd"    => "2024-12-16",
                "status"            => true,

            ),
            array(
                "contentID"         => 7,
                "contentTopic"      => "news 1 test",
                "contentDesc"       => "lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem",
                "contentDateStart"  => "2024-02-16",
                "contentDateEnd"    => "2024-12-16",
                "status"            => true,

            ),
            array(
                "contentID"         => 8,
                "contentTopic"      => "news 1 test",
                "contentDesc"       => "lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem",
                "contentDateStart"  => "2024-02-16",
                "contentDateEnd"    => "2024-12-16",
                "status"            => true,

            ),
            
        );
        echo json_encode(array('content'=>$content));
    }
}
?>