<div class="container-fluid cont-header">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <a href="/">
                    <p class="txt-brand">TutiFoodie</p>
                </a>
                <p class="tagline">Find the best restaurant for you!</p>
            </div>
            <div class="col-md-7 search">
                    <form method="POST" action="/search">
                        @csrf
                        <a href=""><i class="fa fa-search btn-search"></i></a>
                        <input type="text" name="search" class="search-box" placeholder="City or restaurant name">
                    </form>
            </div>
        </div>
    </div>
</div>