
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
		var price = $("#price").val();
		var total_amount = 0 + parseint(price);
        $('#total_cost').html('It costs: $' total_amount );
    }

 });

