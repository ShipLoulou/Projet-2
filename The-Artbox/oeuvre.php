
    <?php 
        require_once(__DIR__ . '/data/oeuvres.php');
        require_once(__DIR__ . '/container/header.php'); 
    
        $id = $_GET['id'];

        $o = null;

        foreach($oeuvres as $oeuvre) {
            if($id === $oeuvre['id']) {
                $o = $oeuvre;
            };
        }
    ?>

<article id="detail-oeuvre">
    <div id="img-oeuvre">
        <img src="<?php echo $o['artwork'] ?>" alt="<?php echo $o['name'] ?>">
    </div>
    <div id="contenu-oeuvre">
        <h1><?php echo $o['name'] ?></h1>
        <p class="description"><?php echo $o['author'] ?></p>
        <p class="description-complete"><?php echo $o['description'] ?></p>
    </div>
</article>

<?php require_once(__DIR__ . '/container/footer.php'); ?>
