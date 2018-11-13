<script>

       var imageArr = ["<?php echo base_url('assets/img/mand.png'); ?>","<?php echo base_url('assets/img/mandleft.png'); ?>","<?php echo base_url('assets/img/mandright.png'); ?>"];
        var image = 1;
        $(window).scroll(function() {
            console.log("scrolled");
            windowScrollCount   = $(this).scrollTop();
            animationFrame      = (windowScrollCount / 20);

            animationFrame = Math.floor(animationFrame % imageArr.length);
            console.log(animationFrame + " : " + windowScrollCount);
            $('.walk').attr("base_url", imageArr[animationFrame]);
        });


</script>

    <FOOTER>
        <h6>Copyright 2018 TECH56. All rights reserved.</h6>
    </FOOTER>
    <script>
        // If user clicks anywhere outside of the modal, Modal will close

        var modal = document.getElementById('modal-wrapper');
        window.onclick = function(event) {
            if (event.target == modal) {
            modal.style.display = "none";
    }
}
</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>