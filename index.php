<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="box-template" type="text/x-handlebars-template">
      <p> [{{idNode}}] Level:{{ level }} iLeft:{{ iLeft }} iRight:{{ iRight }}</p>
    </script>

    <script id="box-template2" type="text/x-handlebars-template">
      <p> [{{idNode}}] Language: {{ language }} <br> nodeName: {{ nodeName }}</p>
    </script>


    <title>Organizational Chart</title>
  </head>
  <body>

    <div id="container3">
      <h3>Search</h3>
      <form class="" action="index.html" method="post">
        <input type="text" name="" value="" placeholder="Node ID"> <br>
        <input type="text" name="" value="" placeholder="Language"> <br><br>
        <input class="button" type="button" name="" value="Search">
      </form>
    </div>

    <p>-------------------------------------------------</p>

    <div id="container4">
      <h3>Results:</h3>
    </div>

    <p>-------------------------------------------------</p>

    <div id="container">
      <h3>node_tree:</h3>
    </div>
    <div id="container2">
      <h3>node_tree_names:</h3>
    </div>

  </body>
</html>
