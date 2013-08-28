<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<link rel="stylesheet" href="colorbox/example3/colorbox.css" />

<!--act-on forms-->
<link rel="stylesheet" type="text/css" href="http://connect.crossroads.com/acton/form.css">
<link rel="stylesheet" type="text/css" href="http://connect.crossroads.com/acton/formNegCap.css">
<!-- ipad -->
<link rel="stylesheet" type="text/css" media="only screen and (max-device-height: 1024px) and (min-device-height: 961px) and (max-device-width: 768px) and (min-device-width: 767px)" href="css/tablet.css" />
<!-- ipad: landscape -->
<link rel="stylesheet" type="text/css" media="only screen and (orientation: landscape) and (max-device-height: 1024px) and (min-device-height: 961px) and (max-device-width: 768px) and (min-device-width: 767px)" href="css/tablet-landscape.css" />
<!-- ipad: portrait -->
<link rel="stylesheet" type="text/css" media="only screen and (orientation: portrait) and (max-device-height: 1024px) and (min-device-height: 961px) and (max-device-width: 768px) and (min-device-width: 767px)" href="css/tablet-portrait.css" />

<!-- computer + laptop -->
<link rel="stylesheet" type="text/css" media="only screen and (min-device-width: 1025px)" href="css/computer.css" />

<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 1152px) and (min-device-width: 1025px)" href="css/1025.css" />

<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 1280px) and (min-device-width: 1153px)" href="css/1153.css" />

<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 1366px) and (min-device-width: 1281px)" href="css/1281.css" />

<!-- mobile (ios + android) -->
<link rel="stylesheet" type="text/css" media="only screen and (max-device-height: 960px)" href="css/mobile.css" />

<!-- mobile (ios + android): landscape -->
<link rel="stylesheet" type="text/css" media="only screen and (orientation: landscape) and (max-device-height: 960px)" href="css/mobile-landscape.css" />
<!-- mobile (ios + android): portrait -->

<link rel="stylesheet" type="text/css" media="only screen and (orientation: portrait) and (max-device-height: 960px)" href="css/mobile-portrait.css" />

<!-- ios retina + android xhdpi -->
<link rel="stylesheet" type="text/css" media="only screen and (-webkit-device-pixel-ratio:2)" href="css/ios-retina_android-xhdpi.css" />

<!-- android hdpi -->
<!--<link rel="stylesheet" type="text/css" media="only screen and (-webkit-device-pixel-ratio:1.5)" href="css/android-hdpi.css" />-->

<!-- ios non-retina + android mdpi -->
<!--<link rel="stylesheet" type="text/css" media="only screen and (-webkit-device-pixel-ratio:1.0) and (max-device-height: 1024px)" href="css/ios-non-retina_android-mdpi.css" />-->

<!-- android ldpi -->
<!--<link rel="stylesheet" type="text/css" media="only screen and (-webkit-device-pixel-ratio:.75)" href="css/android-ldpi.css" />-->
<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--[if IE 8]>
<link href="css/iestyle8.css" rel="stylesheet" type="text/css" />
<![endif]--> 

<!-- Scrolling Events -->
<script type="text/javascript">

