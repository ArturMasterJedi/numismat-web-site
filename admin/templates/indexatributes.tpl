<h2>Атрибуты категории '{$nameCategory}'</h2><br>
<table class="table">
    <tr>
        <th>ID атрибуту</th>
        <th>Фото атрибута категории</th>
        <th>Товары атрибута</th>
        <th>Название атрибута</th>
        <th colspan="2">Управление</th>
    </tr>
    {section loop=$atributes name=i}
        <tr>
            <td>{$atributes[i].id}</td>
            <td><img src='/assets/img/atribut/{$atributes[i].photo}' width="130px" height="130px"></td>
            <td>Товары данного атрибута<br><a class="btn btn-secondary" href="indexitem.php?id={$atributes[i].id}">Смотреть</a></td>
            <td>{$atributes[i].name}</td>
            <td><a class="btn btn-success" href="editatributes.php?id={$atributes[i].id}&category={$cat}">Редактировать</a></td>
            <td><a class="btn btn-danger" href="deleteatributes.php?id={$atributes[i].id}">Удалить</a></td>
        </tr>
    {/section}
</table>