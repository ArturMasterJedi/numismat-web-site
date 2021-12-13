<main class="cd-main-content">
    <div class="cd-tab-filter-wrapper">
        <div class="cd-tab-filter">
            <ul class="cd-filters">
                <li class="placeholder">
                    <a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
                </li>
                <li class="filter"><a class="selected" href="#0" data-type="all">All</a></li>
                <li class="filter" data-filter=".color-1"><a href="#0" data-type="color-1">Color 1</a></li>
                <li class="filter" data-filter=".color-2"><a href="#0" data-type="color-2">Color 2</a></li>
            </ul> <!-- cd-filters -->
        </div> <!-- cd-tab-filter -->
    </div> <!-- cd-tab-filter-wrapper -->
    <div class="cd-filter">
        <form>
            <div class="cd-filter-block">
                <h4>Search</h4>

                <div class="cd-filter-content">
                    <input type="search" placeholder="Try color-1...">
                </div> <!-- cd-filter-content -->
            </div> <!-- cd-filter-block -->

            <div class="cd-filter-block">
                <h4>Check boxes</h4>

                <ul class="cd-filter-content cd-filters list">
                    <li>
                        <input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
                        <label class="checkbox-label" for="checkbox1">Option 1</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
                        <label class="checkbox-label" for="checkbox2">Option 2</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
                        <label class="checkbox-label" for="checkbox3">Option 3</label>
                    </li>
                </ul> <!-- cd-filter-content -->
            </div> <!-- cd-filter-block -->

            <div class="cd-filter-block">
                <h4>Select</h4>

                <div class="cd-filter-content">
                    <div class="cd-select cd-filters">
                        <select class="filter" name="selectThis" id="selectThis">
                            <option value="">Choose an option</option>
                            <option value=".option1">Option 1</option>
                            <option value=".option2">Option 2</option>
                            <option value=".option3">Option 3</option>
                            <option value=".option4">Option 4</option>
                        </select>
                    </div> <!-- cd-select -->
                </div> <!-- cd-filter-content -->
            </div> <!-- cd-filter-block -->

            <div class="cd-filter-block">
                <h4>Radio buttons</h4>

                <ul class="cd-filter-content cd-filters list">
                    <li>
                        <input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
                        <label class="radio-label" for="radio1">All</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2">
                        <label class="radio-label" for="radio2">Choice 2</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".radio3" type="radio" name="radioButton" id="radio3">
                        <label class="radio-label" for="radio3">Choice 3</label>
                    </li>
                </ul> <!-- cd-filter-content -->
            </div> <!-- cd-filter-block -->
        </form>

        <a href="#0" class="cd-close">X</a>
    </div> <!-- cd-filter -->

    <a href="#0" class="cd-filter-trigger">Фильтры</a>
    <section class="outItem">
        <section class="sideMenu" style="background: #dbdbdb; height: 100%">
            <ul id="accordion" class="accordion">
                {foreach from=$category key=k item=i}
                    <li>
                        <div class="link"><img width="32px" src="/assets/img/category/{$i.photo}">{$i.name}<i class="fa fa-chevron-down"></i></div>
                        <ul class="submenu">
                            {section loop=$atribute name=i}
                                {if $i.id==$atribute[i].id_cat}
                                    <li><a href="indexitem.php?id_atribute={$atribute[i].id}">{$atribute[i].name}</a></li>
                                {/if}
                            {/section}
                        </ul>
                    </li>
                {/foreach}
            </ul>

            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-12">
                        <h2>Отзывы о нас</h2>
                        {section loop=$comment name=k}
                        <div class="comment mt-4 text-justify">
                            <h5 style="color: black">{$comment[k].name}</h5>
                            <span>{$comment[k].date}</span><br>
                            <p>{$comment[k].text}</p>
                        </div>
                        {/section}
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form class="formComment" method="post" action="loading.php" id="algin-form">
                            <div class="form-group">
                                <h4>Leave a comment</h4> <label for="message">Message</label> <textarea name="text_comment" id="" msg cols="30" rows="5" class="form-control" style="background-color: black;"></textarea>
                            </div>
                            <div class="form-group"> <label for="name">Name</label> <input type="text" name="name_comment" id="fullname" class="form-control"> </div>
                            <div class="form-group"> <label for="email">Email</label> <input type="text" name="email_comment" id="email" class="form-control"> </div>
                            <div class="form-group">
                                <p class="text-secondary">If you have a <a href="#" class="alert-link">gravatar account</a> your address will be used to display your profile picture.</p>
                            </div>
                            <div class="form-inline"> <input type="checkbox" name="check" id="checkbx" class="mr-1"> <label for="subscribe">Subscribe me to the newlettter</label> </div>
                            <div class="form-group"> <input type="submit" id="post" name="postComment" class="btn btn-warning" value="Оставить коментарии"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="indexitem">
{*                <div style="width: 100%; height: 100%; background: #b02a37; display: grid; grid-template-columns: repeat(4, 1fr)" class="row">*}
{*                    {foreach from=$category key=k item=i}*}
{*                    <div class="drawn_card">*}
{*                        <div class="drawn-img">*}
{*                            <img src="/assets/img/category/{$i.photo}">*}
{*                        </div>*}
{*                        <h4 class="hdrawn">{$i.name}</h4>*}
{*                        <a class="btn btn-warning">Показать</a>*}
{*                    </div>*}
{*                    {/foreach}*}
{*                </div>*}

                <section id="cardItem" class="container-fluid bg-trasparent my-4 p-3" ">
                    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-4 row-cols-xl-5 g-2">
                        {section loop=$item name=i}
                            <div class="col">
                                <div class="card h-100 shadow-sm"><br>
                                    <div id="divImg"><img id="box-img" class="box-img" src="/assets/img/item/{$item[i].photo}" class="card-img-top" alt="..."></div>
                                    {if $item[i].saleperc != null}
                                        <div class="label-top shadow-sm">- {$item[i].saleperc} %</div>
                                    {/if}
                                    <div class="card-body">
                                        <hr>
                                        <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-success">{$item[i].price}₴</span> <span class="float-end">
                                                {if $item[i].oldprice != null}
                                                    <span id="oldprice" class="small text-muted">{$item[i].oldprice} ₴</span>
                                                {/if}
                                        </a></span> </div>
                                        <h5 class="card-title">{$item[i].name}</h5>
                                        <div class="text-center my-4" id="button_view"> <a href="viewed.php?id_item={$item[i].id}" class="btn btn-warning">Смотреть</a> </div>
                                        <div class="clearfix mb-1"> <a href="#" class="float-start"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                </svg></a> <a href="basced.php?id={$item[i].id}&mode=add" class="float-end"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                                                </svg></a> </div>
                                    </div>
                                </div>
                            </div>
                        {/section}
                    </div>
                </section>

                <nav class="pag">
                    <ul class="pagination">
                        {if $aktivpage == 1}
                            <li class="page-item">
                                <a class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                </a>
                            </li>
                        {else}
                            <li class="page-item">
                                <a href="indexitem.php?page={($aktivpage-1)}" class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                </a>
                            </li>
                        {/if}
                        {section loop=$pag name=i}
                            {if $pag[i].pag == $aktivpage}
                                <li class="page-item"><a style="color: #f7810a" class="page-link">{$pag[i].pag}</a></li>
                            {else}
                                <li class="page-item"><a href="indexitem.php?page={$pag[i].pag}" class="page-link">{$pag[i].pag}</a></li>
                            {/if}
                        {/section}
                        {if $aktivpage == $count}
                            <li class="page-item">
                                <a class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">»</span>
                                </a>
                            </li>
                        {else}
                            <a href="indexitem.php?page={($aktivpage+1)}" class="page-link" aria-label="Previous">
                                <span aria-hidden="true">»</span>
                            </a>
                        {/if}
                    </ul>
                </nav>

    </section>

