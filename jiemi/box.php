
<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

if (isset($_GET['url'])) {
    $url = $_GET['url'];
    // 处理 $url，例如进行爬取或其他操作
    // 这里以返回接收到的 URL 为例
    echo json_encode(["received_url" => $url]);
} else {
    echo json_encode(["error" => "缺少 url 参数"]);
}
?>