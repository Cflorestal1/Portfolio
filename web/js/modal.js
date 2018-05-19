$(function(){

	console.log('Running Modal Script');
	
	$('#modal-btn').on('click',function(){
		fadeInModal();
	});


	$('.closer').on('click',function(){
		fadeOutModal();
	});


});