</main> <!-- cd-main-content -->

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <hr>
                <h2>СПЕЦПРЕДЛОЖЕНИЕ ДЛЯ ВАС!</h2>
            </div>
            <div class="MultiCarousel" data-items="1,2,3,5" data-slide="1" id="MultiCarousel"  data-interval="1000">
                <div class="MultiCarousel-inner">
                    {section loop=$selectItem name=k}
                        <div class="item">
                            <div class="pad15">
                                <div class="imgCarusel">
                                    <img src="/assets/img/item/{$selectItem[k].photo}">
                                </div>
                                <hr>
                                <div class="nameCarusel">
                                    <p><STRONG>{$selectItem[k].name}</STRONG></p>
                                </div>
                                <p>₴ {$selectItem[k].price}</p>
                                <p>50% off</p>
                                <a class="btn btn-warning" href="productinfo.php?id_item={$selectItem[k].id}">Смотреть</a>
                            </div>
                        </div>
                    {/section}
                </div>
                <button class="btn btn-primary leftLst"><</button>
                <button class="btn btn-primary rightLst">></button>
            </div>
        </div>
    </div>

        <div class="container" style="margin-top: -60px">
            <div class="row">
                <div class="col-md-12 text-center">
                    <hr>
                    <h2>Распродажа монет со скидкой до 95%</h2>
                </div>
                <div class="MultiCarousel" data-items="1,2,3,5" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div class="MultiCarousel-inner">
                        {section loop=$selectItemSale name=k}
                            {if $selectItemSale[k].sale > 0}
                            <div class="item">
                                <div class="pad15">
                                    <div class="imgCarusel">
                                        <img src="/assets/img/item/{$selectItemSale[k].photo}">
                                    </div>
                                    <hr>
                                    <div class="nameCarusel">
                                        <p><STRONG>{$selectItemSale[k].name}</STRONG></p>
                                    </div>
                                    <p>₴ {$selectItemSale[k].price}</p>
                                    <p style="font-size: 18px; color: #ff0000">-{$selectItemSale[k].sale}% off</p>
                                    <a class="btn btn-warning" href="viewed.php?id_item={$selectItemSale[k].id}">Смотреть</a>
                                </div>
                            </div>
                            {/if}
                        {/section}
                    </div>
                    <button class="btn btn-primary leftLst"><</button>
                    <button class="btn btn-primary rightLst">></button>
                </div>
            </div>
        </div>

    {if count($view)>5}
    <div class="container" style="margin-top: -60px">
        <div class="row">
            <div class="col-md-12 text-center">
                <hr>
                <h2>Недавно просмотренные товары</h2>
            </div>
            <div class="MultiCarousel" data-items="1,2,3,5" data-slide="1" id="MultiCarousel"  data-interval="1000">
                <div class="MultiCarousel-inner">
                    {section loop=$view name=k}
                        <div class="item">
                            <div class="pad15">
                                <div class="imgCarusel">
                                    <img src="/assets/img/item/{$view[k].photo}">
                                </div>
                                <hr>
                                <div class="nameCarusel">
                                    <p><STRONG>{$view[k].name}</STRONG></p>
                                </div>
                                <p>₴ {$view[k].price}</p>
                                {if $view[k].sale>0}
                                    <p style="font-size: 18px; color: #ff0000">-{$view[k].sale}% off</p>
                                {else}
                                    <p style="font-size: 18px; color: #FFFFFF">-</p>
                                {/if}
                                <a class="btn btn-warning" href="productinfo.php?id_item={$view[k].id}">Смотреть</a>
                            </div>
                        </div>
                    {/section}
                </div>
                <button class="btn btn-primary leftLst"><</button>
                <button class="btn btn-primary rightLst">></button>
            </div>
        </div>
    </div>
    {/if}
</section>