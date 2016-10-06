var pizza_preco;

$('#pizza_id').on('change', function preco_pizza(pizza){

	pizza_preco = pizza.target.value;
	console.log(pizza_preco);

	$(pizza_preco).val(pizza.target.value);
	console.log('usando .val');
	console.log(pizza_preco);
	$('input[id=preco_final]').val(pizza_preco);	
	return pizza_preco = parseInt(pizza.target.value);
});

$('#tamanho').on('change', function (tam){

	var tam_preco = tam.target.value;
	console.log(tam_preco);
	//return tam_preco;
	$('input[id=preco_final]').val(tam_preco);

});

console.log(pizza_preco);

