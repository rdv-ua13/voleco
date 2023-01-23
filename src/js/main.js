document.addEventListener("DOMContentLoaded", () => {
    const app = new application();
    app.init();
});

function application() {
    //variable
    //this.myMap;
}
application.prototype.init = function () {
    this.initTabs();
    this.initNotice();
    this.initRegStepper();
    this.initValidationNumCode();
    this.initNavTabs();
    this.initPageContentTabs();
    this.initTooltips();
    this.initProgressBar();
    this.initFormProcessing();
    this.initCardFavorite();
    this.initTagbarSlider();
    this.initBasicSlider();
    this.initHandlerCurrentUser();
    this.initSelect2();
    /*this.initDropfiles();*/
    this.initTagSelected();
    this.initMaskedInput();
    this.initAddList();
    this.initReadmore();
    /*this.initReadmoreResponsive(); todo - Доделать*/
    this.initAccordion();
    this.initCheckall();
};

// Initialization tabs
application.prototype.initTabs = function () {
    if ($(".tabs").length) {
        let currentSelected = 1;
        $(".tabs__nav-item").on("click", function () {
            $(".tabs__nav-item").not(this).find(".tabs__nav-btn").removeClass("selected");
            $(this).find(".tabs__nav-btn").removeClass("notice").addClass("selected");

            currentSelected = $(this).find(".tabs__nav-btn").data("target");
            $(this).closest(".tabs").find(".tabs__panel").removeClass("active");
            $(this).closest(".tabs").find(".tabs__panel[data-id='" + currentSelected + "']").addClass("active");
        });
    }
};
// Initialization tabs
application.prototype.initNotice = function () {
    $(document).on("click", ".notice", function () {
        $(this).find(".notice-elem").removeClass("active");
    });
};
// Initialization validation num code
application.prototype.initValidationNumCode = function () {
    if($(".authreg--recovery").length) {
        let in1 = document.getElementById('recoveryFormValidationCode1'),
            ins = document.querySelectorAll('.js-forminput-recovery-num'),
            splitNumber = function (e) {
                let data = e.data || e.target.value; // Chrome doesn't get the e.data, it's always empty, fallback to value then.
                if (!data) return; // Shouldn't happen, just in case.
                if (data.length === 1) return; // Here is a normal behavior, not a paste action.

                popupNext(e.target, data);
            },
            popupNext = function (el, data) {
                el.value = data[0]; // Apply first item to first input
                data = data.substring(1); // remove the first char.
                if (el.nextElementSibling && data.length) {
                    // Do the same with the next element and next data
                    popupNext(el.nextElementSibling, data);
                }
            };

        ins.forEach(function (input) {
            /**
             * Control on keyup to catch what the user intent to do.
             * I could have check for numeric key only here, but I didn't.
             */
            input.addEventListener('keyup', function (e) {
                // Break if Shift, Tab, CMD, Option, Control.
                if (e.keyCode === 16 || e.keyCode == 9 || e.keyCode == 224 || e.keyCode == 18 || e.keyCode == 17) {
                    return;
                }

                // On Backspace or left arrow, go to the previous field.
                if ((e.keyCode === 8 || e.keyCode === 37) && this.previousElementSibling && this.previousElementSibling.tagName === "INPUT") {
                    this.previousElementSibling.select();
                } else if (e.keyCode !== 8 && this.nextElementSibling) {
                    this.nextElementSibling.select();
                }

                // If the target is populated to quickly, value length can be > 1
                if (e.target.value.length > 1) {
                    splitNumber(e);
                }
            });

            /**
             * Better control on Focus
             * - don't allow focus on other field if the first one is empty
             * - don't allow focus on field if the previous one if empty (debatable)
             * - get the focus on the first empty field
             */
            input.addEventListener('focus', function (e) {
                // If the focus element is the first one, do nothing
                if (this === in1) return;

                // If value of input 1 is empty, focus it.
                if (in1.value == '') {
                    in1.focus();
                }

                // If value of a previous input is empty, focus it.
                // To remove if you don't wanna force user respecting the fields order.
                if (this.previousElementSibling.value == '') {
                    this.previousElementSibling.focus();
                }
            });
        });

        /**
         * Handle copy/paste of a big number.
         * It catches the value pasted on the first field and spread it into the inputs.
         */
        in1.addEventListener('input', splitNumber);
    }
};
// Initialization navigation pages tabs
application.prototype.initNavTabs = function () {
    if ($(".js-main-section-tabs").length) {
        const swiperNavTabs = new Swiper(".js-main-section-tabs", {
            slidesPerView: "auto",
            spaceBetween: 0,
        });
    }
};
// Initialization page-content tabs
application.prototype.initPageContentTabs = function () {
    if ($(".js-page-content-tabs").length) {
        const swiperPageContentTabs = new Swiper(".js-page-content-tabs", {
            slidesPerView: "auto",
            spaceBetween: 32,
        });
    }
};
// Initialization tooltips
application.prototype.initTooltips = function () {
    if ($(".tooltip").length) {
        const button = $(".tooltip__btn");
        const tooltip = $(".tooltip__txt");

        const popperInstance = new Popper.createPopper(button, tooltip, {
            placement: 'top'
        });
    }
};
// Initialization cards progress bar
application.prototype.initProgressBar = function () {
    if ($(".js-progress").length) {
        $(".js-progress").each(function (i, e) {
            let curValue = $(e).find(".progress-bar-data__value").data("value");
            let curMaxValue = $(e).find(".progress-bar-data__max").data("max");
            let curIndicator = $(e).find(".progress-bar__indicator");
            let curProgressLine = $(e).find(".progress-bar__line");

            function result(curValue, curMaxValue) {
                let res = ((curValue / curMaxValue) * 100).toFixed(2);
                return res;
            }

            curIndicator.val(result(curValue, curMaxValue));
            let curProgressLineValue = curIndicator.val() * 1 + "%";
            curProgressLine.css({
                "width" : curProgressLineValue
            });
        });
    }
};

