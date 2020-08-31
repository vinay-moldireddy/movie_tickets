# movie_tickets

#### Following project is about designing *REST interface for a movie theatre ticket booking system*

This project is built on *MySQL* database using **XAMPP** as local HTTP server.
**Postman** is used to make HTTP requests.
Language used is **PHP**

## movie_tickets project has following Files and Directories
```
movie_tickets
 ├──PHP_CODE
 |    ├──api
 |    |   ├──create_ticket.php
 |    |   ├──delete_ticket.php
 |    |   ├──update_timing.php
 |    |   ├──view_tickets.php
 |    |   └──view_user.php
 |    |
 |    ├──config
 |    |   └──Database.php
 |    |   
 |    └──methods
 |        └──Ticket.php
 |
 ├──Postman(SS)
 |
 └──Mysql_Database
      └──movie_tickets.sql
```

## About PHP_CODE

This back end project has been devided into three major parts
- *Database class* to initialize database parameters and create a new *PDO* connection 
- *Ticket class* consisting methods to create and manipulate tickets table in moive_tickets Database
- To create APIs, php files corresponding to each operation are created under api directory

## Functionalites

- [x] An endpoint to book a ticket using a user’s name, phone number, and timings.
- [x] An endpoint to update a ticket timing.
- [x] An endpoint to view all the tickets for a particular time.
- [x] An endpoint to delete a particular ticket.
- [x] An endpoint to view the user’s details based on the ticket id.
- [x] For a particular timing, a maximum of 20 tickets can be booked.
- [ ] Mark a ticket as expired if there is a diff of 8 hours between the ticket timing and current
time
- [ ] delete all the tickets which are expired automatically.

## Calling APIs

#### Create Ticket
URL
```
http://localhost/movie_tickets/api/create_ticket.php
```

Input
```JSON
{
    "user_name": "Vinay Kumar Reddy",
    "phone": "886732340",
    "timing": "2020-09-04 :00:00"
}
```
#### Updating ticket time

URL
```
http://localhost/movie_tickets/api/update_timing.php
```

Input
```json
{
    "ticket_id": "32",
    "timing": "2020-09-04 12:00:00"
}
```
#### View tickets

URL
```
http://localhost/movie_tickets/api/view_tickets.php
```

Input
```json
{
    "timing": "2020-09-04 12:00:00"
}
```

#### View user

URL
```
http://localhost/movie_tickets/api/view_user.php
```

Input
```json
{
    "ticket_id": "32",
}
```
#### Delete tickets

URL
```
http://localhost/movie_tickets/api/delete_ticket.php
```
Input
```json
{
    "ticket_id": "32",
}
```
