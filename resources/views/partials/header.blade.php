<header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="my-logo-container my-3">
                        <img src="/img/dc-logo.png" alt="">
                    </div>
                    <div class="my-menu-container">
                        @foreach ($menuLinks as $link)
                            <a href="#" class="mx-3">{{ link . text }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<style>
    .my-logo-container img {
        width: 80%;
    }

    a {
        text-decoration: none;
        color: black;
    }
</style>
