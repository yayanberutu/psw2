$(document).ready(function() {
	$('#register_form').bootstrapValidator({
		feedbackIcons: {
			valid: 'glyphicon glyphicon-ok',
			invalid: 'glyphicon glyphicon-remove',
			validating: 'glyphicon glyphicon-refresh',
		},
		fields: {
			full_name : {
				validators : {
					stringLength : {
						min: 4,
					},
						notEmpty : {
							message: 'Fill your name'
						}
				}
			},
			email : {
				validators : {
					notEmpty : {
						message : 'Fill your email'
					},
					emailAddress: {
						message : 'Wrong email'
					}
				}
			},
			Nomor : {
				validators : {
					stringLength : {
						min: 12,
					},
					notEmpty : {
						message : 'Fill your number'
					}
				}
			},
			Pilih : {
				validators : {
					notEmpty : {
						message : 'Select your message category'
					}
				}
			},
			Subject : {
				validators : {
					notEmpty : {
						message : 'Fill your message subject'
					}
				}
			},
			accept : {
				validators : {
					notEmpty : {
						message : 'You must agree the term'
					}
				}
			}
		}
	})
	$('#register_form').data('bootstrapValidator').resetForm();
})

$(document).ready(function() {
$('.img-responsive').click(function(){
      $('.modal-body').empty();
  	var title = $(this).parent('a').attr("title");
  	$('.modal-title').html(title);
  	$($(this).parents('div').html()).appendTo('.modal-body');
  	$('#myModal').modal({show:true});
});
});