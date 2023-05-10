<?php include "header.php"; ?>

<nav class="teal black-text" role="navigation">
  <div class="nav-wrapper container black-text"><a id="logo-container" href="index.php" class="brand-logo black-text"></a>
    <ul class="right hide-on-med-and-down">
      <li><a class="modal-trigger black-text" href="#modal1">Login Admin</a></li>
    </ul>
    <ul id="nav-mobile" class="side-nav">
      <li><a class="modal-trigger black-text" href="#modal1">Login Admin</a></li>
    </ul>
    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
  </div>
</nav>

<div id="modal1" class="modal modal-fixed-footer  teal lighten-3">
  <div class="modal-content">



    <div class="row teal lighten-5">
      <div class="col s12 m6  ">
        <div class="card grey lighten-3 ">
          <div class="card-content black-text">
            <div class="row">
              <form class="col s12" method="post" action="ceklogin.php">
                <div class="row">
                  <div class="input-field col s12">
                    <input type="text" name="username" class="validate">
                    <label for="first_name">Username</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input type="password" name="password" class="validate">
                    <label for="first_name">Password</label>
                  </div>

                </div>
                <div class="col s12 offset-s7">
                  <button type="submit" class="btn btn-default">login</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
      <div class="col s12 m6">
        <center> <img class="responsive-img" width="300" height="300" src="image/kunci.jpg"></center>

      </div>

    </div>


  </div>
  <div class="modal-footer teal darken-4">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat white black-text">Tutup</a>
  </div>
</div>