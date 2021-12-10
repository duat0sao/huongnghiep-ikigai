var index = 1;
     $('.next').click(function(event) {
     	$('.id' + index).toggleClass('hide');
        $('.preview').prop('disabled', false)
        $('.preview').removeClass('vohieuhoa')
     	if (index <= 14) {
	     	index++;
	     	$('.id' + index).toggleClass('hide');
	     	if (index == 14) {
                $('.next').addClass('vohieuhoa')
                $('.next').prop('disabled', true)
                $('.form-submit').removeClass('vohieuhoa')
                $('.form-submit').prop('disabled', false)
	     	}
	     }
     });

     $('.preview').click(function(event) {
     	$('.id' + index).toggleClass('hide');
     	index--
     	$('.id' + index).toggleClass('hide');
     	$('.next').prop('disabled', false)
        $('.next').removeClass('vohieuhoa')
     	if (index == 1) {
            $('.preview').prop('disabled', true)
            $('.preview').addClass('vohieuhoa')
        }
     });