/***********************************************
* Cross browser Marquee II- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/

var delayb4scroll=2000 //Specify initial delay before marquee starts to scroll on page (2000=2 seconds)
var marqueespeed=2 //Specify marquee scroll speed (larger is faster 1-10)
var pauseit=1 //Pause marquee onMousever (0=no. 1=yes)?

////NO NEED TO EDIT BELOW THIS LINE////////////

var copyspeed=marqueespeed
var pausespeed=(pauseit==0)? copyspeed: 0
var actualheight=''

function scrollmarquee(){
if (parseInt(cross_marquee.style.top)>(actualheight*(-1)+8)) //if scroller hasn't reached the end of its height
cross_marquee.style.top=parseInt(cross_marquee.style.top)-copyspeed+"px" //move scroller upwards
else //else, reset to original position
cross_marquee.style.top=parseInt(marqueeheight)+8+"px"
}

function initializemarquee(){
cross_marquee=document.getElementById("vmarquee")
cross_marquee.style.top=0
marqueeheight=document.getElementById("marqueecontainer").offsetHeight
actualheight=cross_marquee.offsetHeight //height of marquee content (much of which is hidden from view)
if (window.opera || navigator.userAgent.indexOf("Netscape/7")!=-1){ //if Opera or Netscape 7x, add scrollbars to scroll and exit
cross_marquee.style.height=marqueeheight+"px"
cross_marquee.style.overflow="scroll"
return
}
setTimeout('lefttime=setInterval("scrollmarquee()",30)', delayb4scroll)
}

if (window.addEventListener)
window.addEventListener("load", initializemarquee, false)
else if (window.attachEvent)
window.attachEvent("onload", initializemarquee)
else if (document.getElementById)
window.onload=initializemarquee


</script>

<!-- Scrolling Events -->

<link rel="stylesheet" href="css/minimalist.css"/>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js' type='text/javascript'></script>
<script src="js/jquery.inview.min.js" type="text/javascript"></script>
<script src="js/jquery.scrollParallax.min.js" type="text/javascript"></script>
<script src="js/jquery.nav.min.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-min.js" type="text/javascript"></script>
<script src="js/scripts.js" type="text/javascript"></script>
<script src="galleria/galleria-1.2.8.min.js"></script>
<script src="colorbox/colorbox/jquery.colorbox-min.js" type="text/javascript"></script>
		<script>
			$(document).ready(function(){
				//Examples of how to assign the ColorBox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:425, innerHeight:344});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"1044px", height:"550px"});
				$(".iframe2").colorbox({iframe:true, width:"1014px", height:"455px",innerWidth:994, innerHeight:425, scrolling:false});
				$(".iframe3").colorbox({iframe:true, width:"500px", height:"400px", scrolling:false});
				$(".iframe4").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".iframe5").colorbox({iframe:true, width:"425px", height:"344px", scrolling:false});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});
				
				//Example of preserving a JavaScript event for inline calls.
				
			});
		</script>
<script type="text/javascript">
		$(document).ready(function() {
			$('#logo').onePageNav();
			$('#nav').onePageNav({currentClass: 'current',
  				changeHash: false,
  				scrollSpeed: 1500
				
			});
		});
		
</script>

<script type="text/javascript">
		$(document).ready(function () {
		  $('#dropdown').hide();
		  $("#resourcesNav").mouseenter(function(){
		    $("#dropdown").slideDown('fast').show(); 
		  });
		  $("#networkNav, .resourcesNavClose").mouseenter(function(){
		    $("#dropdown").slideUp('slow'); 
		  });
		  $("#dropdown").mouseleave(function(){
		    $("#dropdown").slideUp('slow'); 
		  });
		});
	</script>
<script src="js/flowplayer.min.js"></script>
<script>
  flowplayer("player", "assets/flowplayer.swf", {
      clip:  {
          autoPlay: false,
      }
  });
</script>
<script type="text/javascript" src="http://connect.crossroads.com/acton/form.js">

</script> 
<script type="text/javascript">
    function formElementSerializers() {
        function input(element) {
            switch (element.type.toLowerCase()) {
                case 'checkbox':
                case 'radio':
                    return inputSelector(element);
                default:
                    return valueSelector(element);
            }
        };

        function inputSelector(element) {
            return element.checked ? element.value : null;
        };

        function valueSelector(element) {
            return element.value;
        };

        function select(element) {
            return (element.type === 'select-one' ? selectOne : selectMany)(element);
        };

        function selectOne(element) {
            var index = element.selectedIndex;
            return index < 0 ? null : optionValue(element.options[index]);
        };

        function selectMany(element) {
            var length = element.length;
            if (!length) return null;
            var values = [];
            for (var i = 0; i < length; i++) {
                var opt = element.options[i];
                if (opt.selected) values.push(optionValue(opt));
            }
            return values;
        };

        function optionValue(opt) {
            if (document.documentElement.hasAttribute) return opt.hasAttribute('value') ? opt.value : opt.text;
            var element = document.getElementById(opt);
            if (element && element.getAttributeNode('value')) return opt.value;
            else return opt.text;
        };

        return {
            input: input,
            inputSelector: inputSelector,
            textarea: valueSelector,
            select: select,
            selectOne: selectOne,
            selectMany: selectMany,
            optionValue: optionValue,
            button: valueSelector
        };

    };

    var requiredFields = new Array();
    var requiredFieldGroups = new Array();
    addRequiredField = function (id) {
        requiredFields.push(id);
    };

    addRequiredFieldGroup = function (id, count) {
        requiredFieldGroups.push([id, count]);
    };

    missing = function (fieldName) {
        var f = document.getElementById(fieldName);
        var v = formElementSerializers()[f.tagName.toLowerCase()](f);
        if (v) {
            v = v.replace(/^\s*(.*)/, "$1");
            v = v.replace(/(.*?)\s*$/, "$1");
        }
        if (!v) {
            f.style.backgroundColor = '#FFFFCC';
            return 1;
        } else {
            f.style.backgroundColor = '';
            return 0;
        }
    };

    missingGroup = function (fieldName, count) {
        var result = 1;
        var color = '#FFFFCC';
        for (var i = 0; i < count; i++) {
            if (document.getElementById(fieldName + '-' + i).checked) {
                color = '';
                result = 0;
                break;
            }
        }
        for (var i = 0; i < count; i++) document.getElementById(fieldName + '-' + i).parentNode.style.backgroundColor = color;
        return result;
    };

    var validatedFields = new Array();
    addFieldToValidate = function (id, validationType, arg1, arg2) {
        validatedFields.push([id, validationType, arg1, arg2]);
    };

    validateField = function (id, fieldValidationValue, arg1, arg2) {
        var field = document.getElementById(id);
        var name = field.name;
        var value = formElementSerializers()[field.tagName.toLowerCase()](field);
        for (var i = 0; i < validators.length; i++) {
            var validationDisplay = validators[i][0];
            var validationValue = validators[i][1];
            var validationFunction = validators[i][2];
            if (validationValue === fieldValidationValue) {
                if (!validationFunction(value, arg1, arg2, id)) {
                    field.style.backgroundColor = '#FFFFCC';
                    alert(validationDisplay);
                    return false;
                } else {
                    field.style.backgroundColor = '';
                }
                break;
            }
        }
        for (var i = 0; i < implicitValidators.length; i++) {
            var validationDisplay = implicitValidators[i][0];
            var validationValue = implicitValidators[i][1];
            var validationFunction = implicitValidators[i][2];
            if (validationValue === fieldValidationValue) {
                if (!validationFunction(value, arg1, arg2, id)) {
                    field.style.backgroundColor = '#FFFFCC';
                    alert(validationDisplay);
                    return false;
                } else {
                    field.style.backgroundColor = '';
                }
                break;
            }
        }
        return true;
    };

    var r = '';
    formElementById = function (form, id) {
        for (var i = 0; i < form.length; ++i) if (form[i].id === id) return form;
        return null;
    };

    doSubmit = function (form) {
        try {
            if (typeof (customSubmitProcessing) === "function") customSubmitProcessing();
        } catch (err) {}
        var ao_jstzo = formElementById(form, "ao_jstzo");
        if (ao_jstzo) ao_jstzo.value = new Date().getTimezoneOffset();
        var submitButton = document.getElementById(form.id + '_ao_submit_button');
        submitButton.style.visibility = 'hidden';
        var missingCount = 0;
        for (var i = 0; i < requiredFields.length; i++) if (requiredFields[i].indexOf(form.id + '_') === 0) missingCount += missing(requiredFields[i]);
        for (var i = 0; i < requiredFieldGroups.length; i++) if (requiredFieldGroups[i][0].indexOf(form.id + '_') === 0) missingCount += missingGroup(requiredFieldGroups[i][0], requiredFieldGroups[i][1]);
        if (missingCount >

        0) {
            alert('Please fill all required fields. ');
            submitButton.style.visibility = 'visible';
            return;
        }
        for (var i = 0; i < validatedFields.length; i++) {
            var ff = validatedFields[i];
            if (ff[0].indexOf(form.id + '_') === 0 && !validateField(ff[0], ff[1], ff[2], ff[3])) {
                document.getElementById(ff[0]).focus();
                submitButton.style.visibility = 'visible';
                return;
            }
        }
        if (formElementById(form, 'ao_p').value === '1') {
            submitButton.style.visibility = 'visible';
            return;
        }
        form.submit();
    };

</script> 

   <!-- load Galleria -->
        <script src="js/galleria-1.2.9.min.js"></script>
        <link href="galleria/themes/classic/galleria.classic.css" rel="stylesheet" type="text/css" />

<!-- Scroll slide content-->    
 <script src="js/content/jquery.easing.1.3.js"></script>
 <script src="js/content/modernizr.custom.11333.js"></script>
<link rel="stylesheet" type="text/css" href="css/LateralOnScrollSliding/style.css" />
	<!--[if lt IE 9]>
				<link rel="stylesheet" type="text/css" href="css/styleIE.css" />
		<![endif]-->

<script type="text/javascript">
		$(function() {

			var $sidescroll	= (function() {
					
					// the row elements
				var $rows			= $('#ss-container > div.ss-row'),
					// we will cache the inviewport rows and the outside viewport rows
					$rowsViewport, $rowsOutViewport,
					// navigation menu links
					$links			= $('#ss-links > a'),
					// the window element
					$win			= $(window),
					// we will store the window sizes here
					winSize			= {},
					// used in the scroll setTimeout function
					anim			= false,
					// page scroll speed
					scollPageSpeed	= 2000 ,
					// page scroll easing
					scollPageEasing = 'easeInOutExpo',
					// perspective?
					hasPerspective	= false,
					
					perspective		= hasPerspective && Modernizr.csstransforms3d,
					// initialize function
					init			= function() {
						
						// get window sizes
						getWinSize();
						// initialize events
						initEvents();
						// define the inviewport selector
						defineViewport();
						// gets the elements that match the previous selector
						setViewportRows();
						// if perspective add css
						if( perspective ) {
							$rows.css({
								'-webkit-perspective'			: 600,
								'-webkit-perspective-origin'	: '50% 0%'
							});
						}
						// show the pointers for the inviewport rows
						$rowsViewport.find('a.ss-circle').addClass('ss-circle-deco');
						// set positions for each row
						placeRows();
						
					},
					// defines a selector that gathers the row elems that are initially visible.
					// the element is visible if its top is less than the window's height.
					// these elements will not be affected when scrolling the page.
					defineViewport	= function() {
					
						$.extend( $.expr[':'], {
						
							inviewport	: function ( el ) {
								if ( $(el).offset().top < winSize.height ) {
									return true;
								}
								return false;
							}
						
						});
					
					},
					// checks which rows are initially visible 
					setViewportRows	= function() {
						
						$rowsViewport 		= $rows.filter(':inviewport');
						$rowsOutViewport	= $rows.not( $rowsViewport )
						
					},
					// get window sizes
					getWinSize		= function() {
					
						winSize.width	= $win.width();
						winSize.height	= $win.height();
					
					},
					// initialize some events
					initEvents		= function() {
						
						// navigation menu links.
						// scroll to the respective section.
						$links.on( 'click.Scrolling', function( event ) {
							
							// scroll to the element that has id = menu's href
							$('html, body').stop().animate({
								scrollTop: $( $(this).attr('href') ).offset().top
							}, scollPageSpeed, scollPageEasing );
							
							return false;
						
						});
						
						$(window).on({
							// on window resize we need to redefine which rows are initially visible (this ones we will not animate).
							'resize.Scrolling' : function( event ) {
								
								// get the window sizes again
								getWinSize();
								// redefine which rows are initially visible (:inviewport)
								setViewportRows();
								// remove pointers for every row
								$rows.find('a.ss-circle').removeClass('ss-circle-deco');
								// show inviewport rows and respective pointers
								$rowsViewport.each( function() {
								
									$(this).find('div.ss-left')
										   .css({ left   : '0%' })
										   .end()
										   .find('div.ss-right')
										   .css({ right  : '0%' })
										   .end()
										   .find('a.ss-circle')
										   .addClass('ss-circle-deco');
								
								});
							
							},
							// when scrolling the page change the position of each row	
							'scroll.Scrolling' : function( event ) {
								
								// set a timeout to avoid that the 
								// placeRows function gets called on every scroll trigger
								if( anim ) return false;
								anim = true;
								setTimeout( function() {
									
									placeRows();
									anim = false;
									
								}, 10 );
							
							}
						});
					
					},
					// sets the position of the rows (left and right row elements).
					// Both of these elements will start with -50% for the left/right (not visible)
					// and this value should be 0% (final position) when the element is on the
					// center of the window.
					placeRows		= function() {
						
							// how much we scrolled so far
						var winscroll	= $win.scrollTop(),
							// the y value for the center of the screen
							winCenter	= winSize.height / 2 + winscroll;
						
						// for every row that is not inviewport
						$rowsOutViewport.each( function(i) {
							
							var $row	= $(this),
								// the left side element
								$rowL	= $row.find('div.ss-left'),
								// the right side element
								$rowR	= $row.find('div.ss-right'),
								// top value
								rowT	= $row.offset().top;
							
							// hide the row if it is under the viewport
							if( rowT > winSize.height + winscroll ) {
								
								if( perspective ) {
								
									$rowL.css({
										'-webkit-transform'	: 'translate3d(-75%, 0, 0) rotateY(-90deg) translate3d(-75%, 0, 0)',
										'opacity'			: 0
									});
									$rowR.css({
										'-webkit-transform'	: 'translate3d(75%, 0, 0) rotateY(90deg) translate3d(75%, 0, 0)',
										'opacity'			: 0
									});
								
								}
								else {
								
									$rowL.css({ left 		: '-50%' });
									$rowR.css({ right 		: '-50%' });
								
								}
								
							}
							// if not, the row should become visible (0% of left/right) as it gets closer to the center of the screen.
							else {
									
									// row's height
								var rowH	= $row.height(),
									// the value on each scrolling step will be proporcional to the distance from the center of the screen to its height
									factor 	= ( ( ( rowT + rowH / 2 ) - winCenter ) / ( winSize.height / 2 + rowH / 2 ) ),
									// value for the left / right of each side of the row.
									// 0% is the limit
									val		= Math.max( factor * 50, 0 );
									
								if( val <= 0 ) {
								
									// when 0% is reached show the pointer for that row
									if( !$row.data('pointer') ) {
									
										$row.data( 'pointer', true );
										$row.find('.ss-circle').addClass('ss-circle-deco');
									
									}
								
								}
								else {
									
									// the pointer should not be shown
									if( $row.data('pointer') ) {
										
										$row.data( 'pointer', false );
										$row.find('.ss-circle').removeClass('ss-circle-deco');
									
									}
									
								}
								
								// set calculated values
								if( perspective ) {
									
									var	t		= Math.max( factor * 75, 0 ),
										r		= Math.max( factor * 90, 0 ),
										o		= Math.min( Math.abs( factor - 1 ), 1 );
									
									$rowL.css({
										'-webkit-transform'	: 'translate3d(-' + t + '%, 0, 0) rotateY(-' + r + 'deg) translate3d(-' + t + '%, 0, 0)',
										'opacity'			: o
									});
									$rowR.css({
										'-webkit-transform'	: 'translate3d(' + t + '%, 0, 0) rotateY(' + r + 'deg) translate3d(' + t + '%, 0, 0)',
										'opacity'			: o
									});
								
								}
								else {
									
									$rowL.css({ left 	: - val + '%' });
									$rowR.css({ right 	: - val + '%' });
									
								}
								
							}	
						
						});
					
					};
				
				return { init : init };
			
			})();
			
			$sidescroll.init();
			
		});
		</script>

<!-- Scroll slide content-->  

<!-- Scroll To Top -->

<script type="text/javascript">
    $(document).ready(function(){
 
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
 
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 968 }, 600);
            return false;
        });
 
    });
</script>

<!-- Scroll To Top -->

<style type="text/css">
#galleria{height:320px}
</style>
<!-- also any other scripts that depend on the above scripts go here --><!-- Demo stuff -->
<!-- Event Gallery -->

<!-- Act-On Tracking -->
         <script type="text/javascript">
  /* <![CDATA[ */
  document.write (
    '<img src="http://connect.crossroads.com/acton/bn/3955/visitor.gif?ts='+
    new Date().getTime()+
    '&ref='+escape(document.referrer) + '">'
  );
  /* ]]> */
</script>
<!-- Act-On Tracking -->
