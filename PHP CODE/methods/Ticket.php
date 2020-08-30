<?php
    class Ticket{

        private $conn;
        private $table = 'tickets';

        public $user_name;
        public $phone;
        public $timing;
        public $valid;
        public $ticket_id;

        public function __construct($conn){
            $this->conn = $conn;
        }

        #1 create ticket
        public function create_ticket(){

            //To check whether we reached maximum ticket limit 
            $res = $this->conn->prepare("SELECT COUNT(*) AS count FROM tickets WHERE timing = :timing");
            $res->bindParam(':timing', $this->timing);
            $res->execute();
            $data=$res->fetch(PDO::FETCH_ASSOC);
            if($data['count'] >20){
                echo 'No more tickets available for this timing, ';
                return false;
            }

            $query = 'INSERT INTO ' . $this->table . ' 
                    SET
                        user_name = :user_name,
                        phone = :phone,
                        timing = :timing,
                        valid = :valid';
            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(':user_name', $this->user_name);
            $stmt->bindParam(':phone', $this->phone);
            $stmt->bindParam(':timing', $this->timing);
            $stmt->bindParam(':valid', $this->valid);

            if($stmt->execute()){
                return true;
            }else{
                printf("Error %s.\n", $stmt->error);
                return false;
            }
        }
        
        #2 update timing of a ticket using ticket_id
        public function update_timing(){
            $query = ' UPDATE ' . $this->table . 
                    ' SET timing = :timing WHERE ticket_id = :ticket_id';
            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(':timing', $this->timing);
            $stmt->bindParam(':ticket_id', $this->ticket_id);

            if($stmt->execute()){
                return true;
            }else{
                printf("Error %s.\n", $stmt->error);
                return false;
            }
        }

        #3 view tickets
        public function view_tickets(){
            $query = 'SELECT user_name, phone, timing FROM tickets
                         WHERE timing = :timing ORDER BY user_name ASC';
            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(':timing', $this->timing);

            $stmt->execute();
            return $stmt;
        }

        #4 delete ticket
        public function delete_ticket(){
            $query = 'DELETE FROM tickets WHERE ticket_id = :ticket_id' ;
            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(':ticket_id', $this->ticket_id);

            if($stmt->execute()){
                return true;
            }else{
                printf("Error %s.\n", $stmt->error);
                return false;
            }
        }

        #5 view user
        public function view_user(){
            $query = 'SELECT * FROM tickets WHERE ticket_id= :ticket_id';
            $stmt = $this->conn->prepare($query);
            
            $stmt->bindParam(':ticket_id', $this->ticket_id);

            $stmt->execute();
            return $stmt;
        }
    }
?>