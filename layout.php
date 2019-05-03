<?php
class Layout
{
    public static function Header($judul)
    {
        return '
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="' . $judul . '">
            <meta name="author" content="Ardi Ragil Saputra">
            <title>' . $judul . '</title>
            <!-- Bootstrap core CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
            <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
            </style>
        </head>';
    }
    public static function Footer()
    {
        return '
        <footer class="container">
            <p class="text-center">&copy; ARS 2019</p>
        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        ';
    }
    public static function Message($msg, $type)
    {
        if ($msg != '') {
            if ($type == 1) {
                $msg = ' <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button><span>
                    ' . $msg . '
                    </span>
                    </div>';
            } else if ($type == 2) {
                $msg = '<div class="alert alert-warning alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button><span>
                    ' . $msg . '
                    </span>
                    </div>';
            } else if ($type == 3) {
                $msg = ' <div class="alert alert-danger alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <span>
                    ' . $msg . '
                    </span>
                    </div>';
            }
        } else {
            $msg = '';
        }
        return $msg;
    }
    public static function Page($judul, $msg, $type, $isi)
    {
        return '
        <!DOCTYPE html>
        <html lang="en">
            ' . self::Header($judul) . '
        <body>
            <div class="container-fluid">
                ' . self::Navbar() . '
                <br> <br> <br>
                ' . self::Message($msg, $type) . '' . $isi . '
            </div>
            <hr>
            ' . self::Footer() . '
        </body>
        </html>    
        ';
    }
    public static function Navbar()
    {
        return '
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">Layout</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fa fa-home"></i>Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#"><i class="fa fa-gears"></i>Setting</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-right">
                <li class="nav-item ">
                    <a class="nav-link float-right" href="./logout.php"><i class="fa fa-exit"></i>Logout</a>
                </li>
            </ul>
            </div>
        </nav>
        ';
    }
}
