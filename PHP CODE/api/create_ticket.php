<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-Width');
    include_once '../configuration/Database.php';
    include_once '../methods/Ticket.php';

    $database = new Database();
    $conn = $database->connect();
    $ticket = new Ticket($conn);

    $data = json_decode(file_get_contents("php://input"));
    $ticket->user_name = $data->user_name;
    $ticket->phone = $data->phone;
    $ticket->timing = $data->timing;
    $ticket->valid = 1;

    if($ticket->create_ticket()){
        echo 'New ticket created successfully';
    }else{
        echo 'Failed in creating a ticket';
    }
?>