/* -------------------------------------------

Name: 		ITSulu
Version:    1.1
Developer:	Nazar Miller (millerDigitalDesign)
Portfolio:  https://themeforest.net/user/millerdigitaldesign/portfolio?ref=MillerDigitalDesign

p.s. I am available for Freelance hire (UI design, web development). email: miller.themes@gmail.com

------------------------------------------- */

$(function () {

    // console.log('working');
    var acc = document.getElementsByClassName("mil-accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function () {
            this.classList.toggle("mil-active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        }
    }

    $(".mil-menu-btn").on("click", function () {
        $(this).toggleClass('mil-active');
        $('.mil-navigation').toggleClass('mil-active');
    });

    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 220) {
            $(".mil-top-panel.mil-animated").removeClass("mil-top-panel-transparent");
            $(".has-additional-panel").addClass("mil-hide-top");
        } else {
            $(".mil-top-panel.mil-animated").addClass("mil-top-panel-transparent");
            $(".has-additional-panel").removeClass("mil-hide-top");
        }
    });

    var swiper = new Swiper('.mil-banner-slideshow', {
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 1500,
        autoplay: true,
        effect: 'fade',
        parallax: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        pagination: {
            el: '.mil-pagination',
            type: 'bullets',
            clickable: true,
        },
    });

    var swiper = new Swiper('.mil-banner-slider', {
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 1500,
        autoplay: true,
        effect: 'fade',
        parallax: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        navigation: {
            prevEl: '.mil-banner-prev',
            nextEl: '.mil-banner-next',
        },
    });

    var swiper = new Swiper('.mil-works-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        speed: 800,
        navigation: {
            prevEl: '.mil-works-prev',
            nextEl: '.mil-works-next',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            }
        },
    });
    var swiper = new Swiper('.mil-blog-slider', {
        spaceBetween: 30,
        speed: 800,
        slidesPerView: 1,
        navigation: {
            prevEl: '.mil-blog-prev',
            nextEl: '.mil-blog-next',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 2,
            },
            1200: {
                slidesPerView: "auto",
            }
        },
    });
    var swiper = new Swiper('.mil-revi-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        speed: 800,
        navigation: {
            prevEl: '.mil-revi-prev',
            nextEl: '.mil-revi-next',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            }
        },
    });

    var swiper = new Swiper('.mil-revi-slider-2', {
        slidesPerView: 1,
        spaceBetween: 30,
        speed: 800,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        navigation: {
            prevEl: '.mil-revi-prev',
            nextEl: '.mil-revi-next',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
        },
    });

    var swiper = new Swiper('.mil-services-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        speed: 800,
        navigation: {
            prevEl: '.mil-services-prev',
            nextEl: '.mil-services-next',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            }
        },
    });

    var swiper = new Swiper('.mil-events-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        speed: 800,
        navigation: {
            prevEl: '.mil-events-prev',
            nextEl: '.mil-events-next',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            }
        },
    });

    var swiper = new Swiper('.mil-courses-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        speed: 800,
        navigation: {
            prevEl: '.mil-courses-prev',
            nextEl: '.mil-courses-next',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            }
        },
    });

    var swiper = new Swiper('.mil-banners-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        speed: 800,
        autoplay: {
            delay: 5000,
        },
        effect: 'fade',
        parallax: true,
        loop: true,
        pagination: {
            el: '.mil-banners-pagination',
            type: 'bullets',
            clickable: true,
        },
    });

    var swiper = new Swiper('.mil-box-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        speed: 800,
        parallax: true,
        effect: 'fade',
        navigation: {
            prevEl: '.mil-box-prev',
            nextEl: '.mil-box-next',
        },
    });

    var swiper = new Swiper('.mil-tabs-slider', {
        slidesPerView: 1,
        speed: 800,
        allowTouchMove: false,
        hashNavigation: {
            watchState: true,
        },
        effect: 'fade',
        parallax: true,
    });

    $(".mil-tab-buttons a").on("click", function () {
        $('.mil-tab-buttons a').removeClass('mil-active');
        $(this).toggleClass('mil-active');
    });

    var swiper = new Swiper('.mil-tabs-slider-2', {
        slidesPerView: 1,
        speed: 800,
        allowTouchMove: false,
        hashNavigation: {
            watchState: true,
        },
        effect: 'fade',
        parallax: true,
    });

    $(".mil-tabs-left-nav a").on("click", function () {
        $('.mil-tabs-left-nav a').removeClass('mil-active');
        $(this).toggleClass('mil-active');
    });

    const input = document.getElementById('mil-file-input');
    const label = document.getElementsByClassName("mil-custom-file-input")[0];
    
    if ( input != undefined ) {
        input.addEventListener("change", () => {
            const file = input.value;
            const [fileName] = file.match(/\w+.\w+$/);

            if (fileName.trim()) {
                label.classList.add("mil-with-file");
                label.querySelector('span').innerText = fileName;
            }
        });
    }
});




