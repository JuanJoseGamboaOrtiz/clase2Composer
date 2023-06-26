<?php

require "../vendor/autoload.php";
use App\Connect;

// Create Router instance
$router = new \Bramus\Router\Router();
/**----- TABLA ACADEMIC_AREA */
$router->get("/academic",function(){
    $conn = new Connect();
    $res = $conn->conn->prepare("SELECT * FROM academic_area");
    $res->execute();    
    $res = $res->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($res);
    // print_r(file_get_contents("php://input"));
});
$router->post("/academic",function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $conn = new Connect();
    $res = $conn->conn->prepare("INSERT INTO academic_area(id_area,id_staff,id_position,id_journey)VALUES (:area,:staff,:position,:journey)");
    $res->bindValue('area', $_DATA['id_area']);
    $res->bindValue('staff', $_DATA['id_staff']);
    $res->bindValue('position', $_DATA['id_position']);
    $res->bindValue('journey', $_DATA['id_journey']);
    $res->execute();    
    $res = $res->rowCount();
    echo json_encode($res);
    // print_r(file_get_contents("php://input"));
});

$router->put("/academic", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $conn = new Connect();
    $res = $conn->conn->prepare("UPDATE academic_area SET id_area = :area,id_staff=:staff,id_position=:position,id_journey=:journey WHERE id = :id;");
    $res->bindValue('id', $_DATA['id']);
    $res->bindValue('area', $_DATA['id_area']);
    $res->bindValue('staff', $_DATA['id_staff']);
    $res->bindValue('position', $_DATA['id_position']);
    $res->bindValue('journey', $_DATA['id_journey']);
    $res->execute();
    $res = $res->rowCount();
    echo json_encode($res);
});

$router->delete("/academic", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $conn = new Connect();
    $res = $conn->conn->prepare("DELETE FROM academic_area WHERE id = :id;");
    $res->bindValue('id', $_DATA['id']);
    $res->execute();    
    $res = $res->rowCount();
    echo json_encode($res);
    // print_r(file_get_contents("php://input"));
});
/** --- TABLA ACADEMIC_AREA */



/** TABLA ADMIN_AREA */
$router->get("/admin", function(){
    $conn = new Connect();
    $res = $conn->conn->prepare("SELECT * FROM admin_area");
    $res->execute();    
    $res = $res->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($res);
    // print_r(file_get_contents("php://input"));
});

$router->post("/admin",function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $conn = new Connect();
    $res = $conn->conn->prepare("INSERT INTO admin_area(id_area,id_staff,id_position,id_journey)VALUES (:area,:staff,:position,:journey)");
    $res->bindValue('area', $_DATA['id_area']);
    $res->bindValue('staff', $_DATA['id_staff']);
    $res->bindValue('position', $_DATA['id_position']);
    $res->bindValue('journey', $_DATA['id_journey']);
    $res->execute();    
    $res = $res->rowCount();
    echo json_encode($res);
    // print_r(file_get_contents("php://input"));
});

$router->put("/admin", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $conn = new Connect();
    $res = $conn->conn->prepare("UPDATE admin_area SET id_area = :area,id_staff=:staff,id_position=:position,id_journey=:journey WHERE id = :id;");
    $res->bindValue('id', $_DATA['id']);
    $res->bindValue('area', $_DATA['id_area']);
    $res->bindValue('staff', $_DATA['id_staff']);
    $res->bindValue('position', $_DATA['id_position']);
    $res->bindValue('journey', $_DATA['id_journey']);
    $res->execute();
    $res = $res->rowCount();
    echo json_encode($res);
});


$router->delete("/admin", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $conn = new Connect();
    $res = $conn->conn->prepare("DELETE FROM admin_area WHERE id = :id;");
    $res->bindValue('id', $_DATA['id']);
    $res->execute();    
    $res = $res->rowCount();
    echo json_encode($res);
    // print_r(file_get_contents("php://input"));
});

