<br>
<div class="delForm">
    <h2>Удаление категории '{$name}'</h2><br>
    <img src='/assets/img/category/{$photo}' width="130px">
    <form method="post" action="deletecategory.php">
        <input type="hidden" name="id" value="{$id}">
        <label><b>Вы действительно хотите удалить категорию?</b></label><br>
        <label>ДА</label><input type="radio" value="yes" name="cid" checked>
        <label>НЕТ</label><input type="radio" value="no" name="cid"><br><br>
        <input type="submit" class="btn btn-danger" name="send" value="Удалить категорию">
    </form>
</div>