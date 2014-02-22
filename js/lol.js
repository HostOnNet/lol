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
        var sUrl = "get_price.php";
        var postData = "league=" + league + "&league2=" + league2 + "&division=" + division + "&division2=" + division2;

        $.ajax({
            type: "POST",
            url: sUrl,
            data: postData,
            dataType: 'html',
            success: function(msg) {  $('#total_cost').html("Total price = $" + msg); },
            error: function() { alert('fail'); }
        });
    }



 });