//  Globe Component Three js

var w = c.width = window.innerWidth,
		h = c.height = window.innerHeight,
		ctx = c.getContext( '2d' ),
		
		opts = {
			
			range: 180,
			baseConnections: 3,
			addedConnections: 5,
			baseSize: 5,
			minSize: 1,
			dataToConnectionSize: .4,
			sizeMultiplier: .7,
			allowedDist: 40,
			baseDist: 40,
			addedDist: 30,
			connectionAttempts: 100,
			
			dataToConnections: 1,
			baseSpeed: .04,
			addedSpeed: .05,
			baseGlowSpeed: .4,
			addedGlowSpeed: .4,
			
			rotVelX: .003,
			rotVelY: .002,
			
			repaintColor: '#000',
			connectionColor: 'hsla(200,60%,light%,alp)',
			rootColor: 'hsla(0,60%,light%,alp)',
			endColor: 'hsla(160,20%,light%,alp)',
			dataColor: 'hsla(40,80%,light%,alp)',
			
			wireframeWidth: .1,
			wireframeColor: '#88f',
			
			depth: 250,
			focalLength: 250,
			vanishPoint: {
				x: w / 2,
				y: h / 2
			}
		},
		
		squareRange = opts.range * opts.range,
		squareAllowed = opts.allowedDist * opts.allowedDist,
		mostDistant = opts.depth + opts.range,
		sinX = sinY = 0,
		cosX = cosY = 0,
		
		connections = [],
		toDevelop = [],
		data = [],
		all = [],
		tick = 0,
		totalProb = 0,
		
		animating = false,
		
		Tau = Math.PI * 2;

ctx.fillStyle = '#222';
ctx.fillRect( 0, 0, w, h );
ctx.fillStyle = '#ccc';
ctx.font = '50px Verdana';
ctx.fillText( 'Calculating Nodes', w / 2 - ctx.measureText( 'Calculating Nodes' ).width / 2, h / 2 - 15 );

window.setTimeout( init, 4 ); // to render the loading screen

