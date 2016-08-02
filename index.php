<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Colors</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Colors</a>
        </div>
        <!-- We can use this when more pages may get added
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <!-- <li class="active"><a href="#">Home</a></li>
            </ul>
        </div> --> <!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
    <br/><br/><br/>
    <div class="starter-template">
        <div class="guideline">
            Click on the color name to see how many votes are posted for it.
            Click on 'Total' to see sum of all votes shown.
        </div>
        <br/>

        <table class="table">
            <thead>
                <th>Color</th>
                <th>Votes</th>
            </thead>
            <tbody class="colors_list">
            </tbody>
        </table>
    </div>

</div><!-- /.container -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
</body>
</html>
