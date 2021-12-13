<br><h2>Категории товаров</h2>
<table class="table">
    <tr>
        <th>ID товара</th>
        <th>Фото категории</th>
        <th>Подкатегории</th>
        <th>Название категории</th>
        <th colspan="2">Управление</th>
    </tr>
{section loop=$category name=i}
    <tr>
        <td>{$category[i].id}</td>
        <td><img src='/assets/img/category/{$category[i].photo}' width="130px"></td>
        <td><a href="indexatributes.php?id={$category[i].id}&name={$category[i].name}">Смотреть<br>подкатегории</a></td>
        <td>{$category[i].name}</td>
        <td><a class="btn btn-success" href="editcategory.php?id={$category[i].id}">Редактировать</a></td>
        <td><a class="btn btn-danger" href="deletecategory.php?id={$category[i].id}">Удалить</a></td>
    </tr>
    {/section}
</table>