<form method="post" action="basceditem.php">
    <section class="shopping-cart dark">
        <div class="container">
            <div class="block-heading">
                <h2>Оформление заказа</h2>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12 col-lg-8">

                        <div class="items">
                                <div class="product">
                                    <div class="row" style="padding: 10px">
                                        <div class="col-md-12">
                                            <h4 style="color: #343a40" class="col-md-12">1. Контактная информация</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-auto">
                                                <label for="inputPassword6" class="col-form-label">Имя</label>
                                            </div>
                                            <div class="col-auto">
                                                <input type="text" placeholder="Введите ваше имя..." id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-auto">
                                                <label for="inputPassword6" class="col-form-label">Телефон</label>
                                            </div>
                                            <div class="col-auto">
                                                <input type="text" placeholder="Введите ваш телефон..." id="inputPassword6" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-auto">
                                                <label for="inputPassword6" class="col-form-label">e-mail</label>
                                            </div>
                                            <div class="col-auto">
                                                <input type="text" placeholder="Введите ваш e-mail..." id="inputPassword6" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-auto">
                                                <label for="inputPassword6" class="col-form-label">Ваша область</label>
                                            </div>
                                            <div class="col-auto">
                                                <select class="form-select" aria-label="Default select example" name="city">
                                                    <option value="1">Киевская обл.</option>
                                                    <option value="2">Харьковская обл.</option>
                                                    <option value="3">Днепропетровская обл.</option>
                                                    <option value="5">Оддеская обл.</option>
                                                    <option value="6">Запорожская обл.</option>
                                                    <option value="7">Львовская обл.</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-auto">
                                                <label for="inputPassword6" class="col-form-label">Город</label>
                                            </div>
                                            <div class="col-auto">
                                                <input type="text" placeholder="Введите ваш город..." id="inputPassword6" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-12" style="margin-top: 35px; margin-bottom: 35px">
                                            <h4 style="color: #343a40" class="col-md-12">2. Выберите способ доставки и оплаты </h4>
                                            <p style="text-decoration: underline">Доставка</p>
                                            <table class="form-control" border="1" style="border-spacing: 7px 11px">
{*                                                <tr>*}
{*                                                    <td><input type="radio" name="magaz"></td>*}
{*                                                    <td><img src="/assets/img/logo/photo_2021-09-17_18-42-17.jpg" width="25px"></td>*}
{*                                                    <td> Самовывоз из магазина</td>*}
{*                                                    <td>&nbsp;&nbsp;&nbsp;Самый быстрий&nbsp;&nbsp;&nbsp;</td>*}
{*                                                    <td style="color: #008000; margin-right: 20%">Бесплатно</td>*}
{*                                                </tr>*}

                                                <tr>
                                                    <td><input type="radio" name="magaz">&nbsp;</td>
                                                    <td><img src="/assets/img/logo/novaposhta.png" width="25px">&nbsp;</td>
                                                    <td> Доставка в квартиру, Нова Пошта</td>
                                                    <td>&nbsp;&nbsp;&nbsp;11/31/2021&nbsp;&nbsp;&nbsp;</td>
                                                    <td style="margin-right: 20%">89 ₴</td>
                                                </tr>

                                                <tr>
                                                    <td><input type="radio" name="magaz">&nbsp;</td>
                                                    <td><img src="/assets/img/logo/novaposhta.png" width="25px">&nbsp;</td>
                                                    <td> Доставка в отделение, Нова Пошта</td>
                                                    <td>&nbsp;&nbsp;&nbsp;11/31/2021&nbsp;&nbsp;&nbsp;</td>
                                                    <td style="margin-right: 20%">60 ₴</td>
                                                </tr>

                                                <tr>
                                                    <td><input type="radio" name="magaz">&nbsp;</td>
                                                    <td><img src="/assets/img/logo/og-logo.png" width="25px">&nbsp;</td>
                                                    <td> Доставка в отделение, Укр Почты</td>
                                                    <td>&nbsp;&nbsp;&nbsp;12/4/2021&nbsp;&nbsp;&nbsp;</td>
                                                    <td style="margin-right: 20%">30 ₴</td>
                                                </tr>

                                                <tr>
                                                    <td><input class="radio" type="radio" name="magaz">&nbsp;</td>
                                                    <td><img src="/assets/img/logo/justin.png" width="25px">&nbsp;</td>
                                                    <td> Доставка в отделение, Justin</td>
                                                    <td>&nbsp;&nbsp;&nbsp;11/31/2021&nbsp;&nbsp;&nbsp;</td>
                                                    <td style="margin-right: 20%">30 ₴</td>
                                                </tr>
                                            </table>
                                            <div class="col-auto">
                                                <input type="text" placeholder="Введите номер отделения..." id="inputPassword6" class="form-control">
                                            </div>

                                            <br><p style="text-decoration: underline">Оплата</p>
                                            <div class="row">
                                                <span class="col-md-6"><input type="radio" name="1"><img src="/assets/img/logo/novaposhta.png" width="20px"> Наложенный платеж</span>
                                                <span class="col-md-6"><input type="radio" name="1"><img src="/assets/img/icon/cardbank.png" width="20px"> Оплата картой</span>
                                            </div>
                                            <br><br>
                                            <div class="row">
                                                <span style="text-decoration: underline; text-decoration-color: #ff962b"><input type="checkbox"> Мне можно не перезванивать для оформления заказа</span>
                                            </div>
                                        </div>
                                    </div>




                                    <div>
                                        <h5><pre>   Заказанные товары</pre></h5>
                                        <table class="table">
                                            <thead class="thead-light">
                                                <tr style="font-size: 12px">
                                                    <th id="photoOrder" scope="col">Фото</th>
                                                    <th scope="col">Название</th>
                                                    <th scope="col">Количество</th>
                                                    <th scope="col">Стоимость</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            {section loop=$itemOrder name=i}
                                                <tr>
                                                    <td  id="photoOrder"><img src='/assets/img/item/{$itemOrder[i].photo}' width="60px"></td>
                                                    <td><p>{$itemOrder[i].name}</p></td>
                                                    <td><p>{$itemOrder[i].count}</p></td>
                                                    <td>{$itemOrder[i].sum} ₴</td>
                                                </tr>
                                            {/section}
                                            </tbody>
                                        </table>
                                        <div class="row">
                                            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Общая стоимость - {$total} ₴</b>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="summary">
                            <h3>Summary</h3>
                            <div class="summary-item"><span class="text">Сумма за товар(ы)</span><span class="price">₴{$totalSum}</span></div>
                            <div class="summary-item"><span class="text">Скидка по промокоду</span><span class="price">₴0</span></div>
                            <div class="summary-item"><span class="text">Доставка</span><span class="price">₴0</span></div>
                            <div class="summary-item"><span class="text">Сумма заказа</span><span class="price">₴{$totalSum}</span></div>
                            <br>
                            <a href="orderready.php" class="btn btn-outline-warning">Подтвердить заказ</a>
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