function init(){
	
	connections.length = 0;
	data.length = 0;
	all.length = 0;
	toDevelop.length = 0;
	
	var connection = new Connection( 0, 0, 0, opts.baseSize );
	connection.step = Connection.rootStep;
	connections.push( connection );
	all.push( connection );
	connection.link();
	
	while( toDevelop.length > 0 ){
	
		toDevelop[ 0 ].link();
		toDevelop.shift();
	}
	
	if( !animating ){
		animating = true;
		anim();
	}
}
function Connection( x, y, z, size ){
	
	this.x = x;
	this.y = y;
	this.z = z;
	this.size = size;
	
	this.screen = {};
	
	this.links = [];
	this.probabilities = [];
	this.isEnd = false;
	
	this.glowSpeed = opts.baseGlowSpeed + opts.addedGlowSpeed * Math.random();
}
Connection.prototype.link = function(){
	
	if( this.size < opts.minSize )
		return this.isEnd = true;
	
	var links = [],
			connectionsNum = opts.baseConnections + Math.random() * opts.addedConnections |0,
			attempt = opts.connectionAttempts,
			
			alpha, beta, len,
			cosA, sinA, cosB, sinB,
			pos = {},
			passedExisting, passedBuffered;
	
	while( links.length < connectionsNum && --attempt > 0 ){
		
		alpha = Math.random() * Math.PI;
		beta = Math.random() * Tau;
		len = opts.baseDist + opts.addedDist * Math.random();
		
		cosA = Math.cos( alpha );
		sinA = Math.sin( alpha );
		cosB = Math.cos( beta );
		sinB = Math.sin( beta );
		
		pos.x = this.x + len * cosA * sinB;
		pos.y = this.y + len * sinA * sinB;
		pos.z = this.z + len *        cosB;
		
		if( pos.x*pos.x + pos.y*pos.y + pos.z*pos.z < squareRange ){
		
			passedExisting = true;
			passedBuffered = true;
			for( var i = 0; i < connections.length; ++i )
				if( squareDist( pos, connections[ i ] ) < squareAllowed )
					passedExisting = false;

			if( passedExisting )
				for( var i = 0; i < links.length; ++i )
					if( squareDist( pos, links[ i ] ) < squareAllowed )
						passedBuffered = false;

			if( passedExisting && passedBuffered )
				links.push( { x: pos.x, y: pos.y, z: pos.z } );
			
		}
		
	}
	
	if( links.length === 0 )
		this.isEnd = true;
	else {
		for( var i = 0; i < links.length; ++i ){
			
			var pos = links[ i ],
					connection = new Connection( pos.x, pos.y, pos.z, this.size * opts.sizeMultiplier );
			
			this.links[ i ] = connection;
			all.push( connection );
			connections.push( connection );
		}
		for( var i = 0; i < this.links.length; ++i )
			toDevelop.push( this.links[ i ] );
	}
}
Connection.prototype.step = function(){
	
	this.setScreen();
	this.screen.color = ( this.isEnd ? opts.endColor : opts.connectionColor ).replace( 'light', 30 + ( ( tick * this.glowSpeed ) % 30 ) ).replace( 'alp', .2 + ( 1 - this.screen.z / mostDistant ) * .8 );
	
	for( var i = 0; i < this.links.length; ++i ){
		ctx.moveTo( this.screen.x, this.screen.y );
		ctx.lineTo( this.links[ i ].screen.x, this.links[ i ].screen.y );
	}
}
Connection.rootStep = function(){
	this.setScreen();
	this.screen.color = opts.rootColor.replace( 'light', 30 + ( ( tick * this.glowSpeed ) % 30 ) ).replace( 'alp', ( 1 - this.screen.z / mostDistant ) * .8 );
	
	for( var i = 0; i < this.links.length; ++i ){
		ctx.moveTo( this.screen.x, this.screen.y );
		ctx.lineTo( this.links[ i ].screen.x, this.links[ i ].screen.y );
	}
}
Connection.prototype.draw = function(){
	ctx.fillStyle = this.screen.color;
	ctx.beginPath();
	ctx.arc( this.screen.x, this.screen.y, this.screen.scale * this.size, 0, Tau );
	ctx.fill();
}
function Data( connection ){
	
	this.glowSpeed = opts.baseGlowSpeed + opts.addedGlowSpeed * Math.random();
	this.speed = opts.baseSpeed + opts.addedSpeed * Math.random();
	
	this.screen = {};
	
	this.setConnection( connection );
}
Data.prototype.reset = function(){
	
	this.setConnection( connections[ 0 ] );
	this.ended = 2;
}
Data.prototype.step = function(){
	
	this.proportion += this.speed;
	
	if( this.proportion < 1 ){
		this.x = this.ox + this.dx * this.proportion;
		this.y = this.oy + this.dy * this.proportion;
		this.z = this.oz + this.dz * this.proportion;
		this.size = ( this.os + this.ds * this.proportion ) * opts.dataToConnectionSize;
	} else 
		this.setConnection( this.nextConnection );
	
	this.screen.lastX = this.screen.x;
	this.screen.lastY = this.screen.y;
	this.setScreen();
	this.screen.color = opts.dataColor.replace( 'light', 40 + ( ( tick * this.glowSpeed ) % 50 ) ).replace( 'alp', .2 + ( 1 - this.screen.z / mostDistant ) * .6 );
	
}
Data.prototype.draw = function(){
	
	if( this.ended )
		return --this.ended; // not sre why the thing lasts 2 frames, but it does
	
	ctx.beginPath();
	ctx.strokeStyle = this.screen.color;
	ctx.lineWidth = this.size * this.screen.scale;
	ctx.moveTo( this.screen.lastX, this.screen.lastY );
	ctx.lineTo( this.screen.x, this.screen.y );
	ctx.stroke();
}
Data.prototype.setConnection = function( connection ){
	
	if( connection.isEnd )
		this.reset();
	
	else {
		
		this.connection = connection;
		this.nextConnection = connection.links[ connection.links.length * Math.random() |0 ];
		
		this.ox = connection.x; // original coordinates
		this.oy = connection.y;
		this.oz = connection.z;
		this.os = connection.size; // base size
		
		this.nx = this.nextConnection.x; // new
		this.ny = this.nextConnection.y;
		this.nz = this.nextConnection.z;
		this.ns = this.nextConnection.size;
		
		this.dx = this.nx - this.ox; // delta
		this.dy = this.ny - this.oy;
		this.dz = this.nz - this.oz;
		this.ds = this.ns - this.os;
		
		this.proportion = 0;
	}
}
Connection.prototype.setScreen = Data.prototype.setScreen = function(){
	
	var x = this.x,
			y = this.y,
			z = this.z;
	
	// apply rotation on X axis
	var Y = y;
	y = y * cosX - z * sinX;
	z = z * cosX + Y * sinX;
	
	// rot on Y
	var Z = z;
	z = z * cosY - x * sinY;
	x = x * cosY + Z * sinY;
	
	this.screen.z = z;
	
	// translate on Z
	z += opts.depth;
	
	this.screen.scale = opts.focalLength / z;
	this.screen.x = opts.vanishPoint.x + x * this.screen.scale;
	this.screen.y = opts.vanishPoint.y + y * this.screen.scale;
	
}
function squareDist( a, b ){
	
	var x = b.x - a.x,
			y = b.y - a.y,
			z = b.z - a.z;
	
	return x*x + y*y + z*z;
}

