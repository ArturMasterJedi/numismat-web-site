<section class="edit">
<div>
    <form method="post" action="edititem.php" enctype="multipart/form-data">
        <h2>Изминение товара</h2><br>
        <input type="hidden" name="id" value="{$id}">
        <label>Измените название <small>(*обязательное поле)</small></label><br>
        <input type="text" name="name" value="{$name}"><br>
        <label>Измените код товара <small>(*обязательное поле)</small></label><br>
        <input type="text" name="kod" value="{$kod_tovara}"><br>
        <!--Изменение типа монеты НАЧАЛО-->
        <label>Измените тип товара <small>(*обязательное поле)</small></label><br>
        <select name="type">
            {if $type_monets=="коллекционные монеты"}
                <option selected value="коллекционные монеты">коллекционные монеты</option>
                <option value="обиходные монеты">обиходные монеты</option>
                <option value="аксессуары">аксессуары</option>
                <option value="другое">другое</option>
            {elseif $type_monets=="обиходные монеты"}
                <option value="коллекционные монеты">коллекционные монеты</option>
                <option selected value="обиходные монеты">обиходные монеты</option>
                <option value="аксессуары">аксессуары</option>
                <option value="другое">другое</option>
            {elseif $type_monets=="аксессуары"}
                <option value="коллекционные монеты">коллекционные монеты</option>
                <option value="обиходные монеты">обиходные монеты</option>
                <option selected value="аксессуары">аксессуары</option>
                <option value="другое">другое</option>
            {elseif $type_monets=="другое"}
                <option value="коллекционные монеты">коллекционные монеты</option>
                <option value="обиходные монеты">обиходные монеты</option>
                <option value="аксессуары">аксессуары</option>
                <option selected value="другое">другое</option>
            {/if}
        </select><br>
        <!--Изменение типа монеты КОНЕЦ-->
        <label>Измените страну <small>(*обязательное поле)</small></label><br>
        <input type="text" name="country" value="{$country}"><br>
        <label>Измените цену товара <small>(*обязательное поле)</small></label><br>
        <input type="text" name="price" value="{$price}"><br>
        <label>Введите старую цену товара до скидки</label><br>
        <input type="text" name="oldprice" value="{$oldprice}"><br>
        <label>Измените подтип товара данной категории <small>(*обязательное поле)</small></label><br>
        <select name="atribut">
            {section loop=$atr name=i}
                {if $name_atribut==$atr[i].name}
                    <option selected value="{$atr[i].id}">{$atr[i].name}</option>
                {else}
                    <option value="{$atr[i].id}">{$atr[i].name}</option>
                {/if}
            {/section}
        </select><br>
        <label>Введите количество данного товара <small>(*обязательное поле)</small></label><br>
        <input type="text" name="colichestvo" value="{$colichestvo}"><br>
        <label>Добавьте описание к товару</label><br>
        <textarea name="fulldescription">{$fulldescription}</textarea><br>
        <label>Введите материал с которого изготовлен товар</label><br>
        <input type="text" name="material" value="{$material}"><br>
        <label>Введите вес товара</label><br>
        <input type="text" name="weight" value="{$weight}"><br>
        <label>Введите диаметр товара</label><br>
        <input type="text" name="diametr" value="{$diametr}"><br>
        <label>Введите номинал</label><br>
        <input type="text" name="nominal" value="{$nominal}"><br>
        <label>Введите серию монеты</label><br>
        <input type="text" name="series" value="{$series}"><br>
        <!--Изменение гурта монеты НАЧАЛО-->
        <label>Измените тип гурта</label><br>
        <select name="gurt">
            {if $gurt=='null'}
                <option value="null" selected>Не выбрано</option>
                <option value="Рифлёный">Рифлёный</option>
                <option value="Гладкий">Гладкий</option>
                <option value="Надпись">Надпись</option>
            {elseif $gurt=='Рифлёный'}
                <option value="null">Не выбрано</option>
                <option value="Рифлёный" selected>Рифлёный</option>
                <option value="Гладкий">Гладкий</option>
                <option value="Надпись">Надпись</option>
            {elseif $gurt=='Гладкий'}
                <option value="null">Не выбрано</option>
                <option value="Рифлёный">Рифлёный</option>
                <option value="Гладкий" selected>Гладкий</option>
                <option value="Надпись">Надпись</option>
            {elseif $gurt=='Надпись'}
                <option value="null">Не выбрано</option>
                <option value="Рифлёный">Рифлёный</option>
                <option value="Гладкий">Гладкий</option>
                <option value="Надпись" selected>Надпись</option>
            {/if}
        </select><br>
        <!--Изменение гурта монеты КОНЕЦ-->
        <label>Измените год выпуска</label><br>
        <input type="text" name="year" value="{$year}"><br>
        <!--Изменение состояния монеты НАЧАЛО-->
        <label>Измените состояние</label><br>
        <select name="sostoyaniye">
            {if $quality=='null'}
                <option value="null" selected>Не выбрано</option>
                <option value="UNC / АЦ - Не была в обращении  / Анциркулейтед">UNC / АЦ - Не была в обращении  / Анциркулейтед</option>
                <option value="AU - Почти не была в употреблении">AU - Почти не была в употреблении</option>
                <option value="XF - Отличное">XF -  Отличное</option>
                <option value="VF - Хорошее">VF -  Хорошее</option>
                <option value="VG - Удовлетворительное">VG -  Удовлетворительное</option>
                <option value="G - Удовлетворительное">G -  Плохое</option>
            {elseif $quality=='UNC / АЦ - Не была в обращении  / Анциркулейтед'}
                <option value="null">Не выбрано</option>
                <option value="UNC / АЦ - Не была в обращении  / Анциркулейтед"selected>UNC / АЦ - Не была в обращении  / Анциркулейтед</option>
                <option value="AU - Почти не была в употреблении">AU - Почти не была в употреблении</option>
                <option value="XF - Отличное">XF -  Отличное</option>
                <option value="VF - Хорошее">VF -  Хорошее</option>
                <option value="VG - Удовлетворительное">VG -  Удовлетворительное</option>
                <option value="G - Удовлетворительное">G -  Плохое</option>
            {elseif $quality=='AU - Почти не была в употреблении'}
                <option value="null">Не выбрано</option>
                <option value="UNC / АЦ - Не была в обращении  / Анциркулейтед">UNC / АЦ - Не была в обращении  / Анциркулейтед</option>
                <option value="AU - Почти не была в употреблении" selected>AU - Почти не была в употреблении</option>
                <option value="XF - Отличное">XF -  Отличное</option>
                <option value="VF - Хорошее">VF -  Хорошее</option>
                <option value="VG - Удовлетворительное">VG -  Удовлетворительное</option>
                <option value="G - Удовлетворительное">G -  Плохое</option>
            {elseif $quality=='XF - Отличное'}
                <option value="null">Не выбрано</option>
                <option value="UNC / АЦ - Не была в обращении  / Анциркулейтед">UNC / АЦ - Не была в обращении  / Анциркулейтед</option>
                <option value="AU - Почти не была в употреблении">AU - Почти не была в употреблении</option>
                <option value="XF - Отличное" selected>XF -  Отличное</option>
                <option value="VF - Хорошее">VF -  Хорошее</option>
                <option value="VG - Удовлетворительное">VG -  Удовлетворительное</option>
                <option value="G - Удовлетворительное">G -  Плохое</option>
            {elseif $quality=='VF - Хорошее'}
                <option value="null">Не выбрано</option>
                <option value="UNC / АЦ - Не была в обращении  / Анциркулейтед">UNC / АЦ - Не была в обращении  / Анциркулейтед</option>
                <option value="AU - Почти не была в употреблении">AU - Почти не была в употреблении</option>
                <option value="XF - Отличное">XF -  Отличное</option>
                <option value="VF - Хорошее" selected>VF -  Хорошее</option>
                <option value="VG - Удовлетворительное">VG -  Удовлетворительное</option>
                <option value="G - Удовлетворительное">G -  Плохое</option>
            {elseif $quality=='VG - Удовлетворительное'}
                <option value="null">Не выбрано</option>
                <option value="UNC / АЦ - Не была в обращении  / Анциркулейтед">UNC / АЦ - Не была в обращении  / Анциркулейтед</option>
                <option value="AU - Почти не была в употреблении">AU - Почти не была в употреблении</option>
                <option value="XF - Отличное">XF -  Отличное</option>
                <option value="VF - Хорошее">VF -  Хорошее</option>
                <option value="VG - Удовлетворительное" selected>VG -  Удовлетворительное</option>
                <option value="G - Удовлетворительное">G -  Плохое</option>
            {elseif $quality=='G - Удовлетворительное'}
                <option value="null">Не выбрано</option>
                <option value="UNC / АЦ - Не была в обращении  / Анциркулейтед">UNC / АЦ - Не была в обращении  / Анциркулейтед</option>
                <option value="AU - Почти не была в употреблении">AU - Почти не была в употреблении</option>
                <option value="XF - Отличное">XF -  Отличное</option>
                <option value="VF - Хорошее">VF -  Хорошее</option>
                <option value="VG - Удовлетворительное">VG -  Удовлетворительное</option>
                <option value="G - Удовлетворительное" selected>G -  Плохое</option>
            {/if}
        </select><br>
        <!--Изменение состояния монеты КОНЕЦ-->
        <label>Измените тип чеканки монеты</label><br>
        <input type="text" name="chekan" value="{$chekan_type}"><br>
        <h4>Выберите новое главное фото товара</h4><br>
        <input type="file" name="newMain"><br>
        {section loop=$photo name=i}
            {if $photo[i].main==1}
                <input type="hidden" name="oldMain" value="{$photo[i].name}">
            {else}
            {/if}
        {/section}
        <input type="submit" name="send" value="Отредактировать" class="btn btn-success">
    </form>
    <br><br>
    <form method="post" enctype="multipart/form-data" action="edititem.php">
        <input type="hidden" name="id" value="{$id}">
        <input type="file" name="newPhotos[]" multiple="multiple"><br>
        <input type="submit" name="newSend" value="Загрузить другие фото" class="btn btn-success">
    </form>
</div>
<div>
    <table class="table">
        <tr><th>Старые фото товара</th></tr>
        {section loop=$photo name=i}
            {if $photo[i].main==1}
                <tr>
                    <th>Главное фото</th>
                </tr>
                <tr>
                    <th><img width="60px" name="oldMain" src='/assets/img/item/{$photo[i].name}'></th>
                </tr>
                <tr>
                    <th>Другие фото товара</th>
                </tr>
                <tr>
            {elseif $photo[i].main==0}
                <th><img width="70px" name="oldMain" src='/assets/img/item/{$photo[i].name}'></th>
            {/if}
            </tr>
        {/section}
    </table>
</div>
</section>