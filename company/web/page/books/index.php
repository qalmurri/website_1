<section>
    <div class="tab">
        <details>
            <a class="tablinks" onclick="openCity(event, 'specification')" id="defaultOpen">specification</a>
            <a class="tablinks" onclick="openCity(event, 'secretariat')">secretariat</a>
            <a class="tablinks" onclick="openCity(event, 'layouter')">layouter</a>
            <a class="tablinks" onclick="openCity(event, 'designer')">designer</a>
            <a class="tablinks" onclick="openCity(event, 'production')">production</a>
        </details>
    </div>

    <div id="specification" class="tabcontent">
        <div class="show_detail">
            <h3>specification</h3>
            specification
        </div>
    </div>

    <div id="secretariat" class="tabcontent">
        <div class="show_detail">
            <h3>secretariat</h3>
            Where can I get some?
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
        </div>
    </div>

    <div id="layouter" class="tabcontent">
        <div class="show_detail">
            <h3>layouter</h3>
            form untuk data
        </div>
    </div>

    <div id="designer" class="tabcontent">
        <div class="show_detail">
            <h3>designer</h3>
            form untuk data
        </div>
    </div>

    <div id="production" class="tabcontent">
        <div class="show_detail">
            <h3>production</h3>
            form untuk data
        </div>
    </div>
</section>

<script>
    function openCity(evt, books) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(books).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>