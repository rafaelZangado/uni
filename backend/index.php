<?php

function getMovieDetails($movieId, $apiKey, $token) {
    $url = "https://api.themoviedb.org/3/movie/{$movieId}?api_key={$apiKey}";
    
    // Inicializa a sessão cURL
    $ch = curl_init();

    // Configurações da requisição cURL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer {$token}",
        "Content-Type: application/json;charset=utf-8"
    ]);

    // Executa a requisição e armazena a resposta
    $response = curl_exec($ch);

    // Verifica se ocorreu algum erro
    if (curl_errno($ch)) {
        echo 'Erro na requisição: ' . curl_error($ch);
    }

    // Fecha a sessão cURL
    curl_close($ch);

    return json_decode($response, true);
}

// Sua chave de API e token
$apiKey = '332bdec5f05687e71c3cf88707511ddf';
$token = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIzMzJiZGVjNWYwNTY4N2U3MWMzY2Y4ODcwNzUxMWRkZiIsIm5iZiI6MTcyMTM4NzgwOC43MjM2Miwic3ViIjoiNjJkN2YxZWUxMjgzZTkwMDRlMTNkZDI0Iiwic2NvcGVzIjpbImFwaV9yZWFkIl0sInZlcnNpb24iOjF9.tNeARtR_QzBcwpeDFjXcpsDTxovXqeQmtdfae35gZOE';

// ID do filme que você quer buscar os detalhes
$movieId = 550; // Por exemplo, 550 é o ID do filme "Fight Club"

$movieDetails = getMovieDetails($movieId, $apiKey, $token);

// Exibe os detalhes do filme
echo '<pre>';
print_r($movieDetails);
echo '</pre>';


