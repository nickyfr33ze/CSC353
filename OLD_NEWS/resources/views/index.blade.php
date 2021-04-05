<!DOCTYPE html>
<!-- We will utilize the Tailwind CSS and maybe some things from alpine.js -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<html>
    <body>
        <center>
        <div class="text-2xl text-black font-mono" style="background-color: darkolivegreen">
            Welcome to Nick's live web page
            <br>
            <h1>
                Please click one of the following links to explore the features!
            </h1>
            <div>
                <!-- This is where the code for the buttons/links -->
                <a href="documents.blade.php">
                    <h1>Click here for
                        <button class="underline text-blue-600">Documents</button>
                    </h1>
                <a href="media.blade.php">
                    <h1>Click here for
                        <button class="underline text-blue-600">Media</button>
                    </h1>
                <a href="misc.blade.php">
                    <h1>Click here for
                        <button class="underline text-blue-600">Misc.</button>
                    </h1>
            </div>
        </div>
        </body>
</html>