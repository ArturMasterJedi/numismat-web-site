<form method="post" action="editatributes.php" enctype="multipart/form-data">
    <input type="hidden" name="id" value="{$id}"><br>
    <label>Измените название</label><br>
    <input type="text" name="name" value="{$name}"><br>
    <label>Измените категорию</label><br>
    <label>Выберите новую категорию</label><br>
    <select name="new_cat">
        {section loop=$category name=i}
            {if $category[i].id==$id_cat}
                <option selected value="{$category[i].id}">{$category[i].name}</option>
            {/if}
            <option value="{$category[i].id}">{$category[i].name}</option>
        {/section}
    </select><br>
    <label>Фото</label><br>
    <img src='../assets/img/atribut/{$photo}' width="130px"><br><br>
    <label>Введите короткое название (Максимум 26 символов)</label><br>
    <input type="text" name="short_name" value="{$short_name}"><br>
    <h2>Загрузите новое фото</h2>
    <input type="hidden" name="oldphoto" value="{$photo}">
    <input type="file" name="new_photo"><br>
    <input type="submit" class="btn btn-success" name="send" value="Отредактировать"><br>
</form>