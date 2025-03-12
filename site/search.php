<?php
if (isset($_GET['q']) && !empty($_GET['q'])) {
    $searchTerm = trim($_GET['q']);
    $apiKey = "AIzaSyDVRyJqC-UuqABNxBWtv5dBdEG5roVyQ0Q";

    // Apel către API-ul Google Places
    $url = "https://maps.googleapis.com/maps/api/place/autocomplete/json?input=" . urlencode($searchTerm) . "&key=" . $apiKey;
    
    $response = file_get_contents($url);
    $data = json_decode($response, true);

    if (!empty($data['predictions'])) {
        // Extragem primul rezultat
        $place_id = $data['predictions'][0]['place_id'];

        // Facem o cerere detaliată pentru a verifica dacă este oraș sau țară
        $detailsUrl = "https://maps.googleapis.com/maps/api/place/details/json?place_id=$place_id&key=$apiKey";
        $detailsResponse = file_get_contents($detailsUrl);
        $detailsData = json_decode($detailsResponse, true);

        // Căutăm tipurile locației
        $types = $detailsData['result']['types'] ?? [];

        // Verificăm dacă este oraș sau țară
        if (in_array('locality', $types) || in_array('country', $types)) {
            // Dacă este valid, trimitem utilizatorul către Booking.com
            $searchTerm = urlencode($searchTerm);
            $affiliateLink = "https://www.booking.com/searchresults.html?aid=YOUR_AFFILIATE_ID&ss=$searchTerm";
            header("Location: $affiliateLink");
            exit();
        } else {
            echo "<script>alert('Locația nu este un oraș sau o țară!'); window.location.href='index.php';</script>";
            exit();
        }
    } else {
        echo "<script>alert('Locația nu există!'); window.location.href='index.php';</script>";
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>