// Initialization registration stepper
application.prototype.initRegStepper = function () {
    if($(".bs-stepper").length) {
        let stepper = new Stepper($('.bs-stepper')[0]);

        $(".js-stepper-trigger").on("click", function () {
            let nextStep = $(this).data("index-next");

            switch(nextStep) {
                case 2:
                    stepper.to(2);
                    break;
                case 3:
                    stepper.to(3);
                    break;
                default:
                    stepper.to(1);
            }
        });
    }
};
// Initialization form processing
application.prototype.initFormProcessing = function () {
    if ($(".form").length) {
        function getFormData($form){
            let unindexed_array = $form.serializeArray();
            let indexed_array = {};

            $.map(unindexed_array, function(n, i){
                indexed_array[n["name"]] = n["value"];
            });

            return indexed_array;
        }

        $(document).on("submit", ".form", function () {
            let currentForm = $(this);
            getFormData(currentForm);

            $.ajax({
                type: "POST",
                url: "forms.php",
                dataType: "json",
                data: getFormData(currentForm),
                success: function (currentForm) {
                    console.log("success");
                },
                error: function () {
                    console.log("error");
                }
            });
        });
    }
};
// Initialization cards button "favorite"
application.prototype.initCardFavorite = function () {
    $(document).on("click", ".card", function (e) {
        let $buttonFav = $(this).find('.js-card-favorite');
        if ($buttonFav.is(e.target)) {
            e.stopPropagation();
            e.preventDefault();

            $buttonFav.toggleClass("selected");
            // todo: ajax проверить success or wrong, добавить класс selected
        }
    });
};
// Initialization tag-bar slider
application.prototype.initTagbarSlider = function () {
    if ($(".js-tag-bar-slider").length) {
        const currentSlider = $(".js-tag-bar-slider");

        currentSlider.each(function (i) {
            currentSlider.eq(i).addClass("js-tag-bar-slider-" + i);

            let tagbarSlider = new Swiper(".js-tag-bar-slider-" + i, {
                slidesPerView: "auto",
                spaceBetween: 8,
                direction: "horizontal",
                mousewheel: true,
            });
        });
    }
};
// Initialization basic slider
application.prototype.initBasicSlider = function () {
    if ($(".basic-slider-ecodelo").length) {
        const ecodeloSlider = new Swiper(".basic-slider-ecodelo .js-basic-slider", {
            slidesPerView: "auto",
            spaceBetween: 12,
            slidesPerGroup: 1,
            direction: "horizontal",
            navigation: {
                nextEl: ".basic-slider-ecodelo .swiper-button-next",
                prevEl: ".basic-slider-ecodelo .swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    slidesPerGroup: 2,
                    spaceBetween: 24,
                },
                992: {
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                    spaceBetween: 24,
                },
                1328: {
                    slidesPerView: 4,
                    slidesPerGroup: 4,
                    spaceBetween: 24,
                }
            }
        });
    }

    if ($(".basic-slider-petition").length) {
        const petitionSlider = new Swiper(".basic-slider-petition .js-basic-slider", {
            slidesPerView: "auto",
            spaceBetween: 12,
            slidesPerGroup: 1,
            direction: "horizontal",
            navigation: {
                nextEl: ".basic-slider-petition .swiper-button-next",
                prevEl: ".basic-slider-petition .swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    slidesPerGroup: 2,
                    spaceBetween: 24,
                },
                992: {
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                    spaceBetween: 24,
                },
                1328: {
                    slidesPerView: 4,
                    slidesPerGroup: 4,
                    spaceBetween: 24,
                }
            }
        });
    }

    if ($(".basic-slider-fundraising").length) {
        const fundraisingSlider = new Swiper(".basic-slider-fundraising .js-basic-slider", {
            slidesPerView: "auto",
            spaceBetween: 12,
            slidesPerGroup: 1,
            direction: "horizontal",
            navigation: {
                nextEl: ".basic-slider-fundraising .swiper-button-next",
                prevEl: ".basic-slider-fundraising .swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    slidesPerGroup: 2,
                    spaceBetween: 24,
                },
                992: {
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                    spaceBetween: 24,
                },
                1328: {
                    slidesPerView: 4,
                    slidesPerGroup: 4,
                    spaceBetween: 24,
                }
            }
        });
    }

    if ($(".basic-slider-media").length) {
        const basicSliderMediaSliderSettings = {
            slidesPerView: "auto",
            spaceBetween: 12,
            slidesPerGroup: 1,
            direction: "horizontal",
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    slidesPerGroup: 2,
                    spaceBetween: 24,
                },
                992: {
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                    spaceBetween: 24,
                },
                1328: {
                    slidesPerView: 4,
                    slidesPerGroup: 4,
                    spaceBetween: 24,
                }
            }
        };
        let basicSliderMediaSlider = null;

        reinitSlider();
        $(window).on("resize", reinitSlider);

        function reinitSlider() {
            if (window.matchMedia("(max-width: 767.98px)").matches) {
                basicSliderMediaSlider = null;
                basicSliderMediaSlider = new Swiper(".basic-slider-media .js-basic-slider", basicSliderMediaSliderSettings);
            }
        }
    }

    if ($(".basic-slider-interests").length) {
        const interestsSlider = new Swiper(".basic-slider-interests .js-basic-slider", {
            slidesPerView: "auto",
            spaceBetween: 12,
            slidesPerGroup: 1,
            direction: "horizontal",
            navigation: {
                nextEl: ".basic-slider-interests .swiper-button-next",
                prevEl: ".basic-slider-interests .swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    slidesPerGroup: 2,
                    spaceBetween: 24,
                },
                992: {
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                    spaceBetween: 24,
                },
                1328: {
                    slidesPerView: 4,
                    slidesPerGroup: 4,
                    spaceBetween: 24,
                }
            }
        });
    }
};
// Initialization handler for current user dropdown menu
// todo: finish this
application.prototype.initHandlerCurrentUser = function () {
    if ($(".js-current-user-menu").length) {
        $(".js-current-user-menu").on("click", function () {
            if($(this).hasClass("open")) {
                $(this).removeClass("open");
            } else {
                $(this).addClass("open");
            }
        });

        $(document).on("click", function (e) {
            if (!$(".js-current-user-menu").is(e.target) && !$(".current-user__dropdown-menu").is(e.target)) {
                $(".js-current-user-menu").removeClass("open");
            }
        });
    }
};
// Initialization select2 plagin
application.prototype.initSelect2 = function () {
    if ($(".js-select2").length) {
        $(".js-select2").select2();
    }
};
// Initialization drop files
application.prototype.initDropfiles = function () {
    const fileinput = document.getElementById("dropfile-input");
    const dropzone = document.getElementById("dropfile-area");
    const cleargallery = document.getElementById("dropfile-gallery-clear");
    const gallery = document.getElementById("dropfile-gallery-list");

    function stopPropagationAndPreventDefault(e) {
        e.stopPropagation();
        e.preventDefault();
    }

    function handleFileAndAppend(file) {
        if (!file.type.startsWith("image/")) {
            console.log("not an image");
            return;
        }

        const imgElement = document.createElement("img");
        imgElement.file = file;
        console.log(imgElement);
        if (gallery.firstChild) {
            gallery.prepend(imgElement, gallery.firstChild);
        } else {
            gallery.appendChild(imgElement);
        }

        dropzone.classList.remove("dragging");

        const fileReader = new FileReader();
        fileReader.onload = ((img) => (e) => {img.src = e.target.result;})(imgElement);
        fileReader.readAsDataURL(file);
        console.log(fileReader);
    }

    function clearGalleryHandler(e) {
        stopPropagationAndPreventDefault(e);
        while (gallery.firstChild) {
            gallery.removeChild(gallery.firstChild);
        }
    }

    function dropHandler(e) {
        stopPropagationAndPreventDefault(e);
        const file = e.dataTransfer.files[0];
        handleFileAndAppend(file);
    }

    function fileInputHandler(e) {
        const file = this.files[0];
        handleFileAndAppend(file);
    }

    function dragoverHandler(e) {
        stopPropagationAndPreventDefault(e);
        dropzone.classList.add("dragging");
    }

    function dragleaveHandler(e) {
        stopPropagationAndPreventDefault(e);
        dropzone.classList.remove("dragging");
    }

    cleargallery.addEventListener("click", clearGalleryHandler, false);
    fileinput.addEventListener("change", fileInputHandler, false);
    dropzone.addEventListener("dragenter", stopPropagationAndPreventDefault, false);
    dropzone.addEventListener("dragover", dragoverHandler, false);
    dropzone.addEventListener("dragleave", dragleaveHandler, false);
    dropzone.addEventListener("drop", dropHandler, false)
};
// Initialization tag selected
application.prototype.initTagSelected = function () {
    if ($("label.tag").length) {
        $("label.tag").on("click", function () {
            let elemInput = $(this).find("input[type='checkbox']");
            if(!elemInput.is(":checked")) {
                $(this).removeClass("selected");
            } else if(elemInput.is(":checked")) {
                $(this).addClass("selected");
            }
        });
    }
};
// Mobile number mask
application.prototype.initMaskedInput = function () {
    $(".isPhone").mask("+7-999-999-99-99", { autoclear: false });
};
// Initialization add list
application.prototype.initAddList = function () {
    if ($(".js-add-list").length) {
        $(".js-add-list .add-list__item").each(function (e) {
            $(this).find(".add-list__delete").on("click", function () {
                $(this).closest(".add-list__item").remove();
            });
        });
    }
};
// Initialization readmore plugin
application.prototype.initReadmore = function () {
    if ($(".js-spoiler").length) {
        const spoiler = $(".js-spoiler");

        spoiler.each(function (i) {
            let currentElemHeight = spoiler.eq(i).data("collapsed-height");
            spoiler.eq(i).addClass("js-spoiler-" + i);

            $(".js-spoiler-" + i).readmore({
                collapsedHeight: currentElemHeight,
                moreLink: '<a href="javascript:;" class="btn-reset btn btn--noframe btn--link btn--tdu-dashed btn--green page-content__spoiler-trigger">\n' +
                    '                                        <span class="btn__text">Показать полностью</span>\n' +
                    '                                    </a>',
                lessLink: '<a href="javascript:;" class="btn-reset btn btn--noframe btn--link btn--tdu-dashed btn--green page-content__spoiler-trigger">\n' +
                    '                                        <span class="btn__text">Скрыть</span>\n' +
                    '                                    </a>'
            });
        });
    }
};
// Initialization readmore plugin responsive
application.prototype.initReadmoreResponsive = function () {
    initReadmoreDesktopOnly();
    initReadmoreMobileOnly();
    $(window).on("resize", initReadmoreMobileOnly);
    $(window).on("resize", initReadmoreDesktopOnly);

    function initReadmoreMobileOnly() {
        if (window.matchMedia("(max-width: 767.98px)").matches) {
            $(".js-spoiler-mobile-only").addClass("js-spoiler");
        }
    }
    function initReadmoreDesktopOnly() {
        if (window.matchMedia("(min-width: 768px)").matches) {
            $(".js-spoiler-desktop-only").addClass("js-spoiler");
        }
    }
};
// Initialization accordion
application.prototype.initAccordion = function () {
    if ($(".accordion").length) {
        /*initAccordionBtnException();*/
        initAccordionResonsive();
        $(window).on("resize", initAccordionResonsive, reloadAccordionResonsive);

        /*function initAccordionBtnException() {
            $(document).on("click", function (e) {
                if ($(".js-accordion-btn-exception").is(e.target)) {

                    $(e).closest(".accordion__item").find(".accordion__collapse").hide();
                    $(e).closest(".accordion").find(".accordion__btn").removeClass("open");
                    $(e).closest(".accordion").find(".accordion__item").removeClass("active");
                }
            });

            $(".js-accordion-btn-exception").on("click", function () {
                $(this)
            });
        }*/
        function reloadAccordionResonsive() {
            setTimeout(function () {
                location.reload();
            }, 300);
        }
        function initAccordionResonsive() {
            $(".accordion__collapse").hide();

            if (window.matchMedia("(max-width: 767.98px)").matches) {
                $(".js-accordion-btn").on("click", function () {
                    if (!$(this).hasClass("open")) {
                        $(this).closest(".accordion").find(".accordion__btn").removeClass("open");
                        $(this).closest(".accordion__item").siblings(".accordion__item").removeClass("active");
                        $(this).closest(".accordion__item").siblings(".accordion__item").find(".accordion__collapse").slideUp(160);
                        $(this).addClass("open");
                        $(this).closest(".accordion__item").addClass("active");
                        $(this).closest(".accordion__item").find(".accordion__collapse").removeClass("collapsed");
                        $(this).closest(".accordion__item").find(".accordion__collapse").slideDown(160);
                    } else if ($(this).hasClass("open")) {
                        $(this).removeClass("open");
                        $(this).closest(".accordion__item").removeClass("active");
                        $(this).closest(".accordion__item").find(".accordion__collapse").slideUp(160);
                        setTimeout(function () {
                            $(this).closest(".accordion__item").find(".accordion__collapse").addClass("collapsed");
                        }, 160);
                    }
                });
            } else if (window.matchMedia("(min-width: 768px)").matches) {
                $(".js-accordion-btn-icon").on("click", function () {
                    if (!$(this).closest(".js-accordion-btn").hasClass("open")) {
                        $(this).closest(".accordion").find(".accordion__btn").removeClass("open");
                        $(this).closest(".accordion__item").siblings(".accordion__item").removeClass("active");
                        $(this).closest(".accordion__item").siblings(".accordion__item").find(".accordion__collapse").slideUp(160);
                        $(this).closest(".accordion__btn").addClass("open");
                        $(this).closest(".accordion__item").addClass("active");
                        $(this).closest(".accordion__item").find(".accordion__collapse").removeClass("collapsed");
                        $(this).closest(".accordion__item").find(".accordion__collapse").slideDown(160);
                    } else if ($(this).closest(".js-accordion-btn").hasClass("open")) {
                        $(this).closest(".accordion").find(".accordion__btn").removeClass("open");
                        $(this).closest(".accordion__item").removeClass("active");
                        $(this).closest(".accordion__item").find(".accordion__collapse").slideUp(160);
                        setTimeout(function () {
                            $(this).closest(".accordion__item").find(".accordion__collapse").addClass("collapsed");
                        }, 160);
                    }
                });
            }
        }
    }
};

