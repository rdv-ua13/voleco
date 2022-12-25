import vars from './_vars';
import {createPopper} from "@popperjs/core";
/*import './_functions';*/

/* from main.js */
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
    this.initRegStepper();
    this.initValidationNumCode();
    this.initNavTabs();
    this.initPageContentTabs();
    this.initTooltips();
    this.initProgressBar();
    this.initFormProcessing();
    this.initCardFavorite();
    this.initTagbarSlider();
    this.initHandlerCurrentUser();
    this.initSelect2();
    /*this.initDropfiles();*/
    this.initTagSelected();
    this.initMaskedInput();
    this.initAddList();
};

// Init tabs
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
        const swiperTagbarSlider = new Swiper(".js-tag-bar-slider", {
            slidesPerView: "auto",
            spaceBetween: 8,
            direction: "horizontal",
            mousewheel: true,
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
    $(".isPhone").mask("+7 (999) 999-99-99", { autoclear: false });
};
// Mobile number mask
application.prototype.initAddList = function () {
    if ($(".js-add-list").length) {
        $(".js-add-list .add-list__item").each(function (e) {
            $(this).find(".add-list__delete").on("click", function () {
                $(this).closest(".add-list__item").remove();
            });
        });
    }
};