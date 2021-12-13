<br><h2>Добавление атрибута категории</h2>
<form method="post" enctype="multipart/form-data" action="addatributes.php">
    <label>Выберите к какой категории относиться атрибут</label><br>
    <select name="categories">
        {section loop=$categories name=i}
            <option value="{$categories[i].id}">{$categories[i].name}</option>
        {/section}
    </select><br>
    <label>Введите название атрибута</label><br>
    <input type="text" name="name"><br>
    <label>Введите короткое название (Максимум 26 символов)</label><br>
    <input type="text" name="short_name"><br>
    <label>Выберите фото атрибута</label><br>
    <input type="file" name="photo"><br>
    <input type="submit" class="btn btn-success" name="send"><br>
</form>