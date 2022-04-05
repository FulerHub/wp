$(".phone-button,.modal__exit,.header__phone a").click(function() {
	$(".modal" ).fadeToggle(200)
});
$(document).on('click', function(e) {

	if (!$(e.target).closest('.select').length) {
		if($(".select").hasClass("active")){
			$(".select").removeClass('active')
		}
	}
	e.stopPropagation();
});
$('.form-body').on('click', '.select', function(e){
	$(this).toggleClass('active')
});
$('.form-body').on('click', '.select input[type=radio]', function(e){
	$(this).closest('.select').find('.select__current').text($(this).val())
});

$('.header__burger svg,.sidebar__close').click(function () {
	$('.sidebar').toggleClass('active');
})
/*$(".select").on('click',function(e) {
	console.log('AAAAAAAAA')
	$(this).toggleClass('active')
});*/
/*$(".select input[type=radio]").change(function() {
	$(this).closest('.select').find('.select__current').text($(this).val())
});*/
