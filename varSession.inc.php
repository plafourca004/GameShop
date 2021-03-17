<?php

session_start();


$imgFolder = "img/";
$psFolder = $imgFolder."playstation/";
$pcFolder = $imgFolder."pc/";
$xboxFolder = $imgFolder."xbox/";

$_SESSION["Playstation"] = [
    [
        "nom" => "Assassin's Creed : Valahalla",
        "id" => "jps1",
        "prix" => 50,
        "stock" => 1,
        "imageURL" => $psFolder."acValhalla.jpg"
    ],
    [
        "nom" => "Call of Duty : Cold War",
        "id" => "jps2",
        "prix" => 65,
        "stock" => 9,
        "imageURL" => $psFolder."codColdWar.jpg"
    ],
    [
        "nom" => "Cyberpunk 2077",
        "id" => "jps3",
        "prix" => 50,
        "stock" => 15,
        "imageURL" => $psFolder."cyberpunk2077.jpg"
    ],
    [
        "nom" => "FIFA 21",
        "id" => "jps4",
        "prix" => 70,
        "stock" => 11,
        "imageURL" => $psFolder."fifa21.jpg"
    ],
    [
        "nom" => "Fortnite",
        "id" => "jps5",
        "prix" => 0,
        "stock" => 1000,
        "imageURL" => $psFolder."fortnite.jpg"
    ],
    [
        "nom" => "Minecraft",
        "id" => "jps7",
        "prix" => 25,
        "stock" => 45,
        "imageURL" => $psFolder."minecraft.jpg"
    ],
    [
        "nom" => "Marvel's Spider-Man",
        "id" => "jps8",
        "prix" => 40,
        "stock" => 8,
        "imageURL" => $psFolder."spiderman.jpg"
    ]
];


$_SESSION["PC"] = [
    [
        "nom" => "Civilization VI",
        "id" => "jpc1",
        "prix" => 12,
        "stock" => 8,
        "imageURL" => $pcFolder."civ6.jpg"
    ],
    [
        "nom" => "Counter Strike Global Offensive",
        "id" => "jpc2",
        "prix" => 5,
        "stock" => 7,
        "imageURL" => $pcFolder."csgo.jpg"
    ],
    [
        "nom" => "Fortnite",
        "id" => "jpc3",
        "prix" => 0,
        "stock" => 1000,
        "imageURL" => $pcFolder."fortnite.jpg"
    ],
    [
        "nom" => "Minecraft",
        "id" => "jpc4",
        "prix" => 20,
        "stock" => 8,
        "imageURL" => $pcFolder."minecraft.jpg"
    ],
    [
        "nom" => "Rocket League",
        "id" => "jpc5",
        "prix" => 25,
        "stock" => 12,
        "imageURL" => $pcFolder."rocketLeague.jpg"
    ],
];


$_SESSION["Xbox"] = [
    [
        "nom" => "Assassin's Creed : Valahalla",
        "id" => "jx1",
        "prix" => 50,
        "stock" => 7,
        "imageURL" => $xboxFolder."acValhalla.jpg"
    ],
    [
        "nom" => "Civilisation 6",
        "id" => "jx2",
        "prix" => 15,
        "stock" => 11,
        "imageURL" => $xboxFolder."civ6.jpg"
    ],
    [
        "nom" => "Fallout 4",
        "id" => "jx3",
        "prix" => 30,
        "stock" => 74,
        "imageURL" => $xboxFolder."fallout4.jpg"
    ],
    [
        "nom" => "FIFA 21",
        "id" => "jx4",
        "prix" => 70,
        "stock" => 4,
        "imageURL" => $xboxFolder."fifa21.jpg"
    ],
    [
        "nom" => "NBA 2K21",
        "id" => "jx5",
        "prix" => 70,
        "stock" => 14,
        "imageURL" => $xboxFolder."nba2k21.jpg"
    ]
];

$_SESSION["categories"] = ["Playstation","Xbox","PC"];

?>