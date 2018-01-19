$(document).ready(function(){

    //LOGIN TOGGLER
    $('#login-toggler').click(function(e) {
        $('#first-login-view').addClass('hidden');
        $('#second-login-view').removeClass('hidden');
        e.preventDefault();
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

        //Check on input if not empty
        function validator(id) {
            // niet leeg
            $(id).val().trim() !== "" ?
            // dan errspan toevoegen
            $(id).next('span').removeClass('hidden') && $(id).next().addClass('errspan') && $(id).removeClass('errcomplete') :
            // anders verwijderen en hiden
            $(id).next('span').addClass('hidden') && $(id).next('span').removeClass('errspan') && $(id).addClass('errcomplete');
        }

        //Check on input if not empty -> bij de requireds
        function nr_validator(id) {
            // niet leeg
            Number($(id).val().trim()) && Number($(id).val().trim()) > 0 ?
            // dan errspan toevoegen
            $(id).next('span').removeClass('hidden') && $(id).next().addClass('errspan') && $(id).removeClass('errcomplete') :
            // anders verwijderen en hiden
            $(id).next('span').addClass('hidden') && $(id).next('span').removeClass('errspan') && $(id).addClass('errcomplete');
        }

        //Check on input if not empty -> bij de optionals
        function optional_nr_validator(opt_id) {
            $(opt_id).val().trim() !== "" ?
            // dan errspan toevoegen
            (
                // nummer?
                Number($(opt_id).val().trim()) && Number($(opt_id).val().trim()) > 0  ?
                // ok!
                $(opt_id).next('span').removeClass('hidden') && $(opt_id).next().addClass('errspan') && $(opt_id).removeClass('errcomplete')
                // geen nummer? niet ok!
                : $(opt_id).next('span').addClass('hidden') && $(opt_id).addClass('errcomplete')
            ) :
            // anders verwijderen en verbergen
            $(opt_id).next('span').addClass('hidden') && $(opt_id).next('span').removeClass('errspan') && $(opt_id).removeClass('errcomplete');
        }

        var global_count = 0;

        //TITLE
        $('#create_auction_title').change(function(e) { validator(this); });

        //YEAR
        $('#create_year').change(function(e) { nr_validator(this); });

        //WIDTH
        $('#create_width').change(function(e) { nr_validator(this); });

        //HEIGHT
        $('#create_height').change(function(e) { nr_validator(this); });

        //DEPTH
        $('#create_depth').change(function(e) { optional_nr_validator(this) });

        //ORIGIN
        $('#create_origin').change(function(e) { validator(this); });

        //DESCRIPTION
        $('#create_description').change(function(e) { validator(this); });

        //ORIGIN
        $('#create_condition').change(function(e) { validator(this); });

        //MIN EST PRICE
        $('#minimum_estimate_price').change(function(e) { nr_validator(this); });

        //MAX EST PRICE
        $('#maximum_estimate_price').change(function(e) { nr_validator(this); });

        //BUYOUT PRICE
        $('#buyout_price').change(function(e) { optional_nr_validator(this) });

    //-------------------
    // REGISTER VALIDATION
    //-------------------

        //REGISTER EMAIL
        $('#register_email').change(function(e) { validator(this); });

        //REGISTER AUCTION TITLE
        $('#register_title').change(function(e) { validator(this); });

        //REGISTER PWD
        $('#register_pwd').change(function(e) { validator(this); });

        //REGISTER PWD CONF
        $('#register_pwd_confirmation').change(function(e) { validator(this); });

        //REGISTER ZIP
        $('#register_zip').change(function(e) { nr_validator(this); });

        //REGISTER CITY
        $('#register_city').change(function(e) { validator(this); });

        //REGISTER ADDRESS
        $('#register_address').change(function(e) { validator(this); });

        //REGISTER PHONE
        $('#register_phone').change(function(e) { validator(this); });

        //REGISTER NUMBER
        $('#register_number').change(function(e) { nr_validator(this); });

        //REGISTER ACCOUNT NUMBER
        $('#register_account_number').change(function(e) { nr_validator(this); });

        //REGISTER VAT NUMBER
        $('#register_vat_number').change(function(e) { nr_validator(this); });

        $('#artwork_image').change(function(e) { validator(this); });

        $('.show-filter').click(function(e) {
            e.preventDefault();
            $('.filter').hasClass('hidden') ?
            $('.filter').removeClass('hidden') && $(this).addClass('rotated') :
            $('.filter').addClass('hidden') && $(this).removeClass('rotated');
        });
        $('.responsive-nav').click(function(e) {
            e.preventDefault();
            $('.responsive-nav').hasClass('topnav') ?
            $('.responsive-nav').removeClass('topnav') && $(this).addClass('topnav') :
            $('.responsive-nav').addClass('topnav') && $(this).removeClass('topnav');
        });
});


