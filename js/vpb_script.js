/**************************************************************
* This script is brought to you by Vasplus Programming Blog
* Website: www.vasplus.info
* Email: info@vasplus.info
****************************************************************/


//Automatic Uploader
$(document).ready(function() 
{
	$('#insertImage').live('change', function() 
	{
		$("#img_form").vPB({
			url: 'img_up.php',
			beforeSubmit: function() 
			{
				$("#insertImage_Status").show();
				$("#insertImage_Status").html('');
				$("#insertImage_Status").html('<div style="font-family: Verdana, Geneva, sans-serif; font-size:12px; color:black;" align="center">Upload <img src="images/loadings.gif" align="absmiddle" alt="Upload...." title="Upload...."/></div><br clear="all">');
			},
			success: function(response) 
			{
				$("#insertImage_Status").hide().fadeIn('slow').html(response);
			}
		}).submit();
	});          
}); 