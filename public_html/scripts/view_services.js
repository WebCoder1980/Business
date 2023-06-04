$(document).ready(function() {
	var items = $("#services #switch");
	var serv_value = $(items).parent().children("#viewport").children(".item").length;
	var ind_select = 0;
	var colors =  ['#FFE33E', "#9ccc65", "#883ECF", "#58CCCC", "#000000"]; //Главный фон
	var colors2 = ['#0C0C0C', "#0C0C0C", "#E0E4F3", "#E0E4F3", "#ffffff"]; //Цвет текста и фон для rbutton
	var colors3 = ['#0C0C0C', "#0C0C0C", "#E0E4F3", "#E0E4F3", "#ffffff"]; //Границы
	var colors4 = ['#E0E4F3', "#9ccc65", "#883ECF", "#58CCCC", "#000000"]; //Текст кнопок
	for(var ind = 0; ind < items.length; ind++) {
		for(var jnd = 0; jnd < serv_value; jnd++) {
			$(items).append('<div class="rbutton"></div>');
			if(jnd == 0) $(items).children().last().addClass("rb_checked");
		}
	}
	update_viewport();
	//Обработка событий:
	$(items).parent().children("#viewport").children(".arrow-right").on("click", function() {
		var first_item = $(this).parent().children().first();
		if(ind_select + 1 == serv_value) ind_select = 0;
		else ind_select++;
		update_viewport();
	});
	$(items).parent().children("#viewport").children(".arrow-left").on("click", function() {
		if(ind_select == 0) ind_select = serv_value - 1;
		else ind_select--;
		update_viewport();
	});
	function update_viewport() {
		var first_item = $("#services #viewport .item").first();
		for(var ind = 0; ind < serv_value; ind++) {
			$(items).children(".rbutton").removeClass("rb_checked");
			$(items).children(".rbutton").css("background", "none");
		}
		$(items).children(".rbutton").eq(ind_select).addClass("rb_checked");
		$(items).children(".rbutton").eq(ind_select).css("background-color", "#E0E4F3");
		$(first_item).clearQueue();
		$(items).parent().clearQueue();
		$(first_item).animate({
			"margin-left": (($(first_item).width() + 2 * 65 + 2 * 2 + 2 * 2) * (-ind_select)).toString(),
		});
		/*$(items).parent().children("#viewport").animate({
			"background-color": colors[ind_select],
			"color": colors2[ind_select],
			"border-color": colors[ind_select],
		});
		$(items).animate({
			"background-color": colors[ind_select],
			"color": colors2[ind_select],
			"border-color": colors[ind_select],
			"border-top-color": colors2[ind_select],
		});
		$(items).children(".rbutton").animate({
			"color": colors[ind_select],
			"border-color": colors3[ind_select],
		});
		$(items).parent().children("#viewport").children(".item").children(".buy").animate({
			"color": colors4[ind_select],
			"border-color": colors2[ind_select],
			"background-color": colors2[ind_select],
		});*/
	}
	$(items).children(".rbutton").on("click", function() {
		ind_select = $(this).index();
		update_viewport();
	});
});