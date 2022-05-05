  $(document).ready(function(){
    $("#filtrar").on("change", function() {
      var value = $(this).val();
    //   console.log(value);
      $(".card").filter(function() {
        $(this).toggle($(this).text().indexOf(value) > -1)
      });
    });
  });