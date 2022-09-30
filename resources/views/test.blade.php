<input type="text" id="my_field" name="Name" placeholder="Enter Your Name"/>
    <br>
    <button onclick="disable()">Disable</button>
    <button onclick="enable()">enable</button>
    <script>
    function disable(){
        document.getElementById("my_field").disabled = "true";
    }
    function enable(){
        document.getElementById("my_field").disabled = "";
    }
    </script>

            