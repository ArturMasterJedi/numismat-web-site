<form method="post" action="editcategory.php" enctype="multipart/form-data">
    <input type="hidden" name="id" value="{$id}"><br>
    <label>Измените название</label><br>
    <input type="text" name="name" value="{$name}"><br>
    <label>Измените описание категории</label><br>
    <textarea name="description">{$description}</textarea><br>
    <label>Измените короткое название (Максимум 23 символа)</label><br>
    <input type="text" name="short_name" value="{$short_name}"><br>
    <label>Фото</label><br>
    <img src='../assets/img/category/{$photo}' width="130px"><br><br>
    <input type="submit" class="btn btn-success" name="send" value="Отредактировать"><br>
</form>
<br>
<form method="post" enctype="multipart/form-data" action="editcategory.php">
    <h2>Загрузите новое фото</h2>
    <input type="hidden" name="id" value="{$id}">
    <input type="hidden" name="oldphoto" value="{$photo}">
    <input type="file" name="new_photo"><br>
    <input class="btn btn-success" type="submit" name="sendnew" value="Изменить фото">
</form>