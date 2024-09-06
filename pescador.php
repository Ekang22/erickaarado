
<?php

// Define variables with user information
$full_name = "Ericka A.Pescador";
$address = "Pelong 3,Aloran Misamis Occidental";
$contact = "09386743139";
$hobbies = ["Eating", "Tiktok", "Listen Spotify", "Photography", "Sleep"];
$social_media = [
    "Facebook" =>  "www.facebook.com/profile.php?id=100083977405610
",
    "Instagram" => "www.instagram.com/ericka_pescador?igsh=OTBxMTZleXJmbGo5",
    "Tiktok" =>  "www.tiktok.com/@ekangarads",

    
];
// Output the information
echo "<h2> Full Name</h2>";
echo "<p>$full_name</p>";

echo "<h2>Address</h2>";
echo "<p>$address</p>";

echo "<h2>Contact</h2>";
echo "<p>$contact</p>";

echo "<h2>Hobbies</h2>";
echo "<ul>";
foreach ($hobbies as $hobby) {
    echo "<li>$hobby</li>";
}
echo "</ul>";

echo "<h2>Social Media</h2>";
echo "<ul>";
foreach ($social_media as $platform => $link) {
    echo "<li><strong>$platform:</strong> <a href='https://$link' target='_blank'>$link</a></li>";
}
echo "</ul>";
?>