/** TABLA ADMIN_AREA */

/** TABLA AREAS */

$router->get("/areas", function(){
    $conn = new Connect();
    $res = $conn->conn->prepare("SELECT * FROM areas");
    $res->execute();    
    $res = $res->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($res);
    // print_r(file_get_contents("php://input"));
});


$router->post("/areas",function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $conn = new Connect();
    $res = $conn->conn->prepare("INSERT INTO areas(name_area)VALUES (:area)");
    $res->bindValue('area', $_DATA['area']);
    $res->execute();    
    $res = $res->rowCount();
    echo json_encode($res);
    // print_r(file_get_contents("php://input"));
});

$router->put("/areas", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $conn = new Connect();
    $res = $conn->conn->prepare("UPDATE areas SET name_area = :area WHERE id = :id;");
    $res->bindValue('id', $_DATA['id']);
    $res->bindValue('area', $_DATA['area']);
    $res->execute();
    $res = $res->rowCount();
    echo json_encode($res);
});

$router->delete("/areas", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $conn = new Connect();
    $res = $conn->conn->prepare("DELETE FROM areas WHERE id = :id;");
    $res->bindValue('id', $_DATA['id']);
    $res->execute();    
    $res = $res->rowCount();
    echo json_encode($res);
    // print_r(file_get_contents("php://input"));
});

/** TABLA AREAS */

/** TABLA CAMPERS */

$router->get("/campers", function(){
    $conn = new Connect();
    $res = $conn->conn->prepare("SELECT * FROM campers");
    $res->execute();    
    $res = $res->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($res);
    // print_r(file_get_contents("php://input"));
});

$router->post("/campers",function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $conn = new Connect();
    $res = $conn->conn->prepare("INSERT INTO campers(id_team_schedule,id_route,id_trainer,id_psycologist,id_teacher,id_level,id_journey,id_staff)VALUES (:team,:route,:trainer,:psycologist,:teacher,:level,:journey,:staff)");
    $res->bindValue('team', $_DATA['id_team_schedule']);
    $res->bindValue('route', $_DATA['id_route']);
    $res->bindValue('trainer', $_DATA['id_trainer']);
    $res->bindValue('psycologist', $_DATA['id_psycologist']);
    $res->bindValue('teacher', $_DATA['id_teacher']);
    $res->bindValue('level', $_DATA['id_level']);
    $res->bindValue('journey', $_DATA['id_journey']);
    $res->bindValue('staff', $_DATA['id_staff']);
    $res->execute();    
    $res = $res->rowCount();
    echo json_encode($res);
    // print_r(file_get_contents("php://input"));
});


$router->put("/campers", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $conn = new Connect();
    $res = $conn->conn->prepare("UPDATE campers SET id_team_schedule=:team,id_route=:route,id_trainer=:trainer,id_psycologist=:psycologist,id_teacher=:teacher,id_level=:level,id_journey=:journey,id_staff=:staff WHERE id = :id;");
    $res->bindValue('id', $_DATA['id']);
    $res->bindValue('team', $_DATA['id_team_schedule']);
    $res->bindValue('route', $_DATA['id_route']);
    $res->bindValue('trainer', $_DATA['id_trainer']);
    $res->bindValue('psycologist', $_DATA['id_psycologist']);
    $res->bindValue('teacher', $_DATA['id_teacher']);
    $res->bindValue('level', $_DATA['id_level']);
    $res->bindValue('journey', $_DATA['id_journey']);
    $res->bindValue('staff', $_DATA['id_staff']);
    $res->execute();
    $res = $res->rowCount();
    echo json_encode($res);
});


$router->delete("/campers", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $conn = new Connect();
    $res = $conn->conn->prepare("DELETE FROM campers WHERE id = :id;");
    $res->bindValue('id', $_DATA['id']);
    $res->execute();    
    $res = $res->rowCount();
    echo json_encode($res);
    // print_r(file_get_contents("php://input"));
});

