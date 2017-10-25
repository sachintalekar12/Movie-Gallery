<?php
include"conn.php";
$conn = OpenConn();
$genreid = 0;
$langid = 0;
$sort = 'length';
$genre = "select * from category where type = 'genre'";
$language = "select * from category where type = 'language'";
$query1 = "SELECT movie_id from relation";

if(isset($_POST['genre']) || isset($_POST['lang']) || isset($_POST['sort']))
{
    $genreid = $_POST['genre'];
    $langid = $_POST['lang'];
    $sort = $_POST['sort'];
}

if($genreid != 0 || $langid != 0)
{
    if($genreid != 0 && $langid != 0) $query1 .= " where movie_id in (select movie_id from relation where category_id = " . $genreid . ") and category_id = " . $langid;
    else if($genreid == 0) $query1 .= " where category_id = " . $langid;
    else if($langid == 0) $query1 .= " where category_id = " . $genreid;
}

$query1 .= " group by movie_id";

if($genreid == 0 && $langid == 0) $query2 = "Select * from movies order by ";
else $query2 = "SELECT * FROM movies where id in (" . $query1 . ") group by movies.id order by ";

if($sort != "length") $query2 .= $sort . " asc";
else $query2 .= $sort . " desc";
if( isset($_GET['currentpage'])){
	if (isset($_COOKIE['sql']) || isset($_COOKIE['cklanguage']) || isset($_COOKIE['ckgenre']) || isset($_COOKIE['sort'])){
    $query2 = $_COOKIE['sql'];
    $langid = $_COOKIE['cklanguage'];
    $genreid = $_COOKIE['ckgenre'];
    $sort = $_COOKIE['sort'];
	}
}
if(!empty($_POST)) {
    setcookie("sql", $query2);
    setcookie("cklanguage", $langid);
    setcookie("ckgenre", $genreid);
    setcookie("sort", $sort);
}

 
$allresult = $conn->query($query2);
$genresult = $conn->query($genre);
$langresult = $conn->query($language);

$numrows = mysqli_num_rows($allresult);
$rowsperpage = 10;
$totalpages = ceil($numrows / $rowsperpage);
if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
   $currentpage = (int) $_GET['currentpage'];
} else {
   $currentpage = 1;
}

