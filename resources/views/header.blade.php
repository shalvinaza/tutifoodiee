<div class="container-fluid cont-header">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <a href="/">
                    <p class="txt-brand">TutiFoodie</p>
                </a>
                <p class="tagline">Find the best restaurant for you!</p>
            </div>
            <div class="col-md-7">
                <form method="POST" action="/search">
                    @csrf
                    <div class="row row-search">
                        <button class="btn"><i class="fa fa-search btn-search"></i></button>
                        <input type="text" name="search" class="search-box" placeholder="City or restaurant name">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>