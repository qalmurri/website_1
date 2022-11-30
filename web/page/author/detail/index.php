<?php $id_member = $_GET['author'];

$user = new view($dbuser);
$author = $user->member($id_member);
$count2 = $user->author_count($id_member);
foreach ($count2 as $author2)
?>

<h1><?php echo $author['name_member'] ?> (<?php echo $author2 ?> Buku)</h1>
<img src="image/profil/<?php if ($author['image_member'] == null) {
                            echo 'anon.png';
                        } else {
                            echo $author['image_member'];
                        }
                        ?>" alt="#" style="width:200px;border:4px solid #ddd;" />