if ($currentpage > $totalpages) {
   $currentpage = $totalpages;
} 
if ($currentpage < 1) {
   $currentpage = 1;
} 
$offset = ($currentpage - 1) * $rowsperpage;
$finalquery = $query2 . " LIMIT $offset, $rowsperpage";
$result = $conn->query($finalquery) or trigger_error("SQL", E_USER_ERROR);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Movie Gallery</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    
    <div class="container" align="center">
    <h1>Movie Gallery</h1>


    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="col-md-8">
      <div class="col-md-6">
            <div class="dropdown"><label>Genre:</label>
            <span style=""class="custom-dropdown">
            <select name = 'genre'onchange = 'this.form.submit()'>
            <option value="0">All</option>
            <?php for($i = 0 ; $i < mysqli_num_rows($genresult) ; $i++) {
                $row = $genresult->fetch_assoc(); 
				echo"<option value='$row[id]'";if($row['id'] == $genreid) { echo"selected='selected'"; } echo">"; echo ucfirst($row['value']);  ?></option>
            <?php } ?>
            </select>
            </span>
        </div>
      </div>

            <div class="col-md-6">
          <div class="dropdown"><label>Language:</label>
            <span class="custom-dropdown">
            <select  name = 'lang' onchange = 'this.form.submit()'>
            <option value="0">All</option>
            <?php for($i = 0 ; $i < mysqli_num_rows($langresult) ; $i++) { 
                $row = $langresult->fetch_assoc();?>
                <option value=<?php echo $row['id']; ?> <?php if($row['id'] == $langid) {?> selected="selected" <?php } ?> ><?php echo ucfirst($row['value']);  ?></option>
            <?php } ?>
            </select>
            </span>
        </div>
      </div>
    </div>

            <div class="col-md-4">
          <div class="dropdown"><label>Sort By:</label>
            <span class="custom-dropdown">
            <select  name = 'sort' onchange = 'this.form.submit()'>
                 <option value="length" <?php if($sort == "length") {?> selected="selected" <?php } ?> >Movie Length</option>
                <option value="reldate" <?php if($sort == "reldate") {?> selected="selected" <?php } ?> >Release Date</option>
            </select>
            </span>
      </div>
    </div>
 
    </form> </div>
    <br>
    <div class="container-fluid">
     <?php 
    if(mysqli_num_rows($result) > 0 )
    {
    while ($list = mysqli_fetch_assoc($result)) { ?>
    <div data-view="list-view" class="cards">
      <article class="card rw">

        <div class="img_icon col-md-2"><img class="center-block img-responsive thumbnail" src=<?php echo $list['image']; ?> /></div>
        <div class="col-md-10">
          <div class="content">
            <h2><?php echo ucwords($list['title']); ?></h2>
            <h4>
			<?php $z=0;
			$res = mysqli_query($conn , "select value from category where id in (select category_id from relation where movie_id = " . $list['id'] . ") and type='language'");  
                        while($r = mysqli_fetch_assoc($res)) {?>
                    <a class="btnn">
                      <?php if($z > 0){?>,<?php } echo ucfirst($r['value']); $z++; }?>
                    </a> 
                    &nbsp|&nbsp
					
                    <div class="btn-group" >
					   <?php $c=0;
					   $res = mysqli_query($conn , "select value from category where id in (select category_id from relation where movie_id = " . $list['id'] . ") and type='genre'");  
                        while($r = mysqli_fetch_assoc($res)) { ?>
                    <a class="btnn">
                    <?php if($c > 0){?>, <?php } echo ucfirst(trim($r['value'])); $c++; } ?>
                    </a></div>
            <br/> 
            <small>
                <?php echo $list['length'] ?>Min &nbsp | &nbsp  <?php 
                    $date = new DateTime($list['reldate']);
                    echo $date->format('j F Y')
                ?>
                
            </small> 
            </h4>
            <p class="description">
                <?php echo $list['description'] ?>
            </p>
          </div>
      

      </div>
	  </article>
	</div><?php    }$range = 4;?>
	<div class="pagina">
    <nav>
        <ul class="pagination">
            <?php
            if ($currentpage > 1) {
                echo "<li><a  href='{$_SERVER['PHP_SELF']}?currentpage=1'><b><<</b></a></li>";
                $prevpage = $currentpage - 1;
                echo "<li><a  href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'><b><</b></a></li>";
            }
            else{
                echo "<li class='disabled'><a ><b><<</b></a></li>";
                echo "<li class=' disabled'><a ><b><</b></a></li>";
            }
            for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
            if (($x > 0) && ($x <= $totalpages)) {
                if ($x == $currentpage) {
                    echo "<li class='active'><a><span class='sr-only'>(current)</span><b>$x</b></a></li>";
                } else {
                    echo "<li><a  href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a></li>";
                }
            }
            } 
            if ($currentpage != $totalpages) {
            $nextpage = $currentpage + 1;
            echo "<li ><a  href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'><b>></b></a></li>";
            echo "<li ><a  href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'><b>>></b></a></li>";
            }
            else{
                echo "<li class='disabled'><a><b>></b></a></li>";
                echo "<li class='disabled'><a><b>>></b></a></li>";             
            }
            ?>
        </ul>
    </nav>
    </div>
    <?php }
    else echo "<div align='center' class='container'><h2>No Movie Found </h2></div>";
    CloseConn($conn);
?>

    </div>
    </body>
    <footer>
    <div align="center">
        &copy; Sachin Talekar
    </div>
    </footer>
</html>
