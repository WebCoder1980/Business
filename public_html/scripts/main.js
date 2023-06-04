$(document).ready(function() {
	var buy_but = '#buy input[type="button"].send';
	$(buy_but).wrap("<div class='sendo'></div>");
	buy_but = '#buy .sendo';
	var usercontact = "email";
	$(buy_but).on("mousedown", function(e) {
		$(this).append("<div class='circle'></div>");
		$(this).children().last().css({
			left: (e.pageX - $(this).offset().left - 15).toString() + "px",
			top: (e.pageY - $(this).offset().top - 15).toString() + "px",
		});
		$(this).children().last().animate({
			width: ($(this).parent().innerWidth()),
			height: ($(this).parent().innerWidth()),
			top: -($(this).parent().innerWidth()) / 2,
			left: -($(this).parent().innerWidth()) / 2,
		}, 500);
		$(this).children().on("mouseup focusout mouseleave blur", function() {
			$(this).clearQueue();
			$(this).animate({
				backgroundColor: "rgba(0,0,0,0)",
			}, function() {
			$(this).parent().children(".circle").remove();
			});
		});
	});
	buy_but = '#buy input, #buy .sendo, #task textarea.text';
	$(buy_but).on("mouseover", function() {
		  $(this).animate({
			  backgroundColor: "rgba(255,255,255,0.25)",
		  }, 200);
    });
	$(buy_but).on("mouseleave", function() {
		  $(this).clearQueue();
		  $(this).animate({
			  backgroundColor: "rgba(255,255,255,0.07)",
		  }, 200);
    });
	var sendok = 0;
	/*$("#buy .contact").on("focusout", function() {
		if(sendok) { return; }
		var mail = $(this).val();
		var status = '#buy #status';
		var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if(reg.test(mail.toLowerCase())) {
			$(status).text("");
		}
		else {
			$(status).text("Ошибка! Проверьте правильность почты!");
			$(status).css('color', "#d64b48");
		}		
	});*/
	$('#buy .sendo').on("click", function() {
		var cont = $('#buy .contact input').val();
		switch(usercontact) {
			case 'email':
				var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				var status = '#buy #status';
				if(cont === "") {
					$(status).css('color', "#d64b48");
					$(status).text("Заполните поле mail!");	
				}
				else if(reg.test(cont.toLowerCase())) {
					$(status).css('color', "#E0E4F3");
					$.ajax("/scripts/php/sendrequest.php", {
						data: {
							umail: cont.toLowerCase(),
							uname: $("#username input.text").val(),
							ureq: $("#task .text").val(),
							reqtype: usercontact,
						},
						type: 'POST',
						success: function() {
							$(status).text("Заявка успешно принята! Ожидайте!");
							$(status).css('color', "#E0E4F3");
							sendok = 1;
						}
					});
				}
				else {
					$(status).text("Ошибка! Проверьте правильность почты!");
					$(status).css('color', "#d64b48");
  $('html,body').stop().animate({ scrollTop: $('#error').offset().top }, 1000);
				}
			break;
		}
	});
	$('#selectcont .rb').styler();
	var rbs = '#selectcont input';
	$(rbs).eq(0).after('<label><img src="/images/icons/email.png">Email</label>').data('conttype', "email");
	$(rbs).eq(1).after('<label><img src="/images/icons/whatsapp.png">Whatsapp</label>').data('conttype', "whatsapp");
	$(rbs).eq(2).after('<label><img src="/images/icons/viber.png">Viber</label>').data('conttype', "viber");
	$(rbs).eq(3).after('<label><img src="/images/icons/telegram.png">Telegram</label>').data('conttype', "telegram");
	$('#selectcont .rb').first().trigger('click');
	$('#selectcont .rb').on('click', function() {
		switch($(this).data('conttype')) {
			case 'email':
				$('.contact .text').text("Email:");
				usercontact = 'email';
			break;
			case 'whatsapp':
				$('.contact .text').text("Whatsapp:");
				usercontact = 'whatsapp';
			break;
			case 'viber':
				$('.contact .text').text("Viber:");
				usercontact = 'viber';
			break;
			case 'telegram':
				$('.contact .text').text("Telegram:");
				usercontact = 'telegram';
			break;
		}
	});
});