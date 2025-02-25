<?php
require_once 'vendor/autoload.php'; 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $name = $_POST['name'] ?? $_POST['bname'];
    $email = $_POST['email'] ?? $_POST['bemail'];
    $phone = $_POST['phone'] ?? $_POST['bphone'];
    $query = $_POST['query'] ?? $_POST['bquery'];
    $location = $_POST['location'] ?? $_POST['blocation'];
    $time = $_POST['time'] ?? $_POST['bintime'];
    $outtime = $_POST['outtime'] ?? $_POST['bouttime'];
    $size = $_POST['size'] ?? $_POST['bsize'];

    // Create Google Client
    $client = new Google_Client();
    $client->setApplicationName('Google Sheets API PHP');
    $client->setScopes(Google_Service_Sheets::SPREADSHEETS);
    $client->setAuthConfig('credentials.json'); 
    $service = new Google_Service_Sheets($client);

    $spreadsheetId = 'bwhrjfbv.ehwv749ndwsvwr/euwhrfuerfe'; 

    $range = 'Sheet1!A1'; 
    $values = [
        [$name, $email, $phone, $query, $location, $time, $outtime, $size]
    ];


    
    $body = new Google_Service_Sheets_ValueRange([
        'values' => $values
    ]);
    $params = [
        'valueInputOption' => 'RAW'
    ];

    $result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);

    echo json_encode(['status' => 'success']);
} else {
  
    echo json_encode(['status' => 'failure']);
}
?>
