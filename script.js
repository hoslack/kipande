$(document).ready(function()
{
		$('.onhover').mouseenter(function()
			{
				$('.lost').css(
					{
						"display":"block"
					});
			});



		$('.lost').mouseenter(function()
			{
				$('.lost').css(
					{
						"display":"block"
					});
			});





         $('.lost').mouseleave(function()
         {

   			$('.lost').css(
   			{
   				"display":"none"
   			});

         });



            $('.onhover').mouseout(function()
         {

   			$('.lost').css(
   			{
   				"display":"none"
   			});

         });



           $('.onhover').click(function()
         {

   			$('.lost').css(
   			{
   				"display":"block"
   			});

         });
  

});



function validateForm() {
    var x = document.getElementById('numberinput').value;
    if (x <=9999999 || x >99999999) {
        alert("Invalid Id number. Id number must be 8 digits!!");
        return false;
    }
}



$(document).ready(function()
{
    $('.onhover1').mouseenter(function()
      {
        $('.reports').css(
          {
            "display":"block"
          });
      });



    $('.reports').mouseenter(function()
      {
        $('.reports').css(
          {
            "display":"block"
          });
      });





         $('.reports').mouseleave(function()
         {

        $('.reports').css(
        {
          "display":"none"
        });

         });



            $('.onhover1').mouseout(function()
         {

        $('.reports').css(
        {
          "display":"none"
        });

         });



           $('.onhover1').click(function()
         {

        $('.reports').css(
        {
          "display":"block"
        });

         });
  

});


