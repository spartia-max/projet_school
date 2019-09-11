<!doctype html>
<html lang="en">

<head>
  <title>Accueil</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <main>
    <div class="container">

      <form action="../controllers/creat_pro_ctrl.php" method="post">
        <div class="form-group">
          <label for="staff_first_name">Prenom</label>
          <input type="text" class="form-control" name="staff_first_name" id="staff_first_name" aria-describedby="helpId" placeholder="staff_first_name">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="staff_last_name">Nom</label>
          <input type="text" class="form-control" name="staff_last_name" id="staff_last_name" aria-describedby="helpId" placeholder="Entrer le last name">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="staff_class">Classe</label>
          <input type="text" class="form-control" name="staff_class" id="staff_class" aria-describedby="helpId" placeholder="Entrer la classe du professeur">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="staff_login">Identifiant</label>
          <input type="text" class="form-control" name="staff_login" id="staff_login" aria-describedby="helpId" placeholder="Entrer votre identitfiant">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="staff_password">Mot de passe</label>
          <input type="text" class="form-control" name="staff_password" id="staff_password" aria-describedby="helpId" placeholder="Entrer un mot de passe">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="staff_email">Email</label>
          <input type="text" class="form-control" name="staff_email" id="staff_email" aria-describedby="helpId" placeholder="Entrer un email">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="staff_age">Age</label>
          <input type="text" class="form-control" name="staff_age" id="staff_age" aria-describedby="helpId" placeholder="Entrer l'age du professeur">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="staff_salary">Salaire</label>
          <input type="text" class="form-control" name="staff_salary" id="staff_salary" aria-describedby="helpId" placeholder="Entrer le saliare du prof">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="staff_seniority">Ancienneté</label>
          <input type="text" class="form-control" name="staff_seniority" id="staff_seniority" aria-describedby="helpId" placeholder="Entrer l'anciennete du prof">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="staff_status">Status</label>
          <input type="text" class="form-control" name="staff_status" id="staff_status" aria-describedby="helpId" placeholder="Entrer le status 1.2.3">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>

      </form>

    </div>
  </main>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>