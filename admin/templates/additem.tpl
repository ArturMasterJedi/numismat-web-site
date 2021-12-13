<br><h2>Добавление товара</h2>
<form class="addForm" method="post" enctype="multipart/form-data" action="additem.php?id={$id}&mode=additem">
        <input type="hidden" name="id" value="{$id}">
        <label>Введите название <small>(*обязательное поле)</small></label><br>
        <input type="text" name="name"><br>
        <label>Введите код товара <small>(*обязательное поле)</small></label><br>
        <input type="text" name="kod"><br>
        <label>Выберите тип товара <small>(*обязательное поле)</small></label><br>
        <select name="type">
            <option value="коллекционные монеты">коллекционные монеты</option>
            <option value="обиходные монеты">обиходные монеты</option>
            <option value="аксессуары">аксессуары</option>
            <option value="другое">другое</option>
        </select><br>
        <label>Введите страну <small>(*обязательное поле)</small></label><br>
        <input type="text" name="country"><br>
        <label>Введите цену товара <small>(*обязательное поле)</small></label><br>
        <input type="text" name="price"><br>
        <label>Введите старую цену товара до скидки</label><br>
        <input type="text" name="oldprice"><br>
        <label>Выберите подтип товара данной категории <small>(*обязательное поле)</small></label><br>
        <select name="atribut">
            {section loop=$atribut name=i}
                <option value="{$atribut[i].id}">{$atribut[i].name}</option>
            {/section}
        </select><br>
        <label>Введите количество данного товара <small>(*обязательное поле)</small></label><br>
        <input type="text" name="colichestvo"><br>
        <label>Добавьте описание к товару</label><br>
        <textarea name="fulldescription"></textarea><br>
        <label>Введите тираж товара</label><br>
        <input type="text" name="tirazh"><br>
        <label>Введите материал с которого изготовлен товар</label><br>
        <input type="text" name="material"><br>
        <label>Введите вес товара</label><br>
        <input type="text" name="weight"><br>
        <label>Введите диаметр товара</label><br>
        <input type="text" name="diametr"><br>
        <label>Введите номинал</label><br>
        <input type="text" name="nominal"><br>
        <label>Введите серию монеты</label><br>
        <input type="text" name="series"><br>
        <label>Выберите тип гурта</label><br>
        <select name="gurt">
            <option value="null" selected>Не выбрано</option>
            <option value="Рифлёный">Рифлёный</option>
            <option value="Гладкий">Гладкий</option>
            <option value="Надпись">Надпись</option>
        </select><br>
        <label>Введите год выпуска</label><br>
        <input type="text" name="year"><br>
        <label>Выберите состояние</label><br>
        <select name="sostoyaniye">
            <option value="null" selected>Не выбрано</option>
            <option value="UNC / АЦ - Не была в обращении  / Анциркулейтед">UNC / АЦ - Не была в обращении  / Анциркулейтед</option>
            <option value="AU - Почти не была в употреблении">AU - Почти не была в употреблении</option>
            <option value="XF - Отличное">XF -  Отличное</option>
            <option value="VF - Хорошее">VF -  Хорошее</option>
            <option value="VG - Удовлетворительное">VG -  Удовлетворительное</option>
            <option value="G - Удовлетворительное">G -  Плохое</option>
        </select><br>
        <label>Введите тип чеканки монеты</label><br>
        <input type="text" name="chekan"><br>
        <br><h3>Добавьте фото к товару</h3><br>
        <label>Выберите главное фото товара <small>(*обязательное поле)</small></label><br>
        <input type="file" name="main_photo"><br>
        <label>Выберите другие фото товара</label><br>
        <input type="file" name="photos[]" multiple="multiple"><br>
        <input type="submit" name="send" value="Добавить" class="btn btn-success">
    </form>
