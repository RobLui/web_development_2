$(document).ready(function(){
    //
    // $("#myInput").on("keyup", function() {
    //     var value = $(this).val().toLowerCase();
    //     $("#myList li").filter(function() {
    //         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    //     });
    // });
    console.log("loaded");

    //LOGIN TOGGLER
    $('#login-toggler').click(function(e) {
        $('#first-login-view').addClass('hidden');
        $('#second-login-view').removeClass('hidden');
        e.preventDefault();
        // console.log("clicked");
    });


    $('.checkmark').click(function(e) {
        if($(this).hasClass('blue')) {
            $(this).removeClass('blue');
            console.log('removed class')
        }
        else {
            $(this).addClass('blue');
            console.log('added class')
        }
        e.preventDefault();
    });

    //SELECT CUSTOM TOGGLER -> CREATE PAGE
    $('#mounth').each(function(){
        var $this = $(this), numberOfOptions = $(this).children('option').length;

        $this.addClass('select-hidden');
        $this.wrap('<div class="select"></div>');
        $this.after('<div class="select-styled"></div>');

        var $styledSelect = $this.next('div.select-styled');
        $styledSelect.text($this.children('option').eq(0).text());

        var $list = $('<ul />', {
            'class': 'select-options'
        }).insertAfter($styledSelect);

        for (var i = 0; i < numberOfOptions; i++) {
            $('<li />', {
                text: $this.children('option').eq(i).text(),
                rel: $this.children('option').eq(i).val()
            }).appendTo($list);
        }

        var $listItems = $list.children('li');

        $styledSelect.click(function(e) {
            e.stopPropagation();
            $('div.select-styled.active').not(this).each(function(){
                $(this).removeClass('active').next('ul.select-options').hide();
            });
            $(this).toggleClass('active').next('ul.select-options').toggle();
        });

        $listItems.click(function(e) {
            e.stopPropagation();
            $styledSelect.text($(this).text()).removeClass('active');
            $this.val($(this).attr('rel'));
            $list.hide();
            //console.log($this.val());
        });

    });

    function isInt(n) {
        return n % 1 === 0;
    }

    //-------------------
    // AUCTION VALIDATION
    //-------------------

        //TITLE
        $('#create_auction_title').change(function(e) {

            // niet leeg
            $(this).val().trim() !== "" ?
            // dan errspan toevoegen
            $(this).next('span').removeClass('hidden') && $(this).next().addClass('errspan') && $(this).removeClass('errcomplete') :
            // anders verwijderen en hiden
            $(this).next('span').addClass('hidden') && $(this).next('span').removeClass('errspan') && $(this).addClass('errcomplete');
        });

        //YEAR
        $('#create_year').change(function(e) {

            // niet leeg
            $(this).val().trim() !== "" ?
                // dan errspan toevoegen
                $(this).next('span').removeClass('hidden') && $(this).next().addClass('errspan') && $(this).removeClass('errcomplete') :
                // anders verwijderen en hiden
                $(this).next('span').addClass('hidden') && $(this).next('span').removeClass('errspan') && $(this).addClass('errcomplete');
        });

        //WIDTH
        $('#create_width').change(function(e) {

            // niet leeg
            $(this).val().trim() !== "" ?
            // dan errspan toevoegen
            $(this).next('span').removeClass('hidden') && $(this).next().addClass('errspan') && $(this).removeClass('errcomplete') :
            // anders verwijderen en hiden
            $(this).next('span').addClass('hidden') && $(this).next('span').removeClass('errspan') && $(this).addClass('errcomplete');
        });

        //HEIGHT
        $('#create_height').change(function(e) {

            // niet leeg
            $(this).val().trim() !== "" ?
            // dan errspan toevoegen
            $(this).next('span').removeClass('hidden') && $(this).next().addClass('errspan') && $(this).removeClass('errcomplete') :
            // anders verwijderen en hiden
            $(this).next('span').addClass('hidden') && $(this).next('span').removeClass('errspan') && $(this).addClass('errcomplete');
        });

        //DEPTH
        $('#create_depth').change(function(e) {

            // niet leeg
            $(this).val().trim() !== "" ?
            // dan errspan toevoegen
            $(this).next('span').removeClass('hidden') && $(this).next().addClass('errspan') && $(this).removeClass('errcomplete') :
            // anders verwijderen en hiden
            $(this).next('span').addClass('hidden') && $(this).next('span').removeClass('errspan') && $(this).addClass('errcomplete');
        });

        //ORIGIN
        $('#create_origin').change(function(e) {

            // niet leeg
            $(this).val().trim() !== "" ?
                // dan errspan toevoegen
                $(this).next('span').removeClass('hidden') && $(this).next().addClass('errspan') && $(this).removeClass('errcomplete') :
                // anders verwijderen en hiden
                $(this).next('span').addClass('hidden') && $(this).next('span').removeClass('errspan') && $(this).addClass('errcomplete');
        });

        //DESCRIPTION
        $('#create_description').change(function(e) {

            // niet leeg
            $(this).val().trim() !== "" ?
                // dan errspan toevoegen
                $(this).next('span').removeClass('hidden') && $(this).next().addClass('errspan') && $(this).removeClass('errcomplete') :
                // anders verwijderen en hiden
                $(this).next('span').addClass('hidden') && $(this).next('span').removeClass('errspan') && $(this).addClass('errcomplete');
        });

        //ORIGIN
        $('#create_condition').change(function(e) {

            // niet leeg
            $(this).val().trim() !== "" ?
                // dan errspan toevoegen
                $(this).next('span').removeClass('hidden') && $(this).next().addClass('errspan') && $(this).removeClass('errcomplete') :
                // anders verwijderen en hiden
                $(this).next('span').addClass('hidden') && $(this).next('span').removeClass('errspan') && $(this).addClass('errcomplete');
        });

        //MIN EST PRICE
        $('#minimum_estimate_price').change(function(e) {

            // niet leeg
            $(this).val().trim() !== "" ?
                // dan errspan toevoegen
                $(this).next('span').removeClass('hidden') && $(this).next().addClass('errspan') && $(this).removeClass('errcomplete') :
                // anders verwijderen en hiden
                $(this).next('span').addClass('hidden') && $(this).next('span').removeClass('errspan') && $(this).addClass('errcomplete');
        });

        //MAX EST PRICE
        $('#maximum_estimate_price').change(function(e) {

            // niet leeg
            $(this).val().trim() !== "" ?
                // dan errspan toevoegen
                $(this).next('span').removeClass('hidden') && $(this).next().addClass('errspan') && $(this).removeClass('errcomplete') :
                // anders verwijderen en hiden
                $(this).next('span').addClass('hidden') && $(this).next('span').removeClass('errspan') && $(this).addClass('errcomplete');
        });

        //BUYOUT PRICE
        $('#buyout_price').change(function(e) {

            // als leeg of geen getal
            ($(this).val().trim() !== "" && isInt($(this).val().trim()))  ?
                // dan errspan toevoegen
                $(this).next('span').removeClass('hidden') && $(this).next().addClass('errspan') :
                // anders verwijderen en hiden
                $(this).next('span').addClass('hidden') && $(this).next('span').removeClass('errspan');
        });

    //-------------------
    // REGISTER VALIDATION
    //-------------------

        //REGISTER EMAIL
        $('#register_email').change(function(e) {

            // niet leeg
            $(this).val().trim() !== "" ?
                // dan errcomplete toevoegen
                $(this).removeClass('errcomplete') && $(this).next().addClass('errcomplete') :
                // anders verwijderen
                $(this).addClass('errcomplete') && $(this).next('span').removeClass('errcomplete');
        });
        //REGISTER AUCTION TITLE
        $('#register_title').change(function(e) {

            // niet leeg
            $(this).val().trim() !== "" ?
                // dan errcomplete toevoegen
                $(this).removeClass('errcomplete') && $(this).next().addClass('errcomplete') :
                // anders verwijderen
                $(this).addClass('errcomplete') && $(this).next('span').removeClass('errcomplete');
        });

        //REGISTER PWD CONF
        $('#register_pwd_confirmation').change(function(e) {

            // niet leeg
            $(this).val().trim() !== "" ?
                // dan errcomplete toevoegen
                $(this).removeClass('errcomplete') && $(this).next().addClass('errcomplete') :
                // anders verwijderen
                $(this).addClass('errcomplete') && $(this).next('span').removeClass('errcomplete');
        });


        //REGISTER ZIP
        $('#register_zip').change(function(e) {

            // niet leeg
            $(this).val().trim() !== "" ?
                // dan errcomplete toevoegen
                $(this).removeClass('errcomplete') && $(this).next().addClass('errcomplete') :
                // anders verwijderen
                $(this).addClass('errcomplete') && $(this).next('span').removeClass('errcomplete');
        });

        //REGISTER CITY
        $('#register_city').change(function(e) {

            // niet leeg
            $(this).val().trim() !== "" ?
                // dan errcomplete toevoegen
                $(this).removeClass('errcomplete') && $(this).next().addClass('errcomplete') :
                // anders verwijderen
                $(this).addClass('errcomplete') && $(this).next('span').removeClass('errcomplete');
        });

        //REGISTER ADDRESS
        $('#register_address').change(function(e) {

            // niet leeg
            $(this).val().trim() !== "" ?
                // dan errcomplete toevoegen
                $(this).removeClass('errcomplete') && $(this).next().addClass('errcomplete') :
                // anders verwijderen
                $(this).addClass('errcomplete') && $(this).next('span').removeClass('errcomplete');
        });

        //REGISTER PHONE
        $('#register_phone').change(function(e) {

            // niet leeg
            $(this).val().trim() !== "" ?
                // dan errcomplete toevoegen
                $(this).removeClass('errcomplete') && $(this).next().addClass('errcomplete') :
                // anders verwijderen
                $(this).addClass('errcomplete') && $(this).next('span').removeClass('errcomplete');
        });

        //REGISTER NUMBER
        $('#register_number').change(function(e) {

            // niet leeg
            $(this).val().trim() !== "" ?
                // dan errcomplete toevoegen
                $(this).removeClass('errcomplete') && $(this).next().addClass('errcomplete') :
                // anders verwijderen
                $(this).addClass('errcomplete') && $(this).next('span').removeClass('errcomplete');
        });

        //REGISTER ACCOUNT NUMBER
        $('#register_account_number').change(function(e) {

            // niet leeg
            $(this).val().trim() !== "" ?
                // dan errcomplete toevoegen
                $(this).removeClass('errcomplete') && $(this).next().addClass('errcomplete') :
                // anders verwijderen
                $(this).addClass('errcomplete') && $(this).next('span').removeClass('errcomplete');
        });


        //REGISTER ACCOUNT NUMBER
        $('#register_vat_number').change(function(e) {

            // niet leeg
            $(this).val().trim() !== "" ?
                // dan errcomplete toevoegen
                $(this).removeClass('errcomplete') && $(this).next().addClass('errcomplete') :
                // anders verwijderen
                $(this).addClass('errcomplete') && $(this).next('span').removeClass('errcomplete');
        });

});



