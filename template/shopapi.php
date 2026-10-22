<?php
    header("Content-Type: application/json");
    header('Access-Control-Allow-Origin: *'); 
    $json = json_decode(file_get_contents('php://input'), TRUE);
    $returnjson = array();
    $returnjson['error'] = array();
    
    if($json['action'] == 'add') {
        $result = createCartEntry($json['token'], $json['articleid'], $json['amount']);
        $returnjson['aid'] = $json['articleid'];
        $returnjson['result'] = $result;
        echo json_encode($returnjson);
        exit();
    } else if($json['action'] == 'update') {
        $result = updateCartEntry($json['token'], $json['articleid'], $json['amount']);
        $returnjson['aid'] = $json['articleid'];
        $returnjson['result'] = $result;
        echo json_encode($returnjson);
        exit();
    } else if($json['action'] == 'delete') {
        $result = trashCartEntry($json['cartentryid']);
        $returnjson['result'] = $result;
        echo json_encode($returnjson);
        exit();
    }
    exit();
?>
