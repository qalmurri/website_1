<footer>
    <address>
        == SESSION ==</br>
        ID Member : <?php echo $_SESSION['id_member'] ?></br>
        ID Section : <?php echo $_SESSION['id_section'] ?></br>
        ID Setting : <?php echo $_SESSION['id_setting'] ?></br>
        Token Login : <?php echo $_SESSION['token_login'] ?></br></br>
    </address>
</footer>

<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>

</html>