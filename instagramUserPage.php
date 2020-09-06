<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class="container-fluid">
<?php
	 header("Access-Control-Allow-Origin: *"); //cross origin for php
$url = 'https://www.instagram.com/festivalsintoronto/?__a=1';
$instagramJson = file_get_contents($url);


$username = "festivalsintoronto";

$obj = json_decode($instagramJson);
$imageCount = count($obj->{'graphql'}->{'user'}->{'edge_owner_to_timeline_media'}->{'edges'});
echo '<div class="row row-cols-1 row-cols-md-3 g-4">';
for ($x = 0; $x <= 10; $x++) {
	$imagePath = $obj->{'graphql'}->{'user'}->{'edge_owner_to_timeline_media'}->{'edges'}[$x]->{'node'}->{'display_url'};
	$imageText = $obj->{'graphql'}->{'user'}->{'edge_owner_to_timeline_media'}->{'edges'}[$x]->{'node'}->{'edge_media_to_caption'}->{'edges'}[0]->{'node'}->{'text'};
	
	echo '<div class="col"><div class="card h-100">
  <img src="'.$imagePath.'" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">'.$imageText.'</p>
	
  </div>
  <div class="card-footer">
        <small class="text-muted"></small>
      </div>
</div></div>';
	
 // echo "<img src='$imagePath'><br>$imageText<br>";
  
}
echo '</div>';
$url = "https://www.instagram.com/$username/?__a=1";
$instagramJson = file_get_contents($url);
$username = @$_REQUEST['username'];
$obj = json_decode($instagramJson);
$imageCount = count($obj->{'graphql'}->{'user'}->{'edge_owner_to_timeline_media'}->{'edges'});
echo '<div class="row row-cols-1 row-cols-md-3 g-4">';
for ($x = 0; $x <= 10; $x++) {
	$imagePath = $obj->{'graphql'}->{'user'}->{'edge_owner_to_timeline_media'}->{'edges'}[$x]->{'node'}->{'display_url'};
	$imageText = $obj->{'graphql'}->{'user'}->{'edge_owner_to_timeline_media'}->{'edges'}[$x]->{'node'}->{'edge_media_to_caption'}->{'edges'}[0]->{'node'}->{'text'};
	
	echo '<div class="col"><div class="card h-100">
  <img src="'.$imagePath.'" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">'.$imageText.'</p>
	
  </div>
  <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
</div></div>';
	
 // echo "<img src='$imagePath'><br>$imageText<br>";
  
}
echo '</div>';
////////////////////////////////////////
//12 images to look at
//print_r($instagramJson);
//$json= json_decode($instagramJson, true);
//print $obj->{'logging_page_id'}; // 12345
//print_r($obj->{'graphql'}->{'user'}->{'biography'}) ; // 12345
//print_r($obj->{'graphql'}->{'user'}->{'edge_owner_to_timeline_media'}) ; // 12345

/* print_r($obj->{'graphql'}->{'user'}->{'edge_owner_to_timeline_media'}->{'edges'}[0]->{'node'}->{'display_url'}) ; // 12345
echo "</br>";
print_r($obj->{'graphql'}->{'user'}->{'edge_owner_to_timeline_media'}->{'edges'}[1]->{'node'}->{'display_url'}) ; // 12345
echo "</br>";
print_r($obj->{'graphql'}->{'user'}->{'edge_owner_to_timeline_media'}->{'edges'}[2]->{'node'}->{'display_url'}) ; // 12345
echo "</br>";
print_r($obj->{'graphql'}->{'user'}->{'edge_owner_to_timeline_media'}->{'edges'}[3]->{'node'}->{'display_url'}) ; // 12345
echo "</br>";
print_r($obj->{'graphql'}->{'user'}->{'edge_owner_to_timeline_media'}->{'edges'}[4]->{'node'}->{'display_url'}) ; // 12345
echo "</br>";
print_r($obj->{'graphql'}->{'user'}->{'edge_owner_to_timeline_media'}->{'edges'}[5]->{'node'}->{'display_url'}) ; // 12345
echo "</br>";
print_r($obj->{'graphql'}->{'user'}->{'edge_owner_to_timeline_media'}->{'edges'}[6]->{'node'}->{'display_url'}) ; // 12345
echo "</br>";
print_r($obj->{'graphql'}->{'user'}->{'edge_owner_to_timeline_media'}->{'edges'}[7]->{'node'}->{'display_url'}) ; // 12345
echo "</br>";
print_r($obj->{'graphql'}->{'user'}->{'edge_owner_to_timeline_media'}->{'edges'}[8]->{'node'}->{'display_url'}) ; // 12345
echo "</br>";
print_r($obj->{'graphql'}->{'user'}->{'edge_owner_to_timeline_media'}->{'edges'}[9]->{'node'}->{'display_url'}) ; // 12345
echo "</br>";
print_r($obj->{'graphql'}->{'user'}->{'edge_owner_to_timeline_media'}->{'edges'}[10]->{'node'}->{'display_url'}) ; // 12345
echo "</br>";
print_r($obj->{'graphql'}->{'user'}->{'edge_owner_to_timeline_media'}->{'edges'}[11]->{'node'}->{'display_url'}) ; // 12345

//print_r(json_decode($instagramJson, true));

//print_r($obj->{'graphql'}->{'user'}->{'edge_owner_to_timeline_media'}) ; // 12345 
testing version 5 bootstrap https://v5.getbootstrap.com/
*/
?>
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>
