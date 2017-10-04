/***********************************************************/
/*                                                         */
/*                   DOCUMENTO - READY                     */
/*                                                         */
/***********************************************************/
$(document).ready(function() {
    $("#consulta-producto").submit(function(){
        //console.log(encodeURI($("#search_products").val()));
        var datoUrl = encodeURI($("#search_products_text").val());
        //var datoUrl = encodeURIComponent($("#search_products").val());
        document.location = $("#param_hostapp").val() + '/buscar/'+datoUrl;
        
        return false;
    });
});