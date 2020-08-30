<?php
    header('Access_Control_Allow_Origin: *');
    header('Content_Type: application/json');
    header('Access-Control-Allow-Methods: GET');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-Width');
    include_once '../configuration/Database.php';
    include_once '../methods/Ticket.php';
    $database = new Database();
    $conn = $database->connect();
    $ticket = new Ticket($conn);

    $data = json_decode(file_get_contents("php://input"));
    $ticket->timing = $data->timing;

    $output = $ticket->view_tickets();

    $ticketsArr = array();
    $ticketsArr['tickets'] = array();
    while($row = $output->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $ticket_item = array(
           'user_name' => $user_name,
            'phone' => $phone,
            'show_timing' => $timing
        );
        array_push($ticketsArr['tickets'], $ticket_item);
    } 
    echo json_encode($ticketsArr);
?>