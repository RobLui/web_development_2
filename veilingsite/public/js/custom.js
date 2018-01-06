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
});


