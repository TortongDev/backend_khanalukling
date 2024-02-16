<?php
class Content {
    public function __construct() {
        header('Content-type: application/json');
        header('Access-Control-Allow-Origin: *');
    }
    public static function contentAll() {
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
                "contentID"         => 1,
                "contentTopic"      => "news 1 test",
                "contentDesc"       => "lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem",
                "contentDateStart"  => "2024-02-16",
                "contentDateEnd"    => "2024-12-16",
                "status"            => true,

            ),
            array(
                "contentID"         => 1,
                "contentTopic"      => "news 1 test",
                "contentDesc"       => "lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem",
                "contentDateStart"  => "2024-02-16",
                "contentDateEnd"    => "2024-12-16",
                "status"            => true,

            ),
            array(
                "contentID"         => 1,
                "contentTopic"      => "news 1 test",
                "contentDesc"       => "lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem",
                "contentDateStart"  => "2024-02-16",
                "contentDateEnd"    => "2024-12-16",
                "status"            => true,

            ),
            array(
                "contentID"         => 1,
                "contentTopic"      => "news 1 test",
                "contentDesc"       => "lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem",
                "contentDateStart"  => "2024-02-16",
                "contentDateEnd"    => "2024-12-16",
                "status"            => true,

            ),
            array(
                "contentID"         => 1,
                "contentTopic"      => "news 1 test",
                "contentDesc"       => "lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem",
                "contentDateStart"  => "2024-02-16",
                "contentDateEnd"    => "2024-12-16",
                "status"            => true,

            ),
            array(
                "contentID"         => 1,
                "contentTopic"      => "news 1 test",
                "contentDesc"       => "lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem",
                "contentDateStart"  => "2024-02-16",
                "contentDateEnd"    => "2024-12-16",
                "status"            => true,

            ),
            array(
                "contentID"         => 1,
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