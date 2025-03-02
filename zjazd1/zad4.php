<?php
$words = explode(" ", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
been the industry's standard dummy text ever since the 1500s, when an unknown printer took a 
galley of type and scrambled it to make a type specimen book. It has survived not only five 
centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was 
popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
and more recently with desktop publishing software like Aldus PageMaker including versions of 
Lorem Ipsum." );
$znaki = array ( ",", "'", ".", "!", "?", ":", ";");
for ($i = 0; $i < count($words); $i++) {
    $word_chars = str_split($words[$i]);
    $intersect = array_intersect($word_chars, $znaki);
    if (!empty($intersect) && isset($words[$i + 1])) {
            $words[$i] = $words[$i+1];
            $i = $i - 1;
    }
}
$mapa = [];
foreach (array_chunk($words, 2) as $pair) {
    if (count($pair) === 2) {
        $mapa[$pair[0]] = $pair[1];
    }
}

foreach ($mapa as $key => $value) {
    echo "$key => $value" . "<br>";
}

?>
