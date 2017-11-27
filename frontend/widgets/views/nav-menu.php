<nav class="navbar navbar-dark navbar-expand-smd bg-red py-3">
    <div class="container">
        <a href="/" class="navbar-brand"><img src="images/logo6.png"></a>
        <div class="navbar-collapse d-none d-xl-block" id="collapsingNavbar3">
            <ul class="navbar-nav justify-content-between nav-menu-header">
                <?=$items?>
            </ul>
        </div>
        <button class="navbar-toggler button-header" type="button" data-toggle="collapse" data-target="#navbarNav">
            <img src="images/top-submenu-icon.png">
            <!--<span class="navbar-toggler-icon"></span>-->
        </button>

        <div class="navbar-collapse collapse" id="navbarNav">
            <ul class="navbar-nav justify-content-between">
                <?=$items?>
            </ul>
        </div>
    </div>
</nav>

