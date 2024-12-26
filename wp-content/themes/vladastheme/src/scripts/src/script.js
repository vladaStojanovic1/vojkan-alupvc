/* eslint-disable no-console */

(function ($) {
    'use strict';
    /**
     * Global Variables
     */
    const isMobile = {
        Android: function () {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function () {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function () {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function () {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };
    /**
     * Returns a function, that, as long as it continues to be invoked, will not
     * be triggered. The function will be called after it stops being called for
     * N milliseconds. If `immediate` is passed, trigger the function on the
     * leading edge, instead of the trailing.
     * @param {fn} func - function to debounce
     * @param {number} wait - time to wait
     * @param {bool} immediate
     * @returns {Function}
     */
    const debounce = function (func, wait, immediate) {
        let timeout;
        let waitTime = wait || 100;
        return function () {
            let context = this, args = arguments;
            clearTimeout(timeout);
            timeout = setTimeout(function () {
                timeout = null;
                if (!immediate) {
                    func.apply(context, args);
                }
            }, waitTime);
            if (immediate && !timeout) {
                func.apply(context, args);
            }
        };
    };
    /**
     * Collection of useful site functions
     * @type {{init: init, smoothScroll: smoothScroll}}
     */
    const siteFunctions  = {
        init: function () {
            siteFunctions.smoothScroll();
        },
        /**
         * Smooth Scroll function for anchor clicks
         */
        smoothScroll: function () {
            $('a[href*="#"]').click(function () {
                let target = $(this.hash);
                if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html, body').stop().animate({
                            scrollTop: target.offset().top - 75
                        }, 2000);
                        return false;
                    }
                }
            });
        }
    };

    const siteHeader = {
        init: function () {
            this.handleScroll();
        },

        /**
         * Handle on scroll header functionality
         */
        scrollChange: function () {
            let $body = $('body');
            $(document).scrollTop() > 0 ? $body.addClass('scroll') : $body.removeClass('scroll');
        },

        /**
         * Scroll listener
         */
        handleScroll: function () {
            const self = this;
            $(window).on('scroll', function () {
                self.scrollChange();
            });
        }
    };

    $(document).ready(function () {
        siteFunctions.init();
        siteMenu.init();
        siteHeader.init();
    });


    const siteMenu = {
        prevent: false,
        init: function () {
            /**
             * Toggle menu with clicking on hamburger menu and overlay
             */
            $('#menu-button, .m-overlay').click(function (e) {
                e.preventDefault();
                siteMenu.toggle();
            });
        },
        toggle: function () {
            if (!siteMenu.prevent) {
                $('body').toggleClass('m-open');
                siteMenu.prevent = !siteMenu.prevent;

                setTimeout(function () {
                    siteMenu.prevent = !siteMenu.prevent;
                }, 400);
            }
        }
    };

    $(document).ready(function () {
        siteFunctions.init();
        siteMenu.init();
        siteHeader.init();

        // $(window).scroll(debounce(function () {
        //     siteHeader.scrollChange();
        // }));


        // Responsive menu
        $('.m-nav__hamburger').click(() => $('body').toggleClass('-mobile'));
        $(window).resize(() => $('body').removeClass('-mobile'));
        // $('body').on('scroll', function() {
        //     $('body').removeClass('-mobile');
        // });

        $(window).on('scroll', function() {
            $('body').removeClass('-mobile');
        });




        // GSAP Counter animation
        if (document.body.classList.contains('home') || document.body.classList.contains('page-template-template-o-nama'))  {
            gsap.registerPlugin(ScrollTrigger);

            let mm = gsap.matchMedia();

            // mm.add('(min-width:900px)', () => {
                gsap.from(".counterOne", {
                    textContent: "0",
                    duration: 4,
                    modifiers: {
                        textContent: value => formatNumber(value, 0) + "+"
                    },
                    // snap: { textContent: 1 },
                    scrollTrigger: {
                        trigger: ".m-quality__counter",
                        start: "top bottom",
                    }
                });
            // });

            function formatNumber(value, decimals) {
                let s = (value).toLocaleString('en-US').split(".");
                return decimals ? s[0] + "." + ((s[1] || "") + "00000000").substr(0, decimals) : s[0];
            }
        }

        Fancybox.bind("[data-fancybox]", {
            Images: {
                zoom: false,
            },
            closeButton: true,
            Carousel: {
                infinite: false,
                transition: 'slide'
            },

        });
    });

    $(window).on('load', function () {

    });
}(jQuery));

