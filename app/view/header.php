<!DOCTYPE html>
<html>
    <head>
        <?php include CUSTOM . 'theme.php'; ?>
    </head>
    <body>
        <h1>This is Header</h1>

        <nav class="nav navbar-default">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">LOGO</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mydropdown">
                    <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                </button>
            </div>
            <div class="container">

                <div class="collapse navbar-collapse" id="mydropdown">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="/omsin2/home/index">HOME</a>
                        </li>
                        <li>
                            <a href="/omsin2/home/about">ABOUT</a>
                        </li>
                        <li>
                            <a class="dropdown-toggle" id="dropdowns1" data-toggle="dropdown" href="#">DROPDOWN <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="#">1</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#">2</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#">3</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#">4</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
