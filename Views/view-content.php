<style>
    [data-formula="e=mc^2"] {
        display: none;
    }
</style>
<?php

require_once dirname(__DIR__)."/App/Connection.php";
$conn = new Connection(true);
$data = $conn->pdo->query("select * from tb_content where 1=1");
while($r = $data->fetch(PDO::FETCH_ASSOC)):
echo $r['content_text'];
?>
<?php endwhile; ?>
<script src="../Views/js/config.js"></script>