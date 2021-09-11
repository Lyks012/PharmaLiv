<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid">
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarTogglerDemo01"
      aria-controls="navbarTogglerDemo01"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="index.php?action=clientHome">PharmaLiv</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php if(isset($_GET['action']) AND $_GET['action'] == 'clientHome') echo "active"; ?>" aria-current="page" href="<?= URI ?>Home">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php  if(isset($_GET['action']) AND $_GET['action'] == 'connexion') echo "active"; ?>" href="<?= URI ?>myOrders">Commandes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if(isset($_GET['action']) AND $_GET['action'] == 'inscription') echo "active"; ?>" href="<?= URI ?>myInfos">Informations personnelles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= URI ?>logout">Se deconnecter</a>
        </li>
      </ul>
    </div>
  </div>
</nav>