$(function() {
	$('#upload_files').submit(function(e) {
		e.preventDefault();
		$.ajaxFileUpload({
			url 			:'http://MickaelJ/index.php/editorials/add/', 
			secureuri		:false,
			fileElementId	:'userfile',
			dataType		: 'json',
			data			: {
				'name_edito'		: $('#name_edito').val()
				
			},
			success	: function (data, status)
			{
				if(data.status != 'error')
				{
					$('#files').html('<p>Reloading files...</p>');
					refresh_files();
					$('#title').val('');
				}
				alert(data.msg);
			}
		});
		return false;
	});
});