<?php
require 'inc/head.php';

if (!empty($_POST['loginname'])) {
    $_SESSION["login"] = $_POST['loginname'];
    header ("location: index.php");
}

if ((!empty($_SESSION["login"])))
{
    //le login a ete enregistré proposer index.php
    header('Location:index.php');
}

var_dump($_SESSION);
?>
<div class="container" style="margin-top:40px">
<div class="row">
  <div class="col-md-12 d-flex justify-content-center">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong> Sign in to continue</strong>
      </div>
      <div class="panel-body">
        <form role="form" action="#" method="POST">
          <fieldset>
            <div class="row content-center">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input class="form-control" placeholder="Username" name="loginname" type="text" autofocus>
                  </div>
                </div>
                <div class="form-group">
                        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in">
                </div>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
            </div>
  </div>
</div>
</div>
<?php require 'inc/foot.php'; ?>
