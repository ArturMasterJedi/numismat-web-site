<div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
        <div class="col">
                <div class="card h-100 shadow-sm"><br><img id="box-img" class="box-img" src="/assets/img/item/1630144404futliar_oleny_rev-700x852.png" class="card-img-top" alt="...">
                    <div class="label-top shadow-sm">Asus Rog</div>
                    <div class="card-body">
                        <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-success">12354.00€</span> <span class="float-end"><span id="oldprice" class="small text-muted">1929</span></a></span> </div>
                        <h5 class="card-title">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem eaque ut eveniet aut quis rerum. Asperiores accusamus harum ducimus velit odit ut. Saepe, iste optio laudantium sed aliquam sequi.</h5>
                        <div class="text-center my-4" id="button_view"> <a href="#" class="btn btn-warning">Смотреть</a> </div>
                        <div class="clearfix mb-1"> <a href="#" class="float-start"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                        </svg></a> <a href="#" class="float-end"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                          <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                        </svg></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    :root {
        --font1: 'Heebo', sans-serif;
        --font2: 'Fira Sans Extra Condensed', sans-serif;
        --font3: 'Roboto', sans-serif
    }

    .container-fluid {
        max-width: 1200px
    }
    .card {
        max-width: 240px;
        background: #fff;
        box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
        transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
        border: 0;
        border-radius: 1rem
    }
    .card-img,
    .card-img-top {
        border-top-left-radius: calc(1rem - 1px);
        border-top-right-radius: calc(1rem - 1px)
    }
    .card h5 {
        overflow: hidden;
        height: 56px;
        font-weight: 900;
        font-size: 1rem
    }
    .card-img-top {
        width: 100%;
        max-height: 120px;
        object-fit: contain;
        padding: 30px
    }

    .card h2 {
        font-size: 1rem
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06)
    }

    .label-top {
        position: absolute;
        background-color: #8bc34a;
        color: #fff;
        top: 8px;
        right: 8px;
        padding: 5px 10px 5px 10px;
        font-size: .7rem;
        font-weight: 600;
        border-radius: 3px;
        text-transform: uppercase
    }

    .top-right {
        position: absolute;
        top: 24px;
        left: 24px;
        width: 90px;
        height: 90px;
        border-radius: 50%;
        font-size: 1rem;
        font-weight: 900;
        background: #ff5722;
        line-height: 90px;
        text-align: center;
        color: white
    }
    .float-start{
        color: #343a40;
    }
    .float-start:hover{
        color: #b02a37;
    }
    .top-right span {
        display: inline-block;
        vertical-align: middle
    }

    @media (max-width: 768px) {
        .card-img-top {
            max-height: 250px
        }
    }

    .over-bg {
        background: rgba(53, 53, 53, 0.85);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(0.0px);
        -webkit-backdrop-filter: blur(0.0px);
        border-radius: 10px
    }

    .btn {
        font-size: 1rem;
        font-weight: 500;
        text-transform: uppercase;
        padding: 5px 50px 5px 50px
    }

    .box .btn {
        font-size: 1.5rem
    }

    @media (max-width: 1025px) {
        .btn {
            padding: 5px 40px 5px 40px
        }
    }

    @media (max-width: 250px) {
        .btn {
            padding: 5px 30px 5px 30px
        }
    }

    .btn-warning {
        position: relative;
        width: 130px;
        padding: 10px;
        font-size: 16px;
        background: none #f7810a;
        color: #ffffff;
        fill: #ffffff;
        border: none;
        text-decoration: none;
        outline: 0;
        box-shadow: -1px 6px 19px rgba(247, 129, 10, 0.25);
        border-radius: 100px
    }

    .btn-warning:hover {
        background: none #ff962b;
        color: #ffffff;
        box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35)
    }

    .bg-success {
        font-size: 1rem;
        background-color: #f7810a !important
    }

    .bg-danger {
        font-size: 1rem
    }
    svg{
        width: 40px;
    }
    .float-end:hover{
        color: #0a53be;
    }
    .price-hp {
        font-size: 1rem;
        font-weight: 600;
        color: darkgray
    }

    .amz-hp {
        font-size: .7rem;
        font-weight: 600;
        color: darkgray
    }

    .fa-question-circle:before {
        color: darkgray
    }

    .fa-plus:before {
        color: darkgray
    }

    .box {
        border-radius: 1rem;
        background: #fff;
        box-shadow: 0 6px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);
        transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12)
    }

    #box-img {
        max-width: 200px;
        margin-left: 10px;
    }

    .thumb-sec {
        max-width: 300px
    }

    @media (max-width: 576px) {
        .box-img {
            max-width: 200px
        }

        .thumb-sec {
            max-width: 200px
        }
    }

    .inner-gallery {
        width: 60px;
        height: 60px;
        border: 1px solid #ddd;
        border-radius: 3px;
        margin: 1px;
        display: inline-block;
        overflow: hidden;
        -o-object-fit: cover;
        object-fit: cover
    }

    @media (max-width: 370px) {
        .box .btn {
            padding: 5px 40px 5px 40px;
            font-size: 1rem
        }
    }

    .disclaimer {
        font-size: .9rem;
        color: darkgray
    }

    .related h3 {
        font-weight: 900
    }
</style>