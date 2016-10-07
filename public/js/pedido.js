


/*$(document).ready( function() {
   
	$('#pizza_id').on('change', function (){
           
           $.ajax({
                url : 'FlavorsRequest.php', 
                data: 'id=' + $('#pizza_id').val(),
                success: success, 
                dataType: 'numeric', 
                success: function(data){
                    if(data.sucesso == 1){
                        $(pizza_preco).val(data.preco);
                        console.log(pizza_preco);
                         
                    }
                }
           });   
   return false;    
   });
});
*/
//var pizza_preco;

$('#id_pizza').on('change', function preco_pizza(pizza){

	var pizza_preco = pizza.target.value;
	
	console.log(pizza_preco);

	$result= pizza.target.value;
	console.log($result);

	$('#tamanho').on('change', function (tam){

		var tam_preco = tam.target.value * 3.625;
		console.log(tam_preco);

		var preco_final = parseFloat(pizza_preco) + parseFloat(tam_preco);
	
		console.log('preco_final');
		console.log(preco_final);	
		
		$('input[id=preco_final]').val(preco_final.toFixed(2));
	
	});

});





