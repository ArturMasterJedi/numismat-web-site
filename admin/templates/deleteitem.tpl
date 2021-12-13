<br><h2>Удаление товара целеком</h2>
<form method="post" action="deleteitem.php" enctype="multipart/form-data">
    <input type="hidden" name="id" value="{$id}">
    <input type="hidden" name="model" value="{$model}">
    <label>Вы действительно хотите удалить?</label><br>
    <input type="radio" name="cid" value="yes" checked> Да<br>
    <input type="radio" name="cid" value="no"> Нет<br>
    <input type="submit" name="send" value="Удалить">
</form>
<h3>Удаление фотографий товара</h3>
    <table class="table">
        <tr>
            <th>Фото</th>
            <th>Управление</th>
        </tr>
        {section loop=$photos name=i}
            <tr>
                <td><img src='/assets/img/item/{$photos[i].name}' width="100px"></td>
                <td><a class="btn btn-danger" href="deletephoto.php?id_photo={$photos[i].id}&id_item={$id}&model={$model}">Удалить фото</a></td>
            </tr>
        {/section}
    </table>
