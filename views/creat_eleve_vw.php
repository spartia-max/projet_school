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

      <form action="../controllers/creat_eleve_ctrl.php" method="post">
        <div class="form-group">
          <label for="student_first_name">Prenom</label>
          <input type="text" class="form-control" name="student_first_name" id="student_first_name" aria-describedby="helpId" placeholder="student_first_name">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="student_last_name">Nom</label>
          <input type="text" class="form-control" name="student_last_name" id="student_last_name" aria-describedby="helpId" placeholder="Entrer le last name">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="student_class">Classe</label>
          <input type="text" class="form-control" name="student_class" id="student_class" aria-describedby="helpId" placeholder="Entrer la classe du professeur">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="student_login">Identifiant</label>
          <input type="text" class="form-control" name="student_login" id="student_login" aria-describedby="helpId" placeholder="Entrer votre identitfiant">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="student_password">Mot de passe</label>
          <input type="text" class="form-control" name="student_password" id="student_password" aria-describedby="helpId" placeholder="Entrer un mot de passe">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="student_email">Email</label>
          <input type="text" class="form-control" name="student_email" id="student_email" aria-describedby="helpId" placeholder="Entrer un email">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="student_gender">Genre</label>
          <input type="text" class="form-control" name="student_gender" id="student_gender" aria-describedby="helpId" placeholder="M ou F">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="student_status">Status</label>
          <input type="text" class="form-control" name="student_status" id="student_status" aria-describedby="helpId" placeholder="Entrer le status 1.2.3">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <button type="submit" class="btn btn-primary">Crée éléves</button>

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