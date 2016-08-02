<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Mery's project</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="/users/register">Register</a></li>
                <li><a href="/users/login">Login</a></li>
            </ul>

            <?php if (isset($_SESSION['login_user']) && $_SESSION['login_user']) { ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/users/logout">Log out</a></li>
                </ul>
            <?php } ?>
        </div>
    </div>
</nav>