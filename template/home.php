<h1>Ma home page</h1>

<a href="<?= $router->generate('contact') ?>">Nous contacter</a>
<a href="<?= $router->generate('article', ['id' => 60, 'slug' => 'Mon article*']) ?>">Voir l'article</a>