<!DOCTYPE html>
<html>
    <head>
      <title>
        <?= isset($title) ? $title : 'Mon super site' ?>
      </title>

      <meta charset="utf-8" />

      <link rel="stylesheet" href="/css/Envision.css" type="text/css" />
    </head>

    <body>
        <div id="wrap">
          <header>
            <h1><a href="/mvc/">Mon super site</a></h1>
            <p>Comment ça, il n'y a presque rien ?</p>
          </header>

          <nav>
            <ul>
              <li><a href="/mvc/">Accueil</a></li>
              <?php if ($user->isAuthenticated()) { ?>
              <li><a href="/mvc/admin/">Admin</a></li>
              <li><a href="/mvc/admin/news-insert.html">Ajouter une news</a></li>
              <?php } ?>
            </ul>
          </nav>

          <div id="content-wrap">
            <section id="main">
              <?php if ($user->hasFlash()) echo '<p style="text-align: center;">', $user->getFlash(), '</p>'; ?>

              <?= $content ?>
            </section>
          </div>

          <footer>&copy; Voyettes.com</footer>
        </div>
    </body>
</html>