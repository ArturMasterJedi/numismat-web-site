<br><h2>Ассортимент товаров</h2>
<table class="table">
    <tr>
        <th>ID товара</th>
        <th>Фото товара</th>
        <th>Название</th>
        <th>Код товара</th>
        <th>Цена</th>
        <th>Количество</th>
        <th colspan="2">Управление</th>
    </tr>
    {section loop=$item name=i}
        <tr>
            <td>{$item[i].id}</td>
            <td><img src='/assets/img/item/{$item[i].photo}' width="130px"></td>
            <td>{$item[i].name}</td>
            <td>{$item[i].kod}</td>
            <td>{$item[i].price}/грн</td>
            <td>{$item[i].colichestvo}</td>
            <td><a class="btn btn-success" href="edititem.php?id={$item[i].id}">Редактировать</a></td>
            <td><a class="btn btn-danger" href="deleteitem.php?id={$item[i].id}&model={$item[i].name}">Удалить</a></td>
        </tr>
    {/section}
</table>
<nav aria-label="...">
    <ul class="pagination">
        {if $aktiv == 1}
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Назад</a>
            </li>
        {else}
            <li class="page-item">
                <a class="page-link" href="indexitem.php?page={($aktiv-1)}" tabindex="-1">Назад</a>
            </li>
        {/if}
        {section loop=$pages name=i}
            {if $pages[i].pag == $aktiv}
                <li class="page-item disabled"><a class="page-link disabled" href="#">{$pages[i].pag}</a></li>
            {else}
                <li class="page-item"><a class="page-link" href="indexitem.php?page={$pages[i].pag}">{$pages[i].pag}</a></li>
            {/if}
        {/section}
        {if $aktiv == $count}
            <li class="page-item disabled">
                <a class="page-link" href="indexitem.php?page={($aktiv+1)}">Вперёд</a>
            </li>
        {else}
            <li class="page-item">
                <a class="page-link" href="indexitem.php?page={($aktiv+1)}">Вперёд</a>
            </li>
        {/if}
    </ul>
</nav>