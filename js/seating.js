function sumTotal(sc) { //to calcualte the sum total of all the tickets
	var total = 0;
	sc.find('selected').each(function () {
		total += price;
			});
							
		return total;
	}
var price = 21.55; // ticket price (can be anything)
				$(document).ready(function() {
					var $cart = $('#selected-seats'),
					$counter = $('#counter'), //Votes
					$total = $('#total'); //Total money
					
					var sc = $('#seat-map').seatCharts({
						map: [  //Seating chart (This will change based on differing theatres)
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'__________',
							'_aaaaaaaa_',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'__aaaaaa__'
						],
						naming : {
							top : false,
							getLabel : function (character, row, column) {
								return column;
							}
						},
						legend : {
							node : $('#legend'),
							items : [
								[ 'a', 'available',   'Available' ],
								[ 'a', 'unavailable', 'Unavailable'],
								[ 'a', 'selected', 'Selected']
							]					
						},
						click: function () { //Click event
							if (this.status() == 'available') { //optional seat
								$('<li>Row '+(this.settings.row+1)+' Seat '+this.settings.label+'</li>')
									.attr('id', 'cart-item-'+this.settings.id)
									.data('seatId', this.settings.id)
									.appendTo($cart);

								$counter.text(sc.find('selected').length+1);
								$total.text(sumTotal(sc)+price);
											
								return 'selected';
							} else if (this.status() == 'selected') { //Checked
									//Update Number
									$counter.text(sc.find('selected').length-1);
									//update totalnum
									$total.text(sumTotal(sc)-price);
										
									//Delete reservation
									$('#cart-item-'+this.settings.id).remove();
									//optional
									return 'available';
							} else if (this.status() == 'unavailable') { //sold
								return 'unavailable';
							} else {
								return this.style();
							}
						}
					});
					//sold out seats 
					sc.get(['1_2', '2_6', '2_7', '4_4','4_5','6_6','6_7','8_5','8_6','8_7','8_8', '10_1', '10_2']).status('unavailable');
						
				});

				