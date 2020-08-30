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
    $ticket->ticket_id = $data->ticket_id;

    $output = $ticket->view_user();

    $ticketsArr = array();
    if($row = $output->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $user = array(
            'user_name' => $user_name,
                'phone' => $phone,
                'show_timing' => $timing
            );
        array_push($ticketsArr, $user); 
        echo json_encode($ticketsArr);
    }else{
        echo 'No user whith this id';
    }
?>