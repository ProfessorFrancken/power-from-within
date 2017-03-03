$(document).ready(function() {
    var ticketPrice = function(isNNVMember, isFranckenMember) {
        var price = 10.0;

        if (isNNVMember) {
            price -= 2.5;
        }
        if (isFranckenMember) {
            price -= 2.5;
        }

        return price;
    };

    var setPrice = function() {

    };

    $('#nnvMemberCheckbox').change(function(e) {
        var isChecked = $(this).is(':checked');

        $('#nnvNumber').attr("disabled", ! isChecked);
    });

    $('#ibanPaymentCheckbox').change(function() {
        var isChecked = $(this).is(':checked');

        $('#iban').attr("disabled", ! isChecked);
    });

    $('#cashPaymentCheckbox').change(function() {
        var isChecked = $(this).is(':checked');

        $('#iban').attr("disabled", isChecked);
    });
});
