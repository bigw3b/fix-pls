<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      $(document).ready(function() {
        $(".back_to_top").click(function() {
          $("body").animate(
            {
              scrollTop: $(".navbar").offset().top
            },
            2000
          );
        });
      });
