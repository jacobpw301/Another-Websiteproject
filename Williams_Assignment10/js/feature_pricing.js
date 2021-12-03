(function(){
	var features = [
	{
		name:'Parachutes',
		level: '1',
		price: 90
	},
	{
		name:'Spagetti in a bag',
		level: '2',
		price: 80
	},
	{
		name:'Ghouls',
		level: '3',
		price: 400
	}
	];
	
	var rows=[],
	$min = $('#minval'),
	$max = $('#maxval'),
	$table = $('#features');
	
	function makeRows(){
		features.forEach(function(features){
			var $row = $('<tr></tr>');
			$row.append($('<td></td>').text(features.name));
			$row.append($('<td></td>').text(features.level));
			$row.append($('<td></td>').text(features.price));
			rows.push({
				features:features,
				$element:$row
			});
		});
	}
	
	function appendRows(){
		var $tbody = $('<tbody></tbody>');
		rows.forEach(function(row){
			$tbody.append(row.$element);
		});
		$table.append($tbody);
	}
	
	function update(min,max){
		rows.forEach(function(row){
			if(row.features.price >= min && row.features.price <= max){
				row.$element.show();
			} else {
				row.$element.hide();
			}
		});
	}
	
	function init() {
		$('#slider').noUiSlider({
			range: [0,500],start:[100,200], handles:2, margin:20, connect:true,
			serialization:{to:[$min, $max],resolution:1}
		}).change(function() {update($min.val(),$max.val());});
		makeRows();
		appendRows();
		update($min.val(), $max.val());
	}
		
	$(init);
}());
	