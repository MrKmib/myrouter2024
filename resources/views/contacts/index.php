<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Tailwind css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 >Lista de Contactos</h1>
    <!--Buscador-->
    <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form action="/contacts" class="d-flex">
      <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
    <!--end buscador-->


    <a href="/contacts/create">crear contacto</a>
    <div>
        <ul class="list-group">
        <?php foreach ($contacts['data'] as $contact): ?>
            <li class="list-group-item">
                <a href="/contacts/<?= $contact['id']?>">
                    <?= $contact['name']?>
                </a>
            </li>
        <?php endforeach ?>
        </ul>

        <?php 
        $paginate = 'contacts';
        require_once '../resources/views/assets/pagination.php';
        ?> 

    </div>
   



   <!--js-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>