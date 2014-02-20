 $(document).ready(function()
 {
    showPrice();

    $('#package_options').change(function()
    {
        showPrice();
    });

    function showPrice()
    {
        var league = $("#league").val();
        var league2 = $("#league2").val();
        var division = $("#division").val();
        var division2 = $("#division2").val();
        var lp_gain = $("#lp_gain").val();
        var total_amount = 3000 + parseInt(lp_gain);
        $('#total_cost').html('Price for ' + league + ' ' + division + ' ' + league2 + ' ' + division2 + '  ' + lp_gain + ' is $' + total_amount );
    }

 });

