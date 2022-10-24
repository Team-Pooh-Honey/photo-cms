<!DOCTYPE html>

<?php //Header and navigation
    include 'header.php';
    include 'nav.php';
?>
    
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
        crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.1/ace.js"></script>

    <main>
        <form action="/action_page.php" method="get">
        <input type="text" id="name" name="name" placeholder="IMAGE NAME"></input>
        <input type="text" id="author" name="author" placeholder="AUTHOR"></input>
        <input type="date" id="date" name="date" placeholder="DATE"></input>
        <div id="editor"></div>
        <button id="submit">SUBMIT</input>

        <script src="/ace-builds/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
        <script>
            var editor = ace.edit("editor");
            editor.session.setMode("ace/mode/html");
        </script>

        <label for="post">Post:</label>
        <textarea id="post" name="post" rows="6" cols="50">
        Image Description
        </textarea>
        <input type="submit" value="SUBMIT"> // May need rework
        <action="submit-post.php" method="POST">
        </form>
    </main>


</html>