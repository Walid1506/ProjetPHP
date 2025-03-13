<?php
include("db_connect.php");
$request_method = $_SERVER["REQUEST_METHOD"];
switch($request_method)
{
    case 'GET':
        if(!empty($_GET["id"]))
        {
            $id=intval($_GET["id"]);
            getVoiture($id);
        }
        else 
        {
            getVoitures();
        }
break;
case 'POST':
    AddVoiture();
    break;
case 'PUT':
    $id = intval($_GET["id"]);
    updateVoiture($id);
    break;
case 'DELETE':
    $id=intval($_GET["id"]);
    deleteVoiture($id);
    break;
default:
    header("HTTP/1.0 405 Method Not Allowed");
    break;
}
function getVoitures()
{
    global $conn;
    $query = "SELECT * FROM voiture";
    $response = array();
    $conn->query("SET NAMES utf8");
    $result = $conn->query($query);
    while ( $row = $result->fetch() )
    {
        $response[] = $row;
    }
    $result->closeCursor();
    header('Content-Type: application/json');
    echo json_encode($response, JSON_PRETTY_PRINT);
}
function getVoiture($id=0)
{
    global $conn;
    $query = "SELECT * FROM voiture";
    if($id != 0)
    {
        $query .= " WHERE id=".$id." LIMIT 1";

    }
    $conn->query("SET NAMES utf8");
    $result = $conn->query($query);
    while ( $row = $result->fetch() )
    {
        $response[] = $row;
    }
    header( 'Content-Type: application/json');
    echo json_encode($response, JSON_PRETTY_PRINT);
}
function AddVoiture(){
    global $conn;
    $marque = $_POST["marque"];
    $modele = $_POST["modele"];
    $annee = $_POST["annee"];
    echo $query="INSERT INTO voiture(marque, modele, annee) VALUES ('".$marque."','".$modele."','".$annee."')";
    $conn->query("SET NAMES utf8");
    if($conn->query($query))
    {
        $response=array('status' =>1,'status_message'=>'voiture ajouté avec succès.');
    
    }
    else{
        $response=array('status' =>0,'status_message'=>'ERREUR!');
    }
    header( 'Content-Type: application/json');
    echo json_encode($response);

}
function updateVoiture($id)
{
    global $conn;

$_PUT=array();
    parse_str(file_get_contents("php://input"), $_PUT);
    $marque = $_PUT["marque"];
    $modele = $_PUT["modele"];
    $annee = $_PUT["annee"];
    $query = "UPDATE voiture SET marque = '".$marque."', modele = '".$modele."', annee = '".$annee."' WHERE id = '".$id."'";
    $conn->query("SET NAMES utf8");
    if($conn->query($query))
    {
        $response=array('status' =>1,'status_message'=>'voiture mise à jour avec succès.');
    
    }
    else{
        $response=array('status' =>0,'status_message'=>'ERREUR!');
    }
    header( 'Content-Type: application/json');
    echo json_encode($response);
}
function deleteVoiture($id)
{
    global $conn;
    $query = "DELETE FROM voiture WHERE id = ".$id;
    $conn->query("SET NAMES utf8");
    if($conn->query($query))
    {
        $response=array('status' =>1,'status_message'=>'voiture supp avec succès.');
    
    }
    else{
        $response=array('status' =>0,'status_message'=>'ERREUR!');
    }
    header( 'Content-Type: application/json');
    echo json_encode($response);
}
