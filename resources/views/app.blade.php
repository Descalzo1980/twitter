<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<style>
body {
  padding-top: 60px;
}
</style>
</head>
<body>
   <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">MyTwitter</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://twitter.app:8000/articles">Home</a></li>
             <li><a href="http://twitter.app:8000">Contact</a></li>
            <li><a href="http://twitter.app:8000/articles/create">Create</a></li>
            <li><a href="http://twitter.app:8000/uploadcat">AddCat</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>

    @yield('footer')

</body>
</html>