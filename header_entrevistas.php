<?php
$listar = null;
$directorio = opendir("../Entrevistas");
while($elemento = readdir($directorio))
{
    if($elemento != '.' && $elemento != '..')
    {
    if (is_dir("../Entrevistas/".$elemento))
    {
        $elemento = substr($elemento, 0, -4);
        $listar .= "<a class='nav-link titulo' href='../$elemento'>$elemento/</a>";
    }
    else
    {
        $elemento = substr($elemento, 0, -4);
        $listar .= "<a class='nav-link titulo' href='../$elemento'>$elemento</a>";
    }
    }
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand navtitulo" href="../index.php" style="font-size:30px">EmeArko</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li <?php if ($mi_pagina=="index") echo " class='nav-item active titulo'"; ?>>
                <a class="nav-link titulo" href="../index.php">Pagina Inicial <span class="sr-only">(current)</span></a>
            </li>
            <li <?php if ($mi_pagina=="equipamiento") echo " class='nav-item active'"; ?>>
                <a class="nav-link titulo" href="../equipamiento.php">Equipamiento</a>
            </li>
            <li <?php if ($mi_pagina=="aboutme") echo " class='nav-item active'"; ?>>
                <a class="nav-link titulo" href="../aboutme.php">Sobre mi</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle titulo" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Entrevistas
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php echo $listar ?>
                </div>
            </li>



        </ul>
        <form class="form-inline my-2 my-lg-0">
            <img src="../swords.png" class="img-fluid" alt="Responsive image">
        </form>
    </div>
</nav>