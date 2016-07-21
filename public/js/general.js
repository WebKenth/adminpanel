$(document).ready(function() {
	$('.menu-toggler').click(function() {
		$('nav, main').toggleClass('active');
	});

	$('.wysiwyg').summernote({
		toolbar: [
			['redo', ['undo', 'redo']],
			['style', ['bold', 'italic', 'underline', 'clear']],
			//['para', ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull']],
			['lists', ['ol', 'ul']],
			['insert', ['link', 'picture']],
			['settings', ['fullscreen', 'codeview']]
		],
		lang: 'da-DK',
		placeholder: 'Skriv sidens indhold her...'
	});


	// ALL THE STUFF FOR NEW PAGE
	var pageSlug;
	$('.headline-input').on('keyup', function() {
		if(!$(this).hasClass('slug-changed')) {
			$('.page-slug-preview > span').text($(this).val().replace(/\s+/g, '-').toLowerCase().replace(/æ/g, 'ae').replace(/ø/g, 'oe').replace(/å/g, 'aa'));
		}
	});

	$('.edit-page-slug').click(function() {
		pageSlug = $('.page-slug-preview > span').text();
		$(this).addClass('hide')
		$('.page-slug-preview').addClass('hide');
		$('#page-slug').val(pageSlug).addClass('active').select();
	});

	$('#page-slug').focusout(function() {
		if(pageSlug !== $(this).val()) {
			$('.headline-input').addClass('slug-changed');
			$('.page-slug-preview > span').text($(this).val().replace(/\s+/g, '-').toLowerCase());
		}
		$(this).removeClass('active')
		$('.page-slug-preview').removeClass('hide');
		$('.edit-page-slug').removeClass('hide');
	});

	$('.element-list > li').draggable({
		helper: 'clone',
		start: function(event, ui) {
			$(this).addClass('active');
			$('.main-droparea, .droparea').addClass('highlight');
		},
		stop: function(event, ui) {
			$(this).removeClass('active')
			$('.main-droparea, .droparea').removeClass('highlight');
		}
	});

	$('.main-droparea').droppable({
		greedy: true,
		accept: '.layout-element',
		hoverClass: 'drop-hover',
		drop: function(event, ui) {
			var element = ui.draggable.attr('id');
			var destination = $(this).find('.panel-body');
			var elementType = ui.draggable.data('element-type');
			$('#tempary-container').load('elements/' + elementType + '/' + element + '/preview.html', function() {
				$(destination).append($(this).html());
			});

			setTimeout(function() {
				$('[data-toggle="tooltip"]').tooltip({
					container: 'body'
				});
			},100);
		}
	});

	$('body').on('click', '.delete-element', function(e) {
		$(this).parents('.element').remove();
	});

	$('body').on('click', '.edit-element', function(e) {
		var elementType = $(this).parents('.element').data('element-type');
		if(elementType == 'layout') {
			var element = $(this).parents('.element').data('layout-size');
		}

		$('#settings-modal .modal-body').load('elements/' + elementType + '/' + element + '/options.html');
		$('#settings-modal').modal('show');

		setTimeout(function() {
			$('.color-picker').iris({
				palettes: ['#000', '#fff', '#2ecc71', '#f1c40f', '#3498db','#e74c3c'],
				target: '.color-picker-outer-container',
				width: 280,
				show_opacity: true,
				change: function(event, ui) {
					$(this).parent().find('.color-picker-example').css('background-color', ui.color.toString());
				}
			});
		}, 100);
	});

	$('body').on('keyup', '#padding-top', function() {
		if($('#apply-to-all-padding').is(':checked')) {
			$('#padding-right, #padding-bottom, #padding-left').val($(this).val());
		}
	});

	$('body').on('change', '#apply-to-all-padding', function() {
		if($(this).is(':checked')) {
			$('#padding-right, #padding-bottom, #padding-left').prop('disabled', true);
		} else {
			$('#padding-right, #padding-bottom, #padding-left').prop('disabled', false);
		}
	});

    $(document).click(function (e) {
        if (!$(e.target).is(".color-picker, .iris-picker, .iris-picker-inner")) {
            $('.color-picker').iris('hide');
            return false;
        }
    });

    $('body').on('focus', '.color-picker', function() {
    	$(this).iris('show');
    });

    $('body').on('click', '.color-picker-trigger', function() {
    	$(this).parent().find('.color-picker').iris('show');
    });

    $('body').on('click', '.color-picker-reset', function() {
    	$(this).parent().find('.color-picker-example').removeAttr('style');
    	$(this).parent().find('.color-picker').val('');
    });
});