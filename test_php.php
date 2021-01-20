<!DOCTYPE HTML>
<html>
    <head>
        <title>Test of PHP Implementation</title>
    </head>
    <body>
        <div>
            <h1>This is a test of combining HTML and PHP code.</h1>
        </div>
        <main>
            <p id="html">This paragraph is included in the HTML code.</p>
            <?php echo "<p id='pheep'>This paragraph is generated with inline PHP.</p>"; ?>
        </main>
    </body>
</html>