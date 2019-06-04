 <!-- Javascripts --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

<script type="text/javascript" src="js/script.js"></script>
<!-- Javascripts -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

<script type="text/javascript" src="js/script.js"></script>
 <script type="text/javascript">
    $(document).on('click', '.swap', function() {
    var swapDirection = $(this).attr('title');
    var postDat = {};
    switch (swapDirection) {
        case "UP":
            var swapIdFrom = $(this).parent().parent('tr').attr('id');
            var swapIdTo = $('.table tr#' + (parseInt(swapIdFrom) - 1)).attr('id');
            
            var swaptracking_linkFrom = $(this).parent().parent('tr').find('td.tracking_link').find('a').attr('href');
            var swaptracking_linkTo = $('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.tracking_link').find('a').attr('href');

			var swapImageFrom = $(this).parent().siblings('td.images').children('img').attr('src');
            var swapImageTo = $('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.images').children('img').attr('src');

            var swapImage1From = $(this).parent().siblings('td.images1').children('img').attr('src');
            var swapImage1To = $('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.images1').children('img').attr('src');

            var swapregulartextFrom = $(this).parent().siblings('td.regulartext').html();
            var swapregulartextTo = $('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.regulartext').html();

            var swapofferFrom = $(this).parent().siblings('td.offer').html();
            var swapofferTo = $('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.offer').html();

            var swapoffer1From = $(this).parent().siblings('td.offer1').html();
            var swapoffer1To = $('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.offer1').html();
   

            var swapPIdFrom = $(this).parent().parent('tr').attr('class');
            var swapPIdTo = $('.table tr#' + (parseInt(swapIdFrom) - 1)).attr('class');
            $('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.tracking_link').find('a').attr('href',swaptracking_linkFrom);
            $('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.tracking_link').find('a').html(swaptracking_linkFrom);
            $('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.offer').html(swapofferFrom);
            $('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.offer1').html(swapoffer1From);
			$('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.images').children('img').attr('src',swapImageFrom);
            $('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.images1').children('img').attr('src',swapImage1From);

            $('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.regulartext').html(swapregulartextFrom);


			$(this).parent().parent('tr').find('td.tracking_link').find('a').attr('href', swaptracking_linkTo);
            $(this).parent().parent('tr').find('td.tracking_link').find('a').html(swaptracking_linkTo);
            $(this).parent().siblings('td.offer').html(swapofferTo);
            $(this).parent().siblings('td.offer1').html(swapoffer1To);
			$(this).parent().siblings('td.images').children('img').attr('src',swapImageTo);
            $(this).parent().siblings('td.images1').children('img').attr('src',swapImage1To);
            $(this).parent().siblings('td.regulartext').html(swapregulartextTo);
            //return false;
		     for (var key in products) {
                if ("cls_" + products[key].id == swapPIdFrom) {
                    postDat['idfrom'] = swapPIdFrom;
                    
                    postDat['tracking_linkfrom'] = swaptracking_linkTo;
                    products[key].tracking_link = swaptracking_linkTo;

                    postDat['offerfrom'] = swapofferTo;
                    products[key].offer = swapofferTo;

                    postDat['offer1from'] = swapoffer1To;
                    products[key].offer1 = swapoffer1To;

					postDat['proImagefrom'] = swapImageTo;
                    products[key].images = swapImageTo;

                    postDat['proImage1from'] = swapImage1To;
                    products[key].images1 = swapImage1To;

                    postDat['regulartextfrom'] = swapregulartextTo;
                    products[key].regulartext = swapregulartextTo;
                    
                }

                if ("cls_" + products[key].id == swapPIdTo) {
                    postDat['idTo'] = swapPIdTo;

                    postDat['tracking_linkTo'] = swaptracking_linkFrom;
                    products[key].tracking_link = swaptracking_linkFrom;

                    postDat['offerTo'] = swapofferFrom;
                    products[key].offer = swapofferFrom;

                    postDat['offer1To'] = swapoffer1From;
                    products[key].offer1 = swapoffer1From;

					postDat['proImageTo'] = swapImageFrom;
                    products[key].images = swapImageFrom;

                    postDat['proImage1To'] = swapImage1From;
                    products[key].images1 = swapImage1From;

                    postDat['regulartextTo'] = swapregulartextFrom;
                    products[key].regulartext = swapregulartextFrom;
                    

                }
            } 
            break;
           
        case "DOWN":
        
            var swapIdFrom = $(this).parent().parent('tr').attr('id');
            var swapIdTo = $('.table tr#' + (parseInt(swapIdFrom) + 1)).attr('id');
            
            var swaptracking_linkFrom = $(this).parent().parent('tr').find('td.tracking_link').find('a').attr('href');
            var swaptracking_linkTo = $('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.tracking_link').find('a').attr('href');

			var swapImageFrom = $(this).parent().siblings('td.images').children('img').attr('src');
            var swapImageTo = $('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.images').children('img').attr('src');

            var swapImage1From = $(this).parent().siblings('td.images1').children('img').attr('src');
            var swapImage1To = $('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.images1').children('img').attr('src');

            var swapregulartextFrom = $(this).parent().siblings('td.regulartext').html();
            var swapregulartextTo = $('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.regulartext').html();


            var swapofferFrom = $(this).parent().siblings('td.offer').html();
            var swapofferTo = $('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.offer').html();

            var swapoffer1From = $(this).parent().siblings('td.offer1').html();
            var swapoffer1To = $('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.offer1').html();
   

            var swapPIdFrom = $(this).parent().parent('tr').attr('class');
            var swapPIdTo = $('.table tr#' + (parseInt(swapIdFrom) + 1)).attr('class');
            $('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.tracking_link').find('a').attr('href', swaptracking_linkFrom);
            $('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.tracking_link').find('a').html(swaptracking_linkFrom);
            $('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.offer').html(swapofferFrom);
            $('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.offer1').html(swapoffer1From);
			$('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.images').children('img').attr('src',swapImageFrom);
            $('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.images1').children('img').attr('src',swapImage1From);
            $('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.regulartext').html(swapregulartextFrom);


			$(this).parent().parent('tr').find('td.tracking_link').find('a').attr('href', swaptracking_linkTo);
            $(this).parent().parent('tr').find('td.tracking_link').find('a').html(swaptracking_linkTo);
            $(this).parent().siblings('td.offer').html(swapofferTo);
            $(this).parent().siblings('td.offer1').html(swapofferTo);
			$(this).parent().siblings('td.images').children('img').attr('src',swapImageTo);
            $(this).parent().siblings('td.images1').children('img').attr('src',swapImage1To);
            $(this).parent().siblings('td.regulartext').html(swapregulartextTo);
        
		     for (var key in products) {
                if ("cls_" + products[key].id == swapPIdFrom) {
                    postDat['idfrom'] = swapPIdFrom;
                    postDat['tracking_linkfrom'] = swaptracking_linkTo;
                    products[key].tracking_link = swaptracking_linkTo;

                    postDat['offerfrom'] = swapofferTo;
                    products[key].offer = swapofferTo;

                    postDat['offer1from'] = swapoffer1To;
                    products[key].offer1 = swapoffer1To;

					postDat['proImagefrom'] = swapImageTo;
                    products[key].images = swapImageTo;

                    postDat['proImage1from'] = swapImage1To;
                    products[key].images1 = swapImage1To;

                    postDat['regulartextfrom'] = swapregulartextTo;
                    products[key].regulartext = swapregulartextTo;
                    
                }

                if ("cls_" + products[key].id == swapPIdTo) {
                    postDat['idTo'] = swapPIdTo;

                    postDat['tracking_linkTo'] = swaptracking_linkFrom;
                    products[key].tracking_link = swaptracking_linkFrom;

                    postDat['offerTo'] = swapofferFrom;
                    products[key].product_name = swapofferFrom;

                    postDat['offer1To'] = swapoffer1From;
                    products[key].offer1 = swapoffer1From;

					postDat['proImageTo'] = swapImageFrom;
                    products[key].images = swapImageFrom;

                    postDat['proImage1To'] = swapImage1From;
                    products[key].images1 = swapImage1From;

                    postDat['regulartextTo'] = swapregulartextFrom;
                    products[key].regulartext = swapregulartextFrom;

                    

                }
            }
            break;
    }
    console.log(postDat);
    var baseURL = window.location.protocol + "//" + window.location.hostname ;
    $.ajax({
        url: baseURL + "/usketoss/v1/admin/update_url.php",
        type: "post",
        data: postDat,
        dataType: "json",
        success: function(jsonResponse) {
            if (jsonResponse.status == true) {
                location.reload()
                }

        },
        error: function(jsonResponse) {
            if (jsonResponse.status == true) {
              
            } else {
                console.log("Internal Server Error! Try After some time.");
            }
        }
    });
});
</script>

