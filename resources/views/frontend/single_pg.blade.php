
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <!-- Font Awesome CSS -->
    <!-- <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Custom CSS for header  -->
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/lite.css')}}">

    <!-- <link rel="stylesheet" href="{{asset('Frontend/assets/css/top-searchbar.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/body.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/single_search.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/footer.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{asset('Frontend/assets/css/single_pg.css')}}">  -->

    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript'
        src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>


        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->

    <title>ToletX-Building</title>
  </head>
  <body>

        @include('frontend.header')

                   <!-- Single item Start -->

        <div class="main-wrapper">
        <div class="container">
            <div class="product-div">
                <div class="product-div-left">
                    <div class="picZoomer">
                        <img src="https://www.homestratosphere.com/wp-content/uploads/2018/02/Large-custom-geodesic-house-apr2-1.jpg" alt="">
                    </div>

                    <ul class="piclist">

                    <div id="carouselExampleControls" class="carousel slide" data-interval="false"  data-bs-interval="false">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                      <li><img src="https://www.homestratosphere.com/wp-content/uploads/2018/02/Large-custom-geodesic-house-apr2-1.jpg" alt=""></li>
                        <li><img src="https://archello.s3.eu-central-1.amazonaws.com/images/2018/01/31/1-3816.1517381163.7734.jpg" alt=""></li>
                        <li><img src="https://cloudfront-us-east-1.images.arcpublishing.com/advancelocal/7OGYYKDSJVBKBNVLQQ3W5OHOUM.jpg" alt=""></li>

                        <li><img src="https://vsemart.com/wp-content/uploads/2014/07/Forest-House-in-the-Netherlands.jpg" alt=""></li>
                        <li><img src="https://us.v-cdn.net/5021068/uploads/editor/i5/27tp0iy9u70e.jpg" alt=""></li>
                        <li><img src="https://images.unsplash.com/photo-1525113990976-399835c43838?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8aG91c2UlMjBpbiUyMHRoZSUyMGZvcmVzdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt=""></li>
                        <li><img src="https://homeworlddesign.com/wp-content/uploads/2020/01/Modern-Forest-House-3-1.jpg" alt=""></li>


                      </div>
                      <div class="carousel-item">

                        <li><img src="https://vsemart.com/wp-content/uploads/2014/07/Forest-House-in-the-Netherlands.jpg" alt=""></li>
                        <li><img src="https://us.v-cdn.net/5021068/uploads/editor/i5/27tp0iy9u70e.jpg" alt=""></li>
                        <li><img src="https://images.unsplash.com/photo-1525113990976-399835c43838?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8aG91c2UlMjBpbiUyMHRoZSUyMGZvcmVzdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt=""></li>
                        <li><img src="https://homeworlddesign.com/wp-content/uploads/2020/01/Modern-Forest-House-3-1.jpg" alt=""></li>
                        <li><img src="https://www.homestratosphere.com/wp-content/uploads/2018/02/Large-custom-geodesic-house-apr2-1.jpg" alt=""></li>
                        <li><img src="https://archello.s3.eu-central-1.amazonaws.com/images/2018/01/31/1-3816.1517381163.7734.jpg" alt=""></li>

                        <li><img src="https://cloudfront-us-east-1.images.arcpublishing.com/advancelocal/7OGYYKDSJVBKBNVLQQ3W5OHOUM.jpg" alt=""></li>

                      </div>

                    </div>
                    <a class="carousel-control-prev"  id="pr" href="#carouselExampleControls" role="button" data-slide="prev">
                      <i class="fas fa-chevron-left"></i>
                    </a>
                    <a class="carousel-control-next"  id="nxt"  href="#carouselExampleControls" role="button" data-slide="next">
                      <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only ">Next</span> -->
                      <i class="fas fa-chevron-right"></i>
                    </a>
                  </div>



                    </ul>
                    <ul>
                        <div class="modalZ">
                            <a href="#" class="btnZ"><img class="cls"src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSJt2OcLwV-5HSGU1Ux_6hsZ58BuXR1aIbBQ&usqp=CAU" alt=""> </a>
                                <div class="video-container">
                                    <span class="close">
                                        &#10006;
                                    </span>
                                   <iframe width="560" height="315" src="https://www.youtube.com/embed/u2kEjp8nDu8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>

                        </div>
                    </ul>

                </div>





    <div class="product-div-right">
        <span class="product-name">
            The best journey takes you Home.
        </span>
        <span class="product-price">
            500000000000/=
        </span>
        <div class="product-rating">
            <span>
                <i class="fas fa-star">
                </i>
            </span>
            <span>
                <i class="fas fa-star">
                </i>
            </span>       <span>
                <i class="fas fa-star">
                </i>
            </span>       <span>
                <i class="fas fa-star">
                </i>
            </span>       <span>
                <i class="fas fa-star-half-alt">
                </i>
            </span>
            <span>250 ratings</span>
        </div>


        <p class="product-description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae blanditiis asperiores Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas minima nisi quas officiis, rerum nostrum quam nihil veritatis amet culpa dolorem similique itaque eum voluptatem consequuntur provident, maxime dignissimos accusamus.
        </p>
        <div class="btn-groups">
            <button type="button" class="add-cart-btn"><i class="fas fa-shopping-cart"></i>Book for me</button>
            <button type="button" class="buy-now-btn"><i class="fas fa-phone"></i>Call</button>
            <!-- <button type="button" class="buy-now-btn"><i class="fas fa-phone-alt"></i>Call</button> -->
            <button type="button" class="email"><i class="fas fa-wallet"></i>Send Email</button>

        </div>
        <h2 class="amenities" >Amenities</h2>
        <div class="icon1">

            <div>
                <i class="fas fa-wifi">
                </i>
                <h6>Wifi</h6>
            </div>
            <div>
                <i class="fas fa-toilet"></i>
                <h6>toilet</h6>
            </div>
            <div>
                <i class="fas fa-video"></i>
                <h6>cctv</h6>
            </div>
            <div>
                <i class="fas fa-user-shield"></i>
                <h6>security</h6>
            </div>
            <div>
                <i class="fas fa-parking"></i>
                <h6>parking</h6>
            </div>
            <!-- <span>
                <i class="fas fa-procedures"></i>
            </span> -->
            <div>
                <i class="fas fa-bed"></i>
                <h6>bed</h6>
            </div>
        </div>
    </div>

            </div>
        </div>
    </div>

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $('.picZoomer').picZoomer();

            $('.piclist li').on('click',function(event){
                var $pic = $(this).find('img');
                $('.picZoomer-pic').attr('src',$pic.attr('src'));
            });
        });
    </script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>



