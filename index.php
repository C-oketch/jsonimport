<?php

$people = '{
  "data":[{"first_name":"jake","last_name":"bennett","age":31,"email":"jake@bennett.com","secret":"VXNlIHRoaXMgc2VjcmV0IHBocmFzZSBzb21ld2hlcmUgaW4geW91ciBjb2RlJ3MgY29tbWVudHM="},
  {"first_name":"jordon","last_name":"brill","age":85,"email": "jordon@brill.com","secret":"YWxidXF1ZXJxdWUuIHNub3JrZWwu"}
  ]

}';

$people = json_decode($people);
$stringOfEmails =  "";
$prepend = "";
//adding new field name to every object and creating comma separated list of emails
foreach($people->data as $person)
{
    $stringOfEmails .= $prepend . $person->email;
    $prepend = ",";
  $name .= $prepend2 . $person->first_name . " " . $person->last_name;
  $prepend2 = ",";
}
//function to be used in usort function to compare two objects age
function compare($firstObject, $secondObject)
{
    return $firstObject->age < $secondObject->age;
}
//sorting objects by age in descending order
usort($people->data, "compare");
//printing results
echo $stringOfEmails;
echo "<br>";
echo $name;
echo "<pre>";
print_r($people);
echo "</pre>";

?>
