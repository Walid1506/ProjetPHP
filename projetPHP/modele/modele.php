<?php
function insertEtu($marque, $modele, $annee){
$url='http://127.0.0.1/api/voiture.php';
$data = array(
    'marque' => $_POST["marque"],
    'modele' => $_POST["modele"],
    'annee' => $_POST["annee"]
);
$options = array(
    'http' => array(
        'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data)
    )
);
$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);
            return $result;
}
fuction updatevoit($voiture,$marque, $modele, $annee){
    $url='http://127.0.0.1/api/voiture.php';
    $data = array(
        'marque' => $_POST["marque"],
        'modele' => $_POST["modele"],
        'annee' => $_POST["annee"]
    );
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            $response = curl_exec($ch);
            curl_close($ch);
            if (!$response) {
                return false;
            }

}
function deleteVoit($voiture){
    $url='http://127.0.0.1/api/voiture.php?id='.$voiture;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

}

function selectVoit(){
    $url='http://127.0.0.1/api/voiture.php';
    $options = array(
        'http' => array(
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context = stream_context_create($options);
    $voitures = file_get_contents($url, false, $context);
    $voitures=substr($voitures,1);
    return $voitures


}
            ?>    