<script>
    const btnZ = document.querySelector('.btnZ');

    const videoContainer = document.querySelector('.video-container');
const close =document.querySelector('.close')


btnZ.addEventListener('click', ()=>{
    videoContainer.classList.add('show');
})

close.addEventListener('click', ()=>{
    videoContainer.classList.remove('show');
})


</script>



<script>

;(function($){
	$.fn.picZoomer = function(options){
		var opts = $.extend({}, $.fn.picZoomer.defaults, options),
			$this = this,
			$picBD = $('<div class="picZoomer-pic-wp"></div>').css({'width':opts.picWidth+'px', 'height':opts.picHeight+'px'}).appendTo($this),
			$pic = $this.children('img').addClass('picZoomer-pic').appendTo($picBD),





			$cursor = $('<div class="picZoomer-cursor"><i class="f-is picZoomCursor-ico"></i></div>').appendTo($picBD),
			cursorSizeHalf = {w:$cursor.width()/2 ,h:$cursor.height()/2},
			$zoomWP = $('<div class="picZoomer-zoom-wp"><img src="" alt="" class="picZoomer-zoom-pic"></div>').appendTo($this),
			$zoomPic = $zoomWP.find('.picZoomer-zoom-pic'),
			picBDOffset = {x:$picBD.offset().left,y:$picBD.offset().top};


		opts.zoomWidth = opts.zoomWidth||opts.picWidth;
		opts.zoomHeight = opts.zoomHeight||opts.picHeight;
		var zoomWPSizeHalf = {w:opts.zoomWidth/2 ,h:opts.zoomHeight/2};

		//初始化zoom容器大小
		$zoomWP.css({'width':opts.zoomWidth+'px', 'height':opts.zoomHeight+'px'});
		$zoomWP.css(opts.zoomerPosition || {top: 0, left: opts.picWidth+30+'px'});
		//初始化zoom图片大小
		$zoomPic.css({'width':opts.picWidth*opts.scale+'px', 'height':opts.picHeight*opts.scale+'px'});

		//初始化事件
		$picBD.on('mouseenter',function(event){
			$cursor.show();
			$zoomWP.show();
			$zoomPic.attr('src',$pic.attr('src'))
		}).on('mouseleave',function(event){
			$cursor.hide();
			$zoomWP.hide();
		}).on('mousemove', function(event){
			var x = event.pageX-picBDOffset.x,
				y = event.pageY-picBDOffset.y;

			$cursor.css({'left':x-cursorSizeHalf.w+'px', 'top':y-cursorSizeHalf.h+'px'});
			$zoomPic.css({'left':-(x*opts.scale-zoomWPSizeHalf.w)+'px', 'top':-(y*opts.scale-zoomWPSizeHalf.h)+'px'});

		});
		return $this;

	};
	$.fn.picZoomer.defaults = {
		picWidth: 378,
		picHeight: 320,
		scale: 2.5,
		zoomerPosition: {top: '0', left: '470px'}
	,
		zoomWidth: 600,
		zoomHeight: 500
	};
})(jQuery);



</script>

        <!-- Single item End -->

        @include('frontend.footer')   <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   <script>
</body>
</html>
