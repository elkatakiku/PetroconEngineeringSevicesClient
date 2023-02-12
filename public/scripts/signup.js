// Local
import * as Utils from '/PetroconEngineeringServices/public/scripts/module/utils.js';

// Server
// import * as Utils from '/public/scripts/module/utils.js';

$('[data-action="prev"]').hide();

$('[name="username"]').on('blur', (e) => {
    Utils.validateInput(e.target, '#signupForm', '/user/checkUserName', 'Username is already taken');
});

$('#signupForm').on('custom:inputChange', (e, hasError) => {
    $('[name="signupSubmit"]').prop('disabled', hasError);
});

$('[name="signupSubmit"]').on('click', (e) => {
    console.log("Continue or submit");
    $('.slider .active').find('input, textarea').each((index, element) => 
    {
        console.log(element);
        if ($(element).val().length === 0) 
        {
            console.log(element);
            e.stopPropagation();
        }
    });
});

$('[data-slider]').off('click')
    .on('click', (e) => 
    {
        if ($(e.target).data('action') === 'next') 
        {   
            let inputs = $('.slider .active').find('input, textarea');
            for (let i = 0; i < inputs.length; i++) 
            {
                const element = inputs[i];
                if (!element.reportValidity()) {
                    return;
                }
            }
        }

        slide($(e.target));
    });

let prevText;
function slide(btn) {
    // console.log("Sliding wiiii");
    btn.prop('disabled', true);
    let slider = $(btn.data('slider'));
    let active = slider.find('div.active');
    let next = active.next();
    let prev = active.prev();

    let after = () => {
        active.removeClass('active');
        active.css('margin-left', '');
        btn.trigger('custom:clicked', [btn]);
    };

    if (btn.data('action') === 'next' && next.index() !== -1) 
    {
        $('[data-slider="' + btn.data('slider') +'"][data-action="prev"]').show();
        next.addClass('active');
        active.animate({
            'margin-left' : '-100%'
        }, after);

        if (next.next() !== -1) {
            btn.attr('type', 'submit');
            prevText = btn.text();
            btn.text('Submit');
        } else {
        }
    } else if (btn.data('action') === 'prev' && prev.index() !== -1) 
    {
        $('[data-slider="' + btn.data('slider') +'"][data-action="next"]')
            .text(prevText)
            .show();
        prev.addClass('active');
        prev.css('margin-left', '-100%')
            .animate({
                'margin-left' : '0'
            }, after);

        if (prev.prev() !== -1) {
            btn.hide();
        }
    } else {
        btn.trigger('custom:clicked', [btn]);
    }
}