function anim(){
	
	window.requestAnimationFrame( anim );
	
	ctx.globalCompositeOperation = 'source-over';
	ctx.fillStyle = opts.repaintColor;
	ctx.fillRect( 0, 0, w, h );
	
	++tick;
	
	var rotX = tick * opts.rotVelX,
			rotY = tick * opts.rotVelY;
	
	cosX = Math.cos( rotX );
	sinX = Math.sin( rotX );
	cosY = Math.cos( rotY );
	sinY = Math.sin( rotY );
	
	if( data.length < connections.length * opts.dataToConnections ){
		var datum = new Data( connections[ 0 ] );
		data.push( datum );
		all.push( datum );
	}
	
	ctx.globalCompositeOperation = 'lighter';
	ctx.beginPath();
	ctx.lineWidth = opts.wireframeWidth;
	ctx.strokeStyle = opts.wireframeColor;
	all.map( function( item ){ item.step(); } );
	ctx.stroke();
	ctx.globalCompositeOperation = 'source-over';
	all.sort( function( a, b ){ return b.screen.z - a.screen.z } );
	all.map( function( item ){ item.draw(); } );
	
}

window.addEventListener( 'resize', function(){
	
	opts.vanishPoint.x = ( w = c.width = window.innerWidth ) / 2;
	opts.vanishPoint.y = ( h = c.height = window.innerHeight ) / 2;
	ctx.fillRect( 0, 0, w, h );
});
window.addEventListener('click', init);


/// cursor Animation