// Initialization check all group
application.prototype.initCheckall = function () {
    if ($(".checkall-for").length) {
        initOnloadCheckall();
        initOnclickCheckallFor();
        initOnclickCheckallGroup();

        function initOnloadCheckall() {
            $(".checkall-for").each(function () {
                const checkallFor = $(this);
                const checkallForData = checkallFor.data("checkall-for");
                let checkallForState = false;
                let checkallGroupState = [];
                let checkallGroupCheckedState = [];

                checkallForHandling();
                compareGroupState(checkallGroupState);

                function checkallForHandling() {
                    $(".checkall-group[data-checkall-group='" + checkallForData + "']").each(function (e) {
                        let checkallGroupElem = $(this);

                        if(checkallGroupElem.is(":checked")) {
                            checkallForState = true;
                            checkallGroupState.push(true);
                        } else if(!checkallGroupElem.is(":checked")) {
                            checkallGroupState.push(false);
                        }
                    });

                    if(checkallForState === false) {
                        checkallFor.prop("checked", false);
                    } else if(checkallForState === true) {
                        checkallFor.prop("checked", true);
                    }
                }

                function compareGroupState(arr) {
                    $.each(arr, function(i) {
                        if(arr[i] === true) {
                            checkallGroupCheckedState.push("checked");
                        } else if(arr[i] === false) {
                            checkallGroupCheckedState.push("notChecked");
                        }
                    });

                    const allChecked = checkallGroupCheckedState.every(elem => elem === "checked");

                    if(allChecked) checkallFor.removeClass("custom-checkbox__input--checkline");
                }
            });
        }


        function initOnclickCheckallFor() {
            $(".checkall-for").on("click", function (e) {
                const checkallFor = $(this);
                const checkallForData = checkallFor.data("checkall-for");

                if(checkallFor.is(":checked")) {
                    checkallFor.prop("checked", true);
                    checkallFor.removeClass("custom-checkbox__input--checkline");
                    $(".checkall-group[data-checkall-group='" + checkallForData + "']").prop("checked", true);
                } else if(!checkallFor.is(":checked")) {
                    checkallFor.prop("checked", false);
                    $(".checkall-group[data-checkall-group='" + checkallForData + "']").prop("checked", false);
                }
            });
        }

        function initOnclickCheckallGroup() {
            $(".checkall-group").on("click", function (e) {
                const checkallGroup = $(this);
                const checkallGroupData = checkallGroup.data("checkall-group");

                let checkallGroupState = [];
                let checkallGroupCheckedState = [];

                checkallGroupHandling();
                compareGroupState(checkallGroupState);

                function checkallGroupHandling() {
                    $(".checkall-group[data-checkall-group='" + checkallGroupData + "']").each(function (e) {
                        let checkallGroupElem = $(this);

                        if(checkallGroupElem.is(":checked")) {
                            checkallGroupState.push(true);
                        } else if(!checkallGroupElem.is(":checked")) {
                            checkallGroupState.push(false);
                        }
                    });
                }

                function compareGroupState(arr) {
                    $.each(arr, function(i) {
                        if(arr[i] === true) {
                            checkallGroupCheckedState.push("checked");
                        } else if(arr[i] === false) {
                            checkallGroupCheckedState.push("notChecked");
                        }
                    });

                    const allChecked = checkallGroupCheckedState.every(elem => elem === "checked");
                    const allNotChecked = checkallGroupCheckedState.every(elem => elem === "notChecked");

                    if(allChecked) {
                        $(".checkall-for[data-checkall-for='" + checkallGroupData + "']").prop("checked", true);
                        $(".checkall-for[data-checkall-for='" + checkallGroupData + "']").removeClass("custom-checkbox__input--checkline");
                    } else if(allNotChecked) {
                        $(".checkall-for[data-checkall-for='" + checkallGroupData + "']").prop("checked", false);
                    } else if(!allChecked && !allNotChecked) {
                        $(".checkall-for[data-checkall-for='" + checkallGroupData + "']").prop("checked", true);

                        if(!$(".checkall-for[data-checkall-for='" + checkallGroupData + "']").hasClass("custom-checkbox__input--checkline")) {
                            $(".checkall-for[data-checkall-for='" + checkallGroupData + "']").addClass("custom-checkbox__input--checkline");
                        }
                    }
                }
            });
        }
    }
};