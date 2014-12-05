$(function() {
	$('#add_image').submit(function(e) {
		e.preventDefault();
		/*$.ajaxFileUpload({
			url 			:'./upload_file/', 
			secureuri		:false,
			fileElementId	:'i_image_file',
			dataType		: 'JSON',
			data			: {
				'i_title'	: $('#i_title').val()
			},
			success	: function (data, status)
			{
				if(data.status != 'error')
				{
					// $('#files').html('<p>Reloading files...</p>');
					// refresh_files();
					// $('#title').val('');
				}
				// alert(data);
			}
		});*/
		var fd = new FormData();
		fd.append('file', $('#i_image_file')[0].files[0]);
		$.ajax({
		    url : "./upload_file/",
		    type: "POST",
		    data : {
				'i_image_file'	: fd
			},
		    processData: false,
		    contentType: false,
		    success:function(data, textStatus, jqXHR){
		        alert("ad");
		    },
		    error: function(jqXHR, textStatus, errorThrown){
		        //if fails     
		    }
		});
		return false;
	});
});

function refresh_files()
{
	$.get('./upload/files/')
	.success(function (data){
		$('#files').html(data);
	});
}