<?php include APP_PATH . '/views/partials/head.view.php' ?>
<?php include APP_PATH . '/views/partials/header.view.php' ?>

    <div class="l-main ed-container">
        <div class="ed-item">
            <h1>Polo Escuela Digital Clásico</h1>
            <div class="ed-container product__page">
                <div class="ed-item tablet-50"><img src="<?= PUBLIC_PATH . '/img/' . $article->image ?>" class="product__page__img"/></div>
                <div class="ed-item tablet-50 product__page__description">
                    <p><?= $article->description ?></p>
                    <div class="ed-container product__page__data">

                        <div class="ed-item main-center">
                            <h3 class="product__page__size">
                                Precio: <?= $article->price ?>
                            </h3>
                        </div>

                        <div class="ed-item main-center">
                            <h3 class="product__page__size">
                                Tallas:
                                <?php foreach ($article->sizes as $size): ?>
                                    <?= $size->name ?>
                                <?php endforeach; ?>
                            </h3>
                        </div>

                        <div class="ed-item main-center">
                            <h3 class="product__page__color">Color: negro</h3>
                        </div>

                        <div class="ed-item main-center"><a href="#" class="boton icon-cart espacio product__page__buy">Comprar</a>
                        </div>

                        <div class="ed-item main-center product__page__share">
                            <div class="sociales"><a href="http://facebook.com" class="icon-facebook"></a><a
                                    href="http://twitter.com" class="icon-twitter"></a><a href="http://instagram.com"
                                                                                          class="icon-instagram"></a><a
                                    href="http://pinterest.com" class="icon-pinterest"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include APP_PATH . '/views/partials/foot.view.php' ?>