<?php
$cities = [
  "london" => [
    "title" => "London",
    "description" => "<p>London is the capital city of England and one of the most famous cities in the world. It sits along the River Thames and is rich in history and culture.</p>
    <p>London is home to iconic landmarks like the Big Ben, the Tower Bridge, Buckingham Palace, and the London Eye. It is also a global financial hub and a melting pot of different cultures.</p>",
    "image" => "https://images.unsplash.com/photo-1505761671935-60b3a7427bad?auto=format&fit=crop&w=1000&q=80",
    "population" => "9 million",
    "nickname" => "The Old Smoke",
    "country" => "United Kingdom"
  ],
  "tokyo" => [
    "title" => "Tokyo",
    "description" => "<p>Tokyo, Japan's bustling capital, blends the ultramodern with the traditional. Neon-lit skyscrapers stand beside ancient temples, and quiet gardens contrast with busy Shibuya Crossing.</p>
    <p>Known for its cutting-edge technology, fashion, and cuisine, Tokyo is also famous for cherry blossoms, sumo wrestling, and the iconic Tokyo Tower.</p>",
    "image" => "https://images.unsplash.com/photo-1549693578-d683be217e58?auto=format&fit=crop&w=1000&q=80",
    "population" => "37 million",
    "nickname" => "The Eastern Capital",
    "country" => "Japan"
  ],
  "paris" => [
    "title" => "Paris",
    "description" => "<p>Paris, often called the 'City of Light', is known worldwide for its art, fashion, gastronomy, and culture. The city's 19th-century cityscape is crisscrossed by wide boulevards and the River Seine.</p>
    <p>Famous landmarks like the Eiffel Tower, Notre-Dame Cathedral, and the Louvre Museum attract millions of visitors each year.</p>",
    "image" => "https://images.unsplash.com/photo-1502602898657-3e91760cbb34?auto=format&fit=crop&w=1000&q=80",
    "population" => "11 million",
    "nickname" => "La Ville Lumière",
    "country" => "France"
  ]
];

header('Content-Type: application/json');

if (isset($_GET['city']) && array_key_exists($_GET['city'], $cities)) {
  echo json_encode($cities[$_GET['city']]);
} else {
  echo json_encode(["error" => "City not found."]);
}
?>