document.addEventListener("DOMContentLoaded", function() {
    const proizvodiLink = document.querySelector("a[href*='/proizvodi/']");

    if (proizvodiLink) {
        proizvodiLink.addEventListener("click", function(event) {
            event.preventDefault();
        });
    }

    const swiper = new Swiper('.comments', {
        slidesPerView: 1,
        centeredSlides: false,
        loop: true,

        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
    });

    const partner = new Swiper('.partners', {
        slidesPerView: 2,
        centeredSlides: false,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            768: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 4,
            },
        }
    });

    const flexiblePost = new Swiper(".flexible-swiper", {
        grabCursor: true,
        effect: "creative",
        creativeEffect: {
            prev: {
                shadow: true,
                origin: "left center",
                translate: ["-5%", 0, -200],
                rotate: [0, 100, 0],
            },
            next: {
                origin: "right center",
                translate: ["5%", 0, -200],
                rotate: [0, -100, 0],
            },
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        loop: true,
        // autoplay: {
        //     delay: 3000,
        //     disableOnInteraction: false,
        // },
        speed: 500,
    });
});


document.addEventListener("DOMContentLoaded", function () {
    gsap.registerPlugin(TextPlugin);

    const titleElement = document.querySelector("#typing-title");
    const subtextElement = document.querySelector("#typing-subtext");
    const buttonElement = document.querySelector(".m-header__content .a-button");

    if (titleElement && subtextElement && buttonElement) {
        const titleText = titleElement.dataset.title;
        const timeline = gsap.timeline();

        timeline
            .fromTo(
                "#typing-title",
                { opacity: 0 },
                { opacity: 1, duration: 1 }
            )
            .to("#typing-title", {
                text: titleText,
                duration: 2.5,
                ease: "none"
            })
            .fromTo(
                "#typing-subtext",
                { opacity: 0, scale: 0.6 },
                {
                    opacity: 1,
                    scale: 1,
                    duration: 1,
                    ease: "power1.inOut"
                },
                "+=0.5"
            )
            // Dugme fade-in
            .fromTo(
                ".opacityAnim",
                { opacity: 0 },
                { opacity: 1, duration: 1, ease: "power1.inOut" },
                "+=0.5"
            )
            .fromTo(
                ".anim-left",
                {x:-1000},
                {
                    opacity:1,
                    duration: 2,
                    x: 0,
                    ease: "power2.out",
                },
                "+=0.5"
            );
    }


    // Header animacija
    gsap.fromTo(".m-header",
        { backgroundPosition: "100% 100%" },
        { backgroundPosition: "0% 20%", duration: 4, ease: "power2.inOut" });


    // Animacija BLUR
    gsap.registerPlugin(ScrollTrigger);
    const elements = document.querySelectorAll(".pf-left-text p:first-of-type, .-small");

    elements.forEach(element => {
        gsap.from(element, {
            opacity: 0,
            filter: "blur(10px)",
            duration: 2,
            ease: "power2.out",
            scrollTrigger: {
                trigger: element,
                start: "top 80%",
                toggleActions: "play none none none",
                once: true
            }
        });
    });

    // Animacija Bounce
    if (document.querySelector(".anim-fromTop")) {
        gsap.fromTo(
            ".anim-fromTop",
            { opacity: 0, y: -100 },
            { opacity: 1, y: 0, duration: 1, delay: 0.7, ease: "bounce.out" }
        );
    }

    gsap.to('.anim-left', {
        duration: 2, // Trajanje animacije (u sekundama)
        x: 300, // Pomeranje elementa na desno
        ease: "power2.out", // Efekat animacije
    });


    // Google Maps
    let iframes = document.querySelectorAll('iframe');
    let spinners = document.querySelectorAll('#spinner');

    iframes.forEach((iframe, index) => {
        iframe.onload = function() {
            if (spinners[index]) {
                spinners[index].style.display = 'none';
            }
        };
    });


    // Premestanje CF7 poruka
    const forms = document.querySelectorAll('.wpcf7-form');
    forms.forEach((form) => {
        const responseOutput = form.querySelector('.wpcf7-response-output');
        const submitButton = form.querySelector('.wpcf7-submit');

        if (responseOutput && submitButton) {
            // Premesti .wpcf7-response-output iznad dugmeta za slanje
            submitButton.parentNode.insertBefore(responseOutput, submitButton);
        }
    });

});


