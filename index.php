<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia Basica de Git</title>
    <link rel="stylesheet" href="bulma.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="head">
        <div class="shadow">
            <h2 class="title" style="color: black;">¡Bienvenidos a la guia básica de Git!</h2>
            <p class="container">
                En el siguiente recorrido te mostraré los comandos base de Git
                que te serviran para crear, modificar y guardar tu propio repositorio
                ya sea localmente o en la nube.
            <p>¡Espero sea de utilidad!</p>
            </p>
        </div>
    </div>
    <!--Head-->
    <div class="container">
        <div class="columns">
            <div class="column is-5">
                <h3 class="sub subtitle">git init</h3>
                <p>
                    Este comando sirve para crear un nuevo repositorio de manera
                    local.
                </p>
            </div>
            <div class="column">
                <img src="images/git_init.jpg" alt="git_init.jpg">
            </div>
        </div>
        <div class="columns">
            <div class="column is-5">
                <h3 class="sub subtitle">git status</h3>
                <p>
                    git status muestra los cambios que se han realizado en el
                    directorio de trabajo. Por ejemplo haber añadido o modificado archivos.
                    Cuando los archivos están en rojo no se han guardado los cambios.
                </p>
            </div>
            <div class="column">
                <img src="images/git_status.png" alt="git_status.jpg">
            </div>
        </div>
        <div class="columns">
            <div class="column is-5">
                <h3 class="sub subtitle">git add .</h3>
                <p>
                    Se utiliza para agregar todos los cambios para el siguiente commit.
                    Para agregar sólo uno se utiliza el nombre del fichero: <strong>git add index.html</strong>.
                </p>
            </div>
            <div class="column">
                <img src="images/git_add.png" alt="git_add.jpg">
            </div>
        </div>
        <div class="columns">
            <div class="column is-5">
                <h3 class="sub subtitle">git commit</h3>
                <p>
                    Se crea un commit con todos los cambios agregados en git add.
                    Un commit es como punto de guardado en un videojuego al que puedes regresar
                    cuando lo necesites.
                    Ejemplo: <strong>git commit -m "Mi primer commit"</strong>
                </p>
            </div>
            <div class="column">
                <img src="images/git_commit.png" alt="git_commit.jpg">
            </div>
        </div>
        <div class="columns">
            <div class="column is-5">
                <h3 class="sub subtitle">git log</h3>
                <p>
                    Muestra todos los commits realizados anteriormente. Con el se pueden visualizar
                    el autor del commit, la fecha en que lo realizó, la descripción, el identificador y la rama
                    en la que se han realizado los cambios.
                </p>
            </div>
            <div class="column">
                <img src="images/git_log.png" alt="git_log.jpg">
            </div>
        </div>
        <div class="columns">
            <div class="column is-5">
                <h3 class="sub subtitle">git remote add y git push</h3>
                <p>
                    Permiten guardar todos los cambios en un repositorio remoto.
                    Se guardará en la rama principal.
                </p>
            </div>
            <div class="column">
                <img src="images/git_remote.png" alt="git_remote.jpg">
                <img src="images/git_push.png" alt="git_push.jpg">
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="notification is-warning">
                    <h1 class="sub title">¡Atención!</h1>
                    <p>
                        Debes crear un repositorio en tu cuenta de git para obtener el link donde vas a poder
                        subir tu proyecto.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--Practice-->
    </div>
    <!--Container-->
    <footer class="footer">
        <i>Todos los derechos reservados</i>
        <p>2020</p>
    </footer>
</body>

</html>