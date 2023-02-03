
    <style>
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    .modal-content {
        background-color: #fefefe;
        margin: auto;
        I padding: 20px;
        border: 1px solid #888;
        width: 60%;
        border-radius: 7px;
    }

    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        background-color: red;
        padding: 5px 10px;
        color: white;
        text-decoration: none;
        cursor: pointer;
    }
    </style>


<body>
    <h1>Conditional Modal</h1>
    <!-- Trigger/Open The Modal -->
    <button id="myBtn">Open Modal</button>
    <!-- The Modal -->
    <div id="myModal" class="modal">

        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Some text in the Modal..</p>
        </div>
    </div>

    <script>
   
   <script>
                                                        var btnobj = document.getElementById("btnedit");
                                                        var modalobj = document.getElementById("bd-example-modal-lg");
                                                        // var modalobj = document.getElementsByClassName("modal");
                                                     
                                                       
                                                        btnobj.onclick = function() {
                                                            // modalobj.classList.add('show');
                                                            // modalobj.style.display = "block";
                                                        }
    </script>
</body>