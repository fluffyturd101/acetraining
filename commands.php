<!DOCTYPE html>
<html lang="en">
  <head>

    <!--  Meta  -->
    <meta charset="UTF-8" />
    <title>My New Pen!</title>

    <!--  Styles  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="styles/commands.css">
  </head>

  <body>
    <header id="navbar">
      <div id="navbar-header">
        <h1><span>Welcome to the Wilton RSC Training Reference</span></h1>
        <p><span>FCOF Voice Equipment & Power Equipment Certification Reference</span></p>
      </div>
      <nav id="navbar-links">
        <a class="navbar-link" href="file:///C:/Users/DJ/workspace/acetraining/index.html">
          <p>Home</p>
        </a>
        <a class="navbar-link" href="file:///C:/Users/DJ/workspace/acetraining/commands.html">
          <p>Commands</p>
        </a>
        <a class="navbar-link" href="#">
          <p>Link</p>
        </a>
      </nav>
    </header>
    <main id="container">
      <div id="left-column-group" class="group-column">
        <div class="command-card">
          <p class="card-header">Location Commands</p>
          <ul class="card-list">
            <li>Location</li>
            <li>Get Bay</li>
            <li>Say Again</li>
          </ul>
        </div>
        <div class="command-card">
          <p class="card-header">Container Interaction</p>
          <ul class="card-list">
            <li>New Container</li>
            <li>Close Container</li>
            <li># Loose Piece</li>
            <li>Close Loose Pieces</li>
            <li>Transfer</li>
            <li>Countdown</li>
          </ul>
        </div>
        <div class="command-card">
          <p class="card-header">Utility & Troubleshooting</p>
          <ul class="card-list">
            <li>How Much More</li>
            <li>Performance</li>
            <li>Unit Measure</li>
            <li>Description</li>
            <li>Repeat Last Pick</li>
            <li>Talkman Wakeup</li>
            <li>Print Labels</li>
            <li>Store Number</li>
            <li>Route Number</li>
          </ul>
        </div>
      </div>
      <div id="right-group-column" class="group-column">
        <div class="command-card">
          <p class="card-header">Down Time & Breaks</p>
          <ul class="card-list">
            <li>Take A Break</li>
            <p> <i>Break Types:</i></p>
            <ol>
              <li>Lunch</li>
              <li>Meeting</li>
              <li>Housekeeping</li>
              <li>Move to different Zone</li>
              <li>Misc.</li>
              <li>Print Labels</li>
            </ol>
            <li>Sign Off</li>
          </ul>
        </div>
        <div class="command-card">
          <p class="card-header">Exceptions</p>
          <ul class="card-list">
            <li>Bin Empty</li>
            <li>Problem Bin</li>
            <li>**Checkdigit</li>
          </ul>
        </div>
        <div class="command-card">
          <p class="card-header">Advanced Commands</p>
          <ul class="card-list">
            <li>Skip Slot</li>
            <li>Skip Aisle</li>
            <li>Choose Aisle</li>
            <li>Repick Skips</li>
            <li>Reverse Picks</li>
            <li>Reverse Order</li>
            <li>Request Route</li>
          </ul>
        </div>
      </div>
    </main>
    <footer id="footer">
      <p>Created & Maintained by DJ Canty</p>
    </footer>

    <!-- Scripts -->
    <script src="scripts/index.js"></script>
  </body>
</html>