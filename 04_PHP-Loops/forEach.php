<?php

// syntax for foreach loop in PHP
/*
foreach($array as $value){
    // code to be executed
}
*/

// example of foreach loop: To print array elements
// $colors = array("red", "green", "blue", "yellow");
// $colors = ["red", "green", "blue", "yellow"];

$colors = [
    // Reds
    "red", "crimson", "firebrick", "darkred", "indianred", "lightcoral", 
    "salmon", "darksalmon", "lightsalmon", "tomato", "orangered", "coral",
    
    // Pinks
    "pink", "lightpink", "hotpink", "deeppink", "palevioletred", "mediumvioletred",
    
    // Oranges
    "orange", "darkorange", "peachpuff", "papayawhip", "moccasin", "bisque",
    
    // Yellows
    "yellow", "gold", "lightyellow", "lemonchiffon", "lightgoldenrodyellow", 
    "palegoldenrod", "khaki", "darkkhaki",
    
    // Purples
    "purple", "indigo", "darkviolet", "darkorchid", "darkmagenta", "blueviolet",
    "mediumorchid", "mediumpurple", "mediumslateblue", "slateblue", "darkslateblue",
    "rebeccapurple", "plum", "violet", "orchid", "fuchsia", "magenta", "thistle", "lavender",
    
    // Greens
    "green", "darkgreen", "forestgreen", "seagreen", "mediumseagreen", "lightseagreen",
    "darkseagreen", "limegreen", "lime", "springgreen", "mediumspringgreen", 
    "lightgreen", "palegreen", "darkslategray", "darkolivegreen", "olive",
    "olivedrab", "yellowgreen", "lawngreen", "chartreuse", "greenyellow",
    
    // Cyans/Aquas
    "cyan", "aqua", "lightcyan", "paleturquoise", "aquamarine", "turquoise",
    "mediumturquoise", "darkturquoise", "darkslategrey", "teal", "darkcyan",
    
    // Blues
    "blue", "darkblue", "mediumblue", "navy", "midnightblue", "royalblue",
    "cornflowerblue", "dodgerblue", "deepskyblue", "lightskyblue", "skyblue",
    "lightblue", "powderblue", "steelblue", "lightsteelblue", "cadetblue", "aliceblue",
    
    // Browns
    "brown", "maroon", "saddlebrown", "sienna", "chocolate", "peru", "sandybrown",
    "burlywood", "tan", "rosybrown", "wheat", "navajowhite", "blanchedalmond",
    "cornsilk",
    
    // Whites
    "white", "snow", "honeydew", "mintcream", "azure", "ghostwhite", "whitesmoke",
    "seashell", "beige", "oldlace", "floralwhite", "ivory", "antiquewhite",
    "linen", "lavenderblush", "mistyrose",
    
    // Grays
    "gray", "grey", "gainsboro", "lightgray", "lightgrey", "silver", "darkgray",
    "darkgrey", "dimgray", "dimgrey", "lightslategray", "lightslategrey", 
    "slategray", "slategrey", "black"
];


foreach($colors as $color){
    echo $color . "<br>";
}



// example of for loop to achieve the same result
// echo count($colors);
// for($i=0; $i< count($colors); $i++){
//     echo $colors[$i] . "<br>";
// }