jQuery( document ).ready(function() {
    jQuery("#toplevel_page_ordermetrics > a").click(function(event){
        event.preventDefault();
        window.open("https://app.ordermetrics.io", '_blank');
    });
});