/** TABLA CAMPERS */


/** TABLA CHAPTERS */

$router->get("/chapters", function(){
    $conn = new Connect();
    $res = $conn->conn->prepare("SELECT * FROM chapters");
    $res->execute();    
    $res = $res->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($res);
    // print_r(file_get_contents("php://input"));
});

$router->post("/chapters",function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $conn = new Connect();
    $res = $conn->conn->prepare("INSERT INTO chapters(id_thematic_units,name_chapter,start_date,end_date,description,duration_days)VALUES (:thematic,:name,:start,:end,:description,:duration)");
    $res->bindValue('thematic', $_DATA['id_thematic_units']);
    $res->bindValue('name', $_DATA['name_chapter']);
    $res->bindValue('start', $_DATA['start_date']);
    $res->bindValue('end', $_DATA['end_date']);
    $res->bindValue('description', $_DATA['description']);
    $res->bindValue('duration', $_DATA['duration_days']);
    $res->execute();    
    $res = $res->rowCount();
    echo json_encode($res);
    // print_r(file_get_contents("php://input"));
});

$router->put("/chapters",function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $conn = new Connect();
    $res = $conn->conn->prepare("UPDATE chapters SET id_thematic_units=:thematic,name_chapter=:name,start_date=:start,end_date=:end,description=:description,duration_days=:duration  WHERE id = :id;");
    $res->bindValue('id', $_DATA['id']);
    $res->bindValue('thematic', $_DATA['id_thematic_units']);
    $res->bindValue('name', $_DATA['name_chapter']);
    $res->bindValue('start', $_DATA['start_date']);
    $res->bindValue('end', $_DATA['end_date']);
    $res->bindValue('description', $_DATA['description']);
    $res->bindValue('duration', $_DATA['duration_days']);
    $res->execute();    
    $res = $res->rowCount();
    echo json_encode($res);
    // print_r(file_get_contents("php://input"));
});

$router->delete("/chapters", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $conn = new Connect();
    $res = $conn->conn->prepare("DELETE FROM chapters WHERE id = :id;");
    $res->bindValue('id', $_DATA['id']);
    $res->execute();    
    $res = $res->rowCount();
    echo json_encode($res);
    // print_r(file_get_contents("php://input"));
});

/** TABLA CHAPTERS */

/** TABLA CITIES */
$router->get("/cities", function(){
    $conn = new Connect();
    $res = $conn->conn->prepare("SELECT * FROM cities");
    $res->execute();    
    $res = $res->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($res);
    // print_r(file_get_contents("php://input"));
});

$router->post("/cities",function() {
    $_DATA=json_decode(file_get_contents("php://input"),true);
    $conn= new Connect();
    $res= $conn-> conn->prepare("INSERT INTO cities (name_city,id_region) VALUES (:city,:region)");
    $res->bindValue('city', $_DATA['name_city']);
    $res->bindValue('region', $_DATA['id_region']);
    $res->execute();
    $res = $res->rowCount();
    echo json_encode($res);
});

$router->put('/cities',function(){
    $_DATA=json_decode(file_get_contents("php://input"),true);
    $conn= new Connect();
    $res= $conn->conn->prepare("UPDATE cities SET name_city=:city,id_region=:region WHERE id=:id");
    $res->bindValue('id', $_DATA['id']);
    $res->bindValue('city', $_DATA['name_city']);
    $res->bindValue('region', $_DATA['id_region']);
    $res->execute();
    $res = $res->rowCount();
    echo json_encode($res);
});

$router->delete("/cities", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $conn = new Connect();
    $res = $conn->conn->prepare("DELETE FROM cities WHERE id = :id;");
    $res->bindValue('id', $_DATA['id']);
    $res->execute();    
    $res = $res->rowCount();
    echo json_encode($res);
    // print_r(file_get_contents("php://input"));
});

/** TABLA CITIES */

/** TABLA design_area */

/** TABLA design_area */

$router->run();