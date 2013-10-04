$(".img-request").on('click', function ()
{
	$(".img-request").removeClass('border-highlight');
	$(this).addClass('border-highlight');
	$('#select-request').val($(this).attr('id').charAt(2));
});