<?php ob_start() ?>
<?php require_once('src/view/home/navbar.php'); ?>
<div class="container mx-auto" style="max-width: 600px">
  <ul class="nav nav-tabs d-flex justify-content-center mt-3" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button
        class="nav-link active"
        id="home-tab"
        data-bs-toggle="tab"
        data-bs-target="#registerClient"
        type="button"
        role="tab"
        aria-controls="registerClient"
        aria-selected="true"
      >
        Client
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button
        class="nav-link"
        id="profile-tab"
        data-bs-toggle="tab"
        data-bs-target="#registerDrugstore"
        type="button"
        role="tab"
        aria-controls="registerDrugstore"
        aria-selected="false"
      >
        Pharmacie
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button
        class="nav-link"
        id="contact-tab"
        data-bs-toggle="tab"
        data-bs-target="#registerDelivery"
        type="button"
        role="tab"
        aria-controls="registerDelivery"
        aria-selected="false"
      >
        Livreur
      </button>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div
      class="tab-pane fade show active"
      id="registerClient"
      role="tabpanel"
      aria-labelledby="registerClient-tab"
    >
      <form action="index.php?action=addClient" class="bg-light my-2" method="post">
        <div class="row">
          <div class="col-md-6">
            <label for="last_name" class="form_label">Nom</label>
            <input
              type="text"
              class="form-control"
              name="last_name"
              id="last_name"
              required
            />
          </div>
          <div class="col-md-6">
            <label for="first_name" class="form-label">Prenom</label>
            <input
              type="text"
              class="form-control"
              name="first_name"
              id="first_name"
              required
            />
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="birth_date" class="form-label">Date de naissance</label>
            <input
              type="date"
              class="form-control"
              name="birth_date"
              id="date"
              required
            />
          </div>
          <div class="col-md-6">
            <label for="adress" class="form-label">Addresse</label>
            <input
              type="text"
              class="form-control"
              name="adress"
              id="adress"
              required
            />
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input
              type="email"
              class="form-control"
              name="email"
              id="email"
              required
            />
          </div>
          <div class="col-md-6">
            <label for="phone_number" class="form-label"
              >Numero de telephone</label
            >
            <input
              type="tel"
              class="form-control"
              name="phone_number"
              id="phone_number"
              required
            />
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="genre"
                id="male"
                value="H"
              />
              <label class="form-check-label" for="male"> Homme </label>
              <div class="form-check form-check-inline mx-5">
                <input
                  class="form-check-input"
                  type="radio"
                  name="genre"
                  id="female"
                  value="F"
                />
                <label class="form-check-label" for="male"> Femme </label>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="form-floating">
              <textarea
                class="form-control"
                name="ongoing_treatment"
                id="additionnalInfos"
                style="height: 100px"
                placeholder="Veuillez preciser si vous suivez des traitements particuliers. Pour les femmes, preciser si vous etes en etat de grossesse et/ou d'allaitement"
              ></textarea>
              <label for="additionnalInfos">Informations Complementaires</label>
              <div id="additionnalInfoHelp" class="form-text">Veuillez preciser si vous suivez des traitements particuliers. <br> Pour les femmes, preciser si vous etes en etat de grossesse et/ou d'allaitement.</div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="login" class="form-label"
              >Login</label
            >
            <input
              type="text"
              class="form-control"
              name="login"
              id="login"
              required
            />
          </div>
          <div class="col-md-6">
            <label for="password" class="form-label"
              >Password</label
            >
            <input
              type="password"
              class="form-control"
              name="password"
              id="password"
              required
            />
          </div>
        </div>
        <div class="row mt-3">
          <div class="col text-center">
            <button class="btn btn-primary" type="submit"">S'inscrire</button>
          </div>
        </div>
      </form>
    </div>
    <div
      class="tab-pane fade"
      id="registerDrugstore"
      role="tabpanel"
      aria-labelledby="registerDrugstore-tab"
    >
      <form action="index.php?action=addDrugstore" method="post" class="bg-light my-2">
        <div class="row">
          <div class="col-md-6">
            <label for="name" class="form_label">Nom de la pharmacie</label>
            <input type="text" name="name" required id="name" class="form-control">
          </div>
          <div class="col-md-6">
            <label for="owner_name" class="form_label">Nom du gerant</label>
            <input type="text" name="owner_name" required id="owner_name" class="form-control">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="email" class="form_label">Email</label>
            <input type="email" name="email" required id="email" class="form-control">
          </div>
          <div class="col-md-6">
            <label for="phone_number" class="form_label">Numero de telephone</label>
            <input type="tel" name="phone_number" required id="phone_number" class="form-control">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="adress" class="form_label">Addresse</label>
            <input type="text" name="adress" required id="adress" class="form-control">
          </div>
          <div class="col-md-6">
            <label for="sector" class="form_label">Commune</label>  
            <input type="tel" name="sector" required id="sector" class="form-control">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="opening_hours" class="form_label">Heure d'ouverture</label>
            <input type="time" name="opening_hours" id="opening_hours" class="form-control">
          </div>
          <div class="col-md-6">
          <label for="closing_hours" class="form_label">Heure de fermeture</label>
            <input type="time" name="closing_hours" id="closing_hours" class="form-control">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="login" class="form-label"
              >Login</label
            >
            <input
              type="text"
              class="form-control"
              name="login"
              id="login"
              required
            />
          </div>
          <div class="col-md-6">
            <label for="password" class="form-label"
              >Password</label
            >
            <input
              type="password"
              class="form-control"
              name="password"
              id="password"
              required
            />
          </div>
        </div>
        <div class="row mt-3">
          <div class="col text-center">
            <button class="btn btn-primary" type="submit"">Devenir partenaire</button>
          </div>
        </div>
      </form>
    </div>
    <div
      class="tab-pane fade"
      id="registerDelivery"
      role="tabpanel"
      aria-labelledby="contact-tab"
    >
      <form action="index.php?action=addDeliveryPerson" method="post" class="bg-light my-2">
        <div class="row">
          <div class="col-md-6">
            <label for="last_name" class="form_label">Nom</label>
            <input
              type="text"
              class="form-control"
              name="last_name"
              id="last_name"
              required
            />
          </div>
          <div class="col-md-6">
            <label for="first_name" class="form-label">Prenom</label>
            <input
              type="text"
              class="form-control"
              name="first_name"
              id="first_name"
              required
            />
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input
              type="email"
              class="form-control"
              name="email"
              id="email"
              required
            />
          </div>
          <div class="col-md-6">
            <label for="phone_number" class="form-label"
              >Numero de telephone</label
            >
            <input
              type="tel"
              class="form-control"
              name="phone_number"
              id="phone_number"
              required
            />
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="login" class="form-label"
              >Login</label
            >
            <input
              type="text"
              class="form-control"
              name="login"
              id="login"
              required
            />
          </div>
          <div class="col-md-6">
            <label for="password" class="form-label"
              >Password</label
            >
            <input
              type="password"
              class="form-control"
              name="password"
              id="password"
              required
            />
          </div>
        </div>
        <div class="row mt-3">
          <div class="col text-center">
            <button class="btn btn-primary" type="submit"">S'inscrire</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require_once('src/view/shared/template.php') ?>
