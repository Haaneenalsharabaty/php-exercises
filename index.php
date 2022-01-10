<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name="haneen nizar alsharabaty";
    $name2="HANEEN";
    echo "<h1>$name</h1>";
    echo strtoupper("$name");
    echo "<br>";
    echo strtolower("$name2");
    echo"<br>";
   echo ucfirst("$name");
   echo"<br>";
   echo ucwords("$name");





   
// change date format 
 echo"<br>";
$date=date_create("085119");
echo date_format($date," H:i:s");






// write a php script to check whether a string contains a specific string
echo"<br>";
$sentence=" i am a full stack developer at orange coding academy";
$word="orange";
echo"<br>";
if (strpos($sentence,$word) !== false){
    echo "Word found!";
}






// write a php script to extract filename from url
echo "<br>";
$url = 'www.orange.com/index.php';
$file_name = substr(strrchr($url, "/"), 1);
echo $file_name."\n"; 










// extract the user name from the following email id
echo "<br>";
$email  = 'info@orange.com';
$user = strstr($email, '@', true);
echo $user."\n";








// write a php script to get the last three characters of a string
echo "<br>";
$email  = 'info@orange.com';
echo substr($email, -3)."\n";










// write a php script to generate simple random password from a given string
echo "<br>";

function password_generate($chars) 
{
  $password = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($password), 0, $chars);
}
  echo password_generate(15)."\n";









//   Replace the first word with another word
echo "<br>";

  $str = 'the new trinee is so genius.';
echo preg_replace('/the/', 'our', $str, 1)."\n"; 









// ind the first character that is different between two strings
echo "<br>";
$str1 = 'dragonball';
$str2 = 'dragonboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");







// Put a string in an array
echo"<br>";
$str = "Twinkle, twinkle, little star.";
$arra1 = explode(" ",$str);
var_dump($arra1);








// write a php script to print the next character of a specific character
echo"<br>";
$cha = 'a';
$next_cha = ++$cha; 
echo"$next_cha";


echo"<br>";
$cha = 'z';
$next_cha = ++$cha; 
echo"$next_cha";






// write a php script to insert a string at the specified position in a given string
echo "<br>";
$originalstring = 'The brown fox';
$insert ='quick';
$insertn = 4;
$new_string = substr_replace($originalstring, $insert.' ', $insertn, 0);
echo $new_string;










// write a php script to get the first word of a sentence
echo "<br>";
$s = 'The quick brown fox';
$arr1 = explode(' ',trim($s));
echo $arr1[0]."\n";






// write a php script to remove all zeros from a string
echo "<br>";
$number = '000065702.24';
echo str_replace("0","", $number)."\n";






// write a php script to remove apart of string
echo "<br>";
$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str)."\n";





// write a php script to remove trailing dashes of a string
echo "<br>";
$str = 'The quick brown fox jumps over the lazy dog---';
echo rtrim($str, '-'); 


   


// write a php script to remove special characters from string
echo "<br>";
$str='\"1+2/3*2:2=3/4*3';
echo preg_replace('/[^A-Za-z0-9\-]/', ' ', $str);





// write a php script to select first 5 words from the following string
echo "<br>";
$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";




// write a php script to remove commas) from the following numeric string
echo "<br>";
$str1 = "2,543.12";
 $x = str_replace( ',', '', $str1);
 echo $x;




// write a php script to print letters from 'a' to 'z'
echo "<br>";
 for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x);




?>




</body>
</html>