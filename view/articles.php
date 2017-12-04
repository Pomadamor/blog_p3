<h1>C'est un article dans la view</h1>

    <?php foreach($articles as $article):?>

      <?php echo $article -> getTitle(); ?>

    <?php endforeach;?>