(function () {

    var width, height, largeHeader, canvas, ctx, points, target, animateHeader = true;

    // Main
    initHeader();
    initAnimation();
    addListeners();

    function initHeader() {
        width = window.innerWidth;
        height = window.innerHeight;
        target = { x: width / 2, y: height / 2 };

        largeHeader = document.getElementById('mainheadersec');
        largeHeader.style.height = height + 'px';

        canvas = document.getElementById('demo-canvas');
        canvas.width = width;
        canvas.height = height;
        ctx = canvas.getContext('2d');

        // create points
        points = [];
        for (var x = 0; x < width; x = x + width / 20) {
            for (var y = 0; y < height; y = y + height / 20) {
                var px = x + Math.random() * width / 20;
                var py = y + Math.random() * height / 20;
                var p = { x: px, originX: px, y: py, originY: py };
                points.push(p);
            }
        }

        // for each point find the 5 closest points
        for (var i = 0; i < points.length; i++) {
            var closest = [];
            var p1 = points[i];
            for (var j = 0; j < points.length; j++) {
                var p2 = points[j]
                if (!(p1 == p2)) {
                    var placed = false;
                    for (var k = 0; k < 5; k++) {
                        if (!placed) {
                            if (closest[k] == undefined) {
                                closest[k] = p2;
                                placed = true;
                            }
                        }
                    }

                    for (var k = 0; k < 5; k++) {
                        if (!placed) {
                            if (getDistance(p1, p2) < getDistance(p1, closest[k])) {
                                closest[k] = p2;
                                placed = true;
                            }
                        }
                    }
                }
            }
            p1.closest = closest;
        }

        // assign a circle to each point
        for (var i in points) {
            var c = new Circle(points[i], 2 + Math.random() * 2, 'rgba(255,255,255,0.3)');
            points[i].circle = c;
        }
    }

    // Event handling
    function addListeners() {
        if (!('ontouchstart' in window)) {
            window.addEventListener('mousemove', mouseMove);
        }
        window.addEventListener('scroll', scrollCheck);
        window.addEventListener('resize', resize);
    }

    function mouseMove(e) {
        var posx = posy = 0;
        if (e.pageX || e.pageY) {
            posx = e.pageX;
            posy = e.pageY;
        }
        else if (e.clientX || e.clientY) {
            posx = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
            posy = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
        }
        target.x = posx;
        target.y = posy;
    }

    function scrollCheck() {
        if (document.body.scrollTop > height) animateHeader = false;
        else animateHeader = true;
    }

    function resize() {
        width = window.innerWidth;
        height = window.innerHeight;
        largeHeader.style.height = height + 'px';
        canvas.width = width;
        canvas.height = height;
    }

    // animation
    function initAnimation() {
        animate();
        for (var i in points) {
            shiftPoint(points[i]);
        }
    }

    function animate() {
        if (animateHeader) {
            ctx.clearRect(0, 0, width, height);
            for (var i in points) {
                // detect points in range
                if (Math.abs(getDistance(target, points[i])) < 4000) {
                    points[i].active = 0.3;
                    points[i].circle.active = 0.6;
                } else if (Math.abs(getDistance(target, points[i])) < 20000) {
                    points[i].active = 0.1;
                    points[i].circle.active = 0.3;
                } else if (Math.abs(getDistance(target, points[i])) < 40000) {
                    points[i].active = 0.02;
                    points[i].circle.active = 0.1;
                } else {
                    points[i].active = 0;
                    points[i].circle.active = 0;
                }

                drawLines(points[i]);
                points[i].circle.draw();
            }
        }
        requestAnimationFrame(animate);
    }

    function shiftPoint(p) {
        TweenLite.to(p, 1 + 1 * Math.random(), {
            x: p.originX - 50 + Math.random() * 100,
            y: p.originY - 50 + Math.random() * 100, ease: Circ.easeInOut,
            onComplete: function () {
                shiftPoint(p);
            }
        });
    }

    // Canvas manipulation
    function drawLines(p) {
        if (!p.active) return;
        for (var i in p.closest) {
            ctx.beginPath();
            ctx.moveTo(p.x, p.y);
            ctx.lineTo(p.closest[i].x, p.closest[i].y);
            ctx.strokeStyle = 'rgba(156,217,249,' + p.active + ')';
            ctx.stroke();
        }
    }

    function Circle(pos, rad, color) {
        var _this = this;

        // constructor
        (function () {
            _this.pos = pos || null;
            _this.radius = rad || null;
            _this.color = color || null;
        })();

        this.draw = function () {
            if (!_this.active) return;
            ctx.beginPath();
            ctx.arc(_this.pos.x, _this.pos.y, _this.radius, 0, 2 * Math.PI, false);
            ctx.fillStyle = 'rgba(156,217,249,' + _this.active + ')';
            ctx.fill();
        };
    }

    // Util
    function getDistance(p1, p2) {
        return Math.pow(p1.x - p2.x, 2) + Math.pow(p1.y - p2.y, 2);
    }

})();