<html>
<head>
    <title>Simplon-Formation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./formations/css/style.css">
</head>
<body>
{{--NavBar--}}
<header>
    <nav class="navbar navbar-expand-lg bg-white fw-bold">
        <div class="container">
            <a class="navbar-brand" href="#" title="Logo Simplon">
                <img src="./formations/img/simplonSN.png" alt="Logo Simplon" width="150" class=" d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler border  border-2 border-black" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon sp-red"></span> -->
                <i class="bi bi-menu-app-fill text-danger"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-2">
                        <a class="nav-link " aria-current="page" href="{{route('accueil')}}">Accueil</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="Fabrique/fabrique.html">Fabrique</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="formation.html">Formations</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link " href="partenariat.html">Partenariat</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link " href="Partie_Espace/index.html">Espaces</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link " href="entité.html">Entites</a>
                    </li>
                </ul>
                <form class="d-flex flex-column flex-lg-row align-items-lg-center">
                    <label for="search"
                           class="align-items-center d-flex justify-content-center mt-lg-0 mt-3 order-1 order-lg-0 rounded rounded-pill">
                        <input class="border-0 mw-100" id="search" type="search" placeholder="Search"
                               aria-label="Search" name="search">
                        <i class="bi bi-search " aria-hidden="true"></i>
                    </label>
                    <div class="dropdown mx-sm-0 mx-sm-1 nav-item ">
                        <!-- <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            EN
                        </a> -->
                        <a class="nav-link d-flex sp-dropdown-toggle text-black" href="#">
                            EN
                            <i class=" bi bi-caret-down-fill text-danger"></i>
                        </a>
                        <ul class="dropdown-menu mw-5 " aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item sp-hover-red" href="#">EN</a>
                            </li>
                            <li>
                                <a class="dropdown-item sp-hover-red" href="#">FR</a>
                            </li>
                        </ul>
                    </div>
                    <a href="" class="sm px-3 py-2 sp-rounded-link  sp-btn-danger">Contact</a>
                </form>
            </div>
        </div>
    </nav>
</header>
{{--End NavBar--}}
<div class="container">
    <div class="card m-3">
        <div class="card-header">
            <h2>Ajouter une formation</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('AjoutFormation')}}" enctype="multipart/form-data">
                @csrf

                <div class="form-group ">
                    <label for="nom">Nom de la formation</label>
                    <input type="text" name="nom" id="nom" class="form-control", required>
                </div>

                <div class="form-group">
                    <label for="desc">Description</label>
                    <input type="text" name="description" id="indicatif" class="form-control", required>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Photo</label>
                    <input class="form-control" name="photo" type="file" id="formFile", required >
                </div>

                <select class="form-select" name="souscategorie" aria-label="Default select example", required>
                    <option selected>Sous-Catégorie</option>
                    @foreach($souscat as $sc)
                    <option value="{{$sc->id}}">{{$sc->nomSousCategorie}}</option>
                    @endforeach
                </select>

                <div class="form-group"><br><br>
                    <button type="submit" class="btn btn-outline-danger">Ajouter</button>
                </div>

            </form>
        </div>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
