<?php
require __DIR__ . '/vendor/autoload.php'; // Google API Client Library

try {
    // Google Client
    $client = new \Google_Client();
    $client->setApplicationName('The table');
    $client->setScopes(['https://www.googleapis.com/auth/spreadsheets']);
    $client->setAccessType('offline');
    $path = __DIR__ . '/credentials.json';
    $client->setAuthConfig($path);

    // Sheets Service
    $service = new Google\Service\Sheets($client);

    
    $spreadsheetId = '1uwQI4ppiPoQWETs3BOu_1hsBcfc-Ll6l5zhWyZI1I_g';

    
    $range = 'Sheet1!A:D';

    // Получаем данные с доски объявлений
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = $_POST["email"] ?? '';
        $categories = $_POST["categories"] ?? '';
        $title = $_POST["title"] ?? '';
        $description = $_POST['text'] ?? '';

        
        $values = [
            [$email, $categories, $title, $description]
        ];
    }

    // Записываем данные в таблицу
    $body = new Google_Service_Sheets_ValueRange([
        'values' => $values
    ]);
    $params = [
        'valueInputOption' => 'RAW'
    ];

    // Выполняем запись данных
    $result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);

} catch (Exception $e) {
    echo $e->getMessage() . ' save.php' . $e->getLine() . ' ' . $e->getFile() . ' ' . $e->getCode();
}

// Возврат на страницу 
header('Location: alex4.php');
exit();
?>