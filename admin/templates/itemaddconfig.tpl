<br><h2>Выберите категорию для товара</h2>
<div class="card-group">
    {section loop=$cat name=i}
        <div class="card">
            <img class="card-img-top" src="/assets/img/category/{$cat[i].photo}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{$cat[i].name}</h5>
            </div>
            <a class="btn btn-success" href="additem.php?id={$cat[i].id}&mode=additem">Выбрать</a>
        </div>
    {/section}
</div>