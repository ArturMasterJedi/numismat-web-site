<section class="bascedItem">
    <form method="post" action="basceditem.php">
    <section class="shopping-cart dark">
        <div class="container">
            <div class="block-heading">
                <h2>Корзина товаров</h2>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12 col-lg-8">

                        <div class="items">
                            {if count($shop)==0}
                                <h2>Корзина товаров пустая...</h2>
                            {elseif count($shop)>0}
                                {section loop=$shop name=i}
                                <div class="product">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img width="100px" class="img-fluid mx-auto d-block image" src="/assets/img/item/{$shop[i].photo}">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="info">
                                                <div class="row">
                                                    <div class="col-md-5 product-name">
                                                        <div class="product-name">
                                                            <a style="color: #f7810a" href="productinfo.php?id_item={$shop[i].id}">{$shop[i].name}</a>
                                                            <div class="product-info">
                                                                <div>Код товара: <span class="value">{$shop[i].kod_tovara}</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 quantity">
                                                        <label>Количество:</label>
                                                        <input id="quantity" type="number" value="{$shop[i].count}" min="1" max="{$shop[i].colichestvo}" name="count{$shop[i].id}" class="form-control quantity-input">

                                                    </div>
                                                    <div class="col-md-2 price">
                                                        <span>₴{$shop[i].price}</span>
                                                    </div>
                                                    <div class="col-md-1 del">
                                                        <a style="color: #ff0000" href="basced.php?id={$shop[i].id}&mode=del&script=order">Удалить</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                {/section}
                            {/if}
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="summary">
                            <h3>Вместе</h3>
                            <div class="summary-item"><span class="text">Сумма за товар(ы)</span><span class="price">₴{$totalSum}</span></div>
                            <div class="summary-item"><span class="text">Скидка по промокоду</span><span class="price">₴0</span></div>
                            <div class="summary-item"><span class="text">Доставка</span><span class="price">₴0</span></div>
                            <div class="summary-item"><span class="text">Сумма заказа</span><span class="price">₴{$totalSum}</span></div>
                            <br>
                            <div style="display: grid; grid-template-columns: repeat(2, 1fr); position: relative">
                                <input class="btn btn-warning" type="submit" name="reorder" value="Пересчитать">
                                <a class="btn btn-warning" href="basced.php?mode=clear">Очистить</a>
                            </div>
                            <br>
                            <a href="orderready.php" class="btn btn-success btn-lg btn-block">Оформить заказ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </form>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <hr/>
                    <h2>СПЕЦПРЕДЛОЖЕНИЕ ДЛЯ ВАС!</h2>
                </div>
                <div class="MultiCarousel" data-items="1,2,3,5" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div class="MultiCarousel-inner">
                        {section loop=$selectItem name=k}
                            <div class="item">
                                <div class="pad15">
                                    <div class="imgCarusel">
                                        <img src="/assets/img/item/{$selectItem[k].photo}">
                                    </div>
                                    <hr>
                                    <div class="nameCarusel">
                                        <p><STRONG>{$selectItem[k].name}</STRONG></p>
                                    </div>
                                    <p>₴ {$selectItem[k].price}</p>
                                    {if $view[k].sale>0}
                                        <p style="font-size: 18px; color: #ff0000">-{$selectItem[k].sale}% off</p>
                                    {else}
                                        <p style="font-size: 18px; color: #FFFFFF">-</p>
                                    {/if}
                                    <a class="btn btn-warning" href="productinfo.php?id_item={$selectItem[k].id}">Смотреть</a>
                                </div>
                            </div>
                        {/section}
                    </div>
                    <button class="btn btn-primary leftLst"><</button>
                    <button class="btn btn-primary rightLst">></button>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: -60px">
            <div class="row">
                <div class="col-md-12 text-center">
                    <hr/>
                    <h2>Распродажа монет со скидкой до 95%</h2>
                </div>
                <div class="MultiCarousel" data-items="1,2,3,5" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div class="MultiCarousel-inner">
                        {section loop=$selectItemSale name=k}
                            <div class="item">
                                <div class="pad15">
                                    <div class="imgCarusel">
                                        <img src="/assets/img/item/{$selectItemSale[k].photo}">
                                    </div>
                                    <hr>
                                    <div class="nameCarusel">
                                        <p><STRONG>{$selectItemSale[k].name}</STRONG></p>
                                    </div>
                                    <p>₴ {$selectItemSale[k].price}</p>
                                    <p style="font-size: 18px; color: #ff0000">-{$selectItemSale[k].sale}% off</p>
                                    <a class="btn btn-warning" href="productinfo.php?id_item={$selectItemSale[k].id}">Смотреть</a>
                                </div>
                            </div>
                        {/section}
                    </div>
                    <button class="btn btn-primary leftLst"><</button>
                    <button class="btn btn-primary rightLst">></button>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: -60px">
            <div class="row">
                <div class="col-md-12 text-center">
                    <hr/>
                    <h2>Недавно просмотренные товары</h2>
                </div>
                <div class="MultiCarousel" data-items="1,2,3,5" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div class="MultiCarousel-inner">
                        {section loop=$view name=k}
                            <div class="item">
                                <div class="pad15">
                                    <div class="imgCarusel">
                                        <img src="/assets/img/item/{$view[k].photo}">
                                    </div>
                                    <hr>
                                    <div class="nameCarusel">
                                        <p><STRONG>{$view[k].name}</STRONG></p>
                                    </div>
                                    <p>₴ {$view[k].price}</p>
                                    {if $view[k].sale>0}
                                        <p style="font-size: 18px; color: #ff0000">-{$view[k].sale}% off</p>
                                    {else}
                                        <p style="font-size: 18px; color: #FFFFFF">-</p>
                                    {/if}
                                    <a class="btn btn-warning" href="productinfo.php?id_item={$view[k].id}">Смотреть</a>
                                </div>
                            </div>
                        {/section}
                    </div>
                    <button class="btn btn-primary leftLst"><</button>
                    <button class="btn btn-primary rightLst">></button>
                </div>
            </div>
        </div>
    </section>
</section>