<script type="text/javascript">
   var baseURL = window.location.protocol + "//" + window.location.host ;
$(document).on('click','.removePic',function(){
    var productid = $(this).parent().parent('tr').attr('class');
    var Obj = $(this);
    $.ajax({
        url: baseURL + "/usketoss/v1/admin/update_url.php",
        type: "post",
        data: {'productID':productid},
        dataType: "json",
        success: function(jsonResponse) {
            if (jsonResponse.status == true) {   
                $(Obj).parent().parent('tr').find('.images').find('img').attr('src','../images/default-product-img.jpg');                 
                $(Obj).parent().find('a').remove();
            }
        },
        error: function(jsonResponse) {
            if (jsonResponse.status == true) {
               
            } else {
                console.log("Internal Server Error! Try After some time.");
            }
        }
    });
    
});

$(document).on('click', '.remove_pic',function(){
    var imageId = $(this).parents('tr').attr('class');
    var Obj = $(this);
       $.ajax({
        url: baseURL  + "/v1/admin/update_url.php",
        type: "post",
        data: {'image_id' : imageId},
        dataType: 'json',
        success: function(jsonResponse) {
            if (jsonResponse.status == true) {   
                $(Obj).parent().parent('tr').find('.images1').find('img').attr('src', + '/login/images/default-product-img.jpg');                 
                $(Obj).parent().find('a').remove();
            }
        },
        error: function(jsonResponse) {
            if (jsonResponse.status == true) {
               
            } else {
                console.log("Internal Server Error! Try After some time.");
            }
        }
    });
});

</script>

  </body>
</html>