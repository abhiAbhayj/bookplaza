<div class="container-fluid">
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="index.php" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><i class="fa fa-book" style="color:#D19C97"></i>BookPlaza</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="viewsearchbook.php" method="POST">
                    <div class="input-group">
                        <input type="text" name="book" class="form-control" placeholder="Search for books" minlength="3" title="Enter more than two characters">
                        <div class="input-group-append" style="margin-left: -12px;">
                            <span class="input-group-text bg-transparent text-primary" style="border: 0ch;">
                              <button type="submit" name="search" class="btn btn-primary btn-sm" style="height:38px; margin-top:-6px"><i class="fa fa-search"></i>Search</button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>