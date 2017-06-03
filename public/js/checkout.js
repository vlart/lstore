Stripe.setPublishableKey('pk_test_1rwNOWtRkxp79Nmn4gbKBwM3');

var $form = $('#checkout-form');

$form.submit(function (event) {
    $('#charge-error').addClass('hidden');
    $form.find('.submit-button').prop('disabled', true);
    Stripe.card.createToken({
        number: $('#c-number').val(),
        cvc: $('#CVC-Field').val(),
        exp_month: $('#Exp-month').val(),
        exp_year: $('#Exp-year').val(),
        name:$('#c-name').val()
    }, stripeResponseHandler);
    return false;

});

function stripeResponseHandler(status, response) {
    if (response.error) {
        $('#charge-error').removeClass('hidden');
        $('#charge-error').text(response.error.message);
        $form.find('.submit-button').prop('disabled', false);
    } else {
        var token = response.id;
        $form.append($('<input type="hidden" name="stripeToken" />').val(token));

        // Submit the form:
        $form.get(0).submit();
    }
}





