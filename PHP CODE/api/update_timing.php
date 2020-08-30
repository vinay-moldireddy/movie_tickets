<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: PUT');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-Width');
    include_once '../configuration/Database.php';
    include_once '../methods/Ticket.php';

    $database = new Database();
    $conn = $database->connect();
    $ticket = new Ticket($conn);

    $data = json_decode(file_get_contents("php://input"));
    $ticket->timing = $data->timing;
    $ticket->ticket_id = $data->ticket_id;

    if($ticket->update_timing()){
        echo 'Timing updated successfully';
    }else{
        echo 'Failed to update the timing';
    }
?>