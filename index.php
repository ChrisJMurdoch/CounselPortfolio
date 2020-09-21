<!DOCTYPE html>

<?php
    session_start();
?>

<html lang="en">

<head>
    <!-- Metadata -->
    <title>Attuned Counselling</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Claire, Murdoch, Attuned, Counselling">
    <meta name="description" content="Attuned Counselling">
    <meta name="author" content="Chris Murdoch">

    <!-- Styles and scripts -->
    <link rel="stylesheet" href="style.css">
    <script src="script.js" type="text/javascript"></script>
</head>

<body>

    <!-- Navigation -->
    <nav>
        <a href="javascript:switchPage('HOME');">HOME</a>
        <a href="javascript:switchPage('SESSIONS');">SESSIONS</a>
        <a href="javascript:switchPage('BOOKINGS');">BOOKINGS</a>
    </nav>

    <!-- Header/Hero -->
    <header class="home">
        <div class="titlebox">
            Attuned
            <hr>
            Counselling
        </div>
    </header>

    <!-- Main/Content -->
    <main class="home">

        <!-- Home/Landing page -->
        <div class="homeInfo">
            <div class="card">
                <h1>One</h1>
                <p>one two three</p>
            </div>
            <div class="card">
                <h1>Two</h1>
                <p>one two three</p>
            </div>
            <div class="card">
                <h1>Three</h1>
                <p>one two three</p>
            </div>
        </div>

        <!-- Session information -->
        <div class="sessionsInfo">
            <div class="card">
                <h1>Four</h1>
                <p>four five</p>
            </div>
            <div class="card">
                <h1>Five</h1>
                <p>four five</p>
            </div>
        </div>
        
        <!-- Bookings page -->
        <div class="bookingsInfo">
            <div class="card">
                <h1>Six</h1>
                <p>six</p>
            </div>
        </div>
        
    </main>
</body>

</html>
