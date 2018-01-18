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

    //-------------------
    // AUCTION VALIDATION
    //-------------------

    // //Check for numbers
    // function isInt(n) {
    //     return n % 1 === 0;
    // }

    //Check on input if not empty
    function validator(id) {
        // niet leeg
        $(id).val().trim() !== "" ?
        // dan errspan toevoegen
        $(id).next('span').removeClass('hidden') && $(id).next().addClass('errspan') && $(id).removeClass('errcomplete') :
        // anders verwijderen en hiden
        $(id).next('span').addClass('hidden') && $(id).next('span').removeClass('errspan') && $(id).addClass('errcomplete');
    }

    //Check on input if not empty
    function nr_validator(id) {
        // niet leeg
        Number($(id).val().trim()) ?
        // dan errspan toevoegen
        $(id).next('span').removeClass('hidden') && $(id).next().addClass('errspan') && $(id).removeClass('errcomplete') :
        // anders verwijderen en hiden
        $(id).next('span').addClass('hidden') && $(id).next('span').removeClass('errspan') && $(id).addClass('errcomplete');
    }

        //TITLE
        $('#create_auction_title').change(function(e) {
            validator(this);
        });

        //YEAR
        $('#create_year').change(function(e) {
            nr_validator(this);
        });

        //WIDTH
        $('#create_width').change(function(e) {
            nr_validator(this);
        });

        //HEIGHT
        $('#create_height').change(function(e) {
            nr_validator(this);
        });

        //DEPTH
        $('#create_depth').change(function(e) {
            $(this).val().trim() !== "" ?
            // dan errspan toevoegen
                (
                    //nummer?
                    Number($(this).val().trim())  ?
                    //ok!
                    $(this).next('span').removeClass('hidden') && $(this).next().addClass('errspan') && $(this).removeClass('errcomplete')
                    //geen nummer? niet ok!
                    : $(this).next('span').addClass('hidden') && $(this).addClass('errcomplete')
                )
                :
            // anders verwijderen en hiden
            $(this).next('span').addClass('hidden') && $(this).next('span').removeClass('errspan') && $(this).removeClass('errcomplete');
        });

        //ORIGIN
        $('#create_origin').change(function(e) {
            validator(this);
        });

        //DESCRIPTION
        $('#create_description').change(function(e) {
            validator(this);
        });

        //ORIGIN
        $('#create_condition').change(function(e) {
            validator(this);
        });

        //MIN EST PRICE
        $('#minimum_estimate_price').change(function(e) {
            nr_validator(this);
        });

        //MAX EST PRICE
        $('#maximum_estimate_price').change(function(e) {
            nr_validator(this);
        });

        //BUYOUT PRICE
        $('#buyout_price').change(function(e) {
            $(this).val().trim() !== "" ?
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



