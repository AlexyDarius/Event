<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <script>
        // Function to load CSS files asynchronously
        function loadCSS(url) {
        var link = document.createElement("link");
        link.rel = "stylesheet";
        link.href = url;
        link.media = "all";
        document.head.appendChild(link);
        }

        // Load the CSS files asynchronously
        loadCSS("/css/bootstrap.min.css");
        loadCSS("/css/Navbar-Right-Links-icons.css");
        loadCSS("/css/styles.css");
    </script>