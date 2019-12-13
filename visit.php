<title>Mead Well | VISIT</title>

<?php include_once("templates/header.php");?>
<main>

    <section class="section--hero section--visit-us-header">
        <div class="hero">
            <div id="visit" class="hero--image">

                <img src="/img/building.png">
            </div>
            <div class="hero--content">
                <div class="wrapper">
                    <h2><br>Visit Us</h2>
                    <p>We offer tastings, tours, and more at our storehouse in Philadelphia. Come hang out and try something new!</p>
                    <a href="https://square.site/book/W83CDG2400C0S/philadelphia-mead-well-philadelphia-pa" class="button center-button">Book a Tour or Tasting</a>
                </div>
            </div>
            <div class="map">
                <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=philadelphia%20mead%20well&key=AIzaSyBoDlZrRZ-LLdMEKQtu90EZbnKIR2oWl6w" allowfullscreen></iframe>
            </div>
        </div>
    </section>
</main>

<?php include_once("templates/footer.php");?>

<style>
    #visit img {
        width: 100%;
    }

    .section--hero .hero {
        flex-direction: row-reverse;
    }
    div.map {
        display: none;
    }
</style>
