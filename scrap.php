<?php
//initialize the connection with cURL (ch = cURL handle, or "channel")
$ch = curl_init();
$site=$_POST['site'];
curl_setopt($ch, CURLOPT_URL, $site);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//send the request and store it in $html
$html = curl_exec($ch);

// var_dump($html);

$dom = new DOMDocument();
@ $dom->loadHTML($html);


//https://jiji.ug/mobile-phones-tablets
// $pack = $dom->getElementsByTagName('p');
//$h2s = $dom->getElementsByTagName('a');

//  $pack_array = array();

// foreach($pack as $pa){
    
//     $title_text = $pa->textContent;
//     $pack_array[]=$title_text;
//     echo $title_text .'<br>';
// }
// echo "<hr>";

// foreach ($h2s as $link) {
//     echo $link->textContent. " - Link: " . $link->getAttribute('href')  . "<br><br>";
//     // ;
// }
foreach($dom->getElementsByTagName('div') as $ptag)
{
    if($ptag->getAttribute('class')=="compare-package-item")
    {
        
        // foreach($pack as $pa){
        //     $title_text = $pa->textContent;
        //     $pack_array[]=$title_text;
        //     echo $title_text .'<br>';
        // }
        
        echo $ptag->nodeValue ."<br><hr><br><br>"; //"prints" Some text

    }
}