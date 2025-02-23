
        <?php 
        require_once(__DIR__ . '/data/oeuvres.php');
        require_once(__DIR__ . '/container/header.php'); 
        ?>

        <div id="liste-oeuvres">

            <?php foreach($oeuvres as $oeuvre): ?>

                <article class="oeuvre">
                    <a href="<?php echo 'oeuvre.php?id=' . $oeuvre['id'] ?>">
                        <img src="<?php echo $oeuvre['artwork']; ?>" alt="<?php echo $oeuvre['name']; ?>">
                        <h2><?php echo $oeuvre['name']; ?></h2>
                        <p class="description"><?php echo $oeuvre['author']; ?></p>
                    </a>
                </article>

            <?php endforeach; ?>

            <!-- <article class="oeuvre">
                <a href="oeuvre-1.php">
                    <img src="img/clark-van-der-beken.png" alt="Dodomu">
                    <h2>Dodomu</h2>
                    <p class="description">Mia Tozerski</p>
                </a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-2.php">
                    <img src="img/pawel-czerwinski-3.png" alt="Aashaaheen Baadal">
                    <h2>Aashaaheen Baadal</h2>
                    <p class="description">Anaisha Devi</p>
                </a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-3.php">
                    <img src="img/dan-cristian-padure.png" alt="Nightlife Traffic">
                    <h2>Nightlife Traffic</h2>
                    <p class="description">Andrew Forsythe</p>
                </a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-4.php">
                    <img src="img/steve-johnson-5.png" alt="Le refuge de l'Havre">
                    <h2>Le refuge de l'Havre</h2>
                    <p class="description">Simon Pelletier</p>
                </a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-5.php">
                    <img src="img/steve-johnson.png" alt="Red Washover">
                    <h2>Red Washover</h2>
                    <p class="description">Kit Van Der Borght</p>
                </a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-6.php">
                    <img src="img/pawel-czerwinski.png" alt="Chromatics">
                    <h2>Chromatics</h2>
                    <p class="description">Jean-Michel Delatronchette</p>
                </a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-7.php">
                    <img src="img/jazmin-quaynor.png" alt="Digital Negative">
                    <h2>Digital Negative</h2>
                    <p class="description">Hamish McKee</p>
                </a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-8.php">
                    <img src="img/steve-johnson-6.png" alt="Blast from the past">
                    <h2>Blast from the past</h2>
                    <p class="description">Juliette Baskerville</p>
                </a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-9.php">
                    <img src="img/victor-grabarczyk.png" alt="Hurricane">
                    <h2>Hurricane</h2>
                    <p class="description">Natalie Wellington</p>
                </a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-10.php">
                    <img src="img/pawel-czerwinski-2.png" alt="La marée rouge">
                    <h2>La marée rouge</h2>
                    <p class="description">Martin Rodriguez</p>
                </a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-11.php">
                    <img src="img/steve-johnson-2.png" alt="Asimilacion">
                    <h2>Asimilacion</h2>
                    <p class="description">Angel Sanchez-Fernandez</p>
                </a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-12.php">
                    <img src="img/fly-d.png" alt="La Galaxia Gialla">
                    <h2>La Galaxia Gialla</h2>
                    <p class="description">Eduardo Tancredi</p>
                </a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-13.php">
                    <img src="img/orfeas-green.png" alt="Puffy Amalgamate">
                    <h2>Puffy Amalgamate</h2>
                    <p class="description">Sandro De Blasi</p>
                </a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-14.php">
                    <img src="img/steve-johnson-4.png" alt="Mirage">
                    <h2>Mirage</h2>
                    <p class="description">Stéphanie Kaiser</p>
                </a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-15.php">
                    <img src="img/steve-johnson-3.png" alt="Blaue Gelbe Muster">
                    <h2>Blaue Gelbe Muster</h2>
                    <p class="description">Adelheid Von Schreiber</p>
                </a>
            </article> -->
        </div>

        <?php require_once(__DIR__ . '/container/footer.php'); ?>