<?php require 'inc/head.php';
require "connected.php";

if (!empty($_GET['add_to_cart'])){

    switch ($_GET["add_to_cart"])
    {
        case "46":
            if (empty($_COOKIE['panier']['spaceCookie'])){
                setCookie("panier[spaceCookie]", 1, strtotime("+5 days"));
                header ("location: index.php");
                break;
            }
            $_COOKIE['panier']["spaceCookie"]++;
            setCookie("panier[spaceCookie]",$_COOKIE["panier"]["spaceCookie"], strtotime("+5 days"));
            break;

        case "36":
            if (empty($_COOKIE['panier']['cookieDaim'])){
                setCookie("panier[cookieDaim]", 1, strtotime("+5 days"));
                header ("location: index.php");
                break;
            }
            $_COOKIE['panier']["cookieDaim"]++;
            setCookie("panier[cookieDaim]",$_COOKIE["panier"]["cookieDaim"], strtotime("+5 days"));
            break;

        case "58":
            if (empty($_COOKIE['panier']['cookieChoco'])){
                setCookie("panier[cookieChoco]", 1, strtotime("+5 days"));
                header ("location: index.php");
                break;
            }
            $_COOKIE['panier']["cookieChoco"]++;
            setCookie("panier[cookieChoco]",$_COOKIE["panier"]["cookieChoco"], strtotime("+5 days"));
            break;

        case "32":
            if (empty($_COOKIE['panier']['cookieOreo'])){
                setCookie("panier[cookieOreo]", 1, strtotime("+5 days"));
                header ("location: index.php");
                break;
            }
            $_COOKIE['panier']["cookieOreo"]++;
            setCookie("panier[cookieOreo]",$_COOKIE["panier"]["cookieOreo"], strtotime("+5 days"));
            break;
    }

}

?>
<section class="cookies container-fluid">
  <div class="row">



      <div class="col-md-4 ">
      <div class="card text-center">
        <img src="assets/img/spaceCookie.jpg" class="img-responsive">
        <div>
          <h3>Space Cookie</h3>
            <h4><?= $_COOKIE['panier']['spaceCookie'] ?? '' ?></h4>
            <form role="form" action="" method="GET">
                <input type="hidden" name="add_to_cart" value="46" />
                <button type="submit" class="btn btn-dark"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Ajouter au Panier</button>
            </form>
        </div>
      </div>
    </div>



    <div class="col-md-4">
      <div class="card text-center">
        <img src="assets/img/cookieDaim.jpg" class="img-responsive">
        <div>
          <h3>Cookie Daim</h3>
            <h4><?= $_COOKIE['panier']['cookieDaim'] ?? '' ?></h4>
            <form role="form" action="" method="GET">
                <input type="hidden" name="add_to_cart" value="36" />
                <button type="submit" class="btn btn-dark"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Ajouter au Panier</button>
            </form>
        </div>
      </div>
    </div>


    <div class="col-md-4">
      <div class="card text-center">
        <img src="assets/img/cookieChoco.JPG" class="img-responsive">
        <div>
          <h3>Cookie Choco</h3>
            <h4><?= $_COOKIE['panier']['cookieChoco'] ?? '' ?></h4>
            <form role="form" action="" method="GET">
                <input type="hidden" name="add_to_cart" value="58" />
                <button type="submit" class="btn btn-dark"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Ajouter au Panier</button>
            </form>
        </div>
      </div>
    </div>


    <div class="col-md-4">
      <div class="card text-center">
        <img src="assets/img/cookieOreo.jpg" class="img-responsive">
        <div>
          <h3>Cookie Oreo</h3>
            <h4><?= $_COOKIE['panier']['cookierOreo'] ?? '' ?></h4>
            <form role="form" action="" method="GET">
                <input type="hidden" name="add_to_cart" value="32" />
                <button type="submit" class="btn btn-dark"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Ajouter au Panier</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require 'inc/foot.php'; ?>
