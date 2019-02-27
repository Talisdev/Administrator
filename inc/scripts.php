<script src="assets/vendors/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="assets/vendors/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/vendors/js-cookie/src/js.cookie.js" type="text/javascript"></script>
<script src="assets/vendors/moment/min/moment.min.js" type="text/javascript"></script>
<script src="assets/vendors/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
<script src="assets/vendors/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
<script src="assets/vendors/wnumb/wNumb.js" type="text/javascript"></script>
<script src="assets/vendors/jquery.repeater/src/lib.js" type="text/javascript"></script>
<script src="assets/vendors/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
<script src="assets/vendors/jquery.repeater/src/repeater.js" type="text/javascript"></script>
<script src="assets/vendors/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
<script src="assets/vendors/block-ui/jquery.blockUI.js" type="text/javascript"></script>
<script src="assets/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="assets/vendors/js/framework/components/plugins/forms/bootstrap-datepicker.init.js" type="text/javascript"></script>
<script src="assets/vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="assets/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="assets/vendors/js/framework/components/plugins/forms/bootstrap-timepicker.init.js" type="text/javascript"></script>
<script src="assets/vendors/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="assets/vendors/js/framework/components/plugins/forms/bootstrap-daterangepicker.init.js" type="text/javascript"></script>
<script src="assets/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="assets/vendors/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
<script src="assets/vendors/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
<script src="assets/vendors/js/framework/components/plugins/forms/bootstrap-switch.init.js" type="text/javascript"></script>
<script src="assets/vendors/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
<script src="assets/vendors/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
<script src="assets/vendors/select2/dist/js/select2.full.js" type="text/javascript"></script>
<script src="assets/vendors/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
<script src="assets/vendors/handlebars/dist/handlebars.js" type="text/javascript"></script>
<script src="assets/vendors/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
<script src="assets/vendors/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
<script src="assets/vendors/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
<script src="assets/vendors/inputmask/dist/inputmask/inputmask.phone.extensions.js" type="text/javascript"></script>
<script src="assets/vendors/nouislider/distribute/nouislider.js" type="text/javascript"></script>
<script src="assets/vendors/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
<script src="assets/vendors/autosize/dist/autosize.js" type="text/javascript"></script>
<script src="assets/vendors/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
<script src="assets/vendors/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
<script src="assets/vendors/dropzone/dist/dropzone.js" type="text/javascript"></script>
<script src="assets/vendors/summernote/dist/summernote.js" type="text/javascript"></script>
<script src="assets/vendors/markdown/lib/markdown.js" type="text/javascript"></script>
<script src="assets/vendors/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="assets/vendors/js/framework/components/plugins/forms/bootstrap-markdown.init.js" type="text/javascript"></script>
<script src="assets/vendors/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<script src="assets/vendors/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
<script src="assets/vendors/js/framework/components/plugins/forms/jquery-validation.init.js" type="text/javascript"></script>
<script src="assets/vendors/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
<script src="assets/vendors/js/framework/components/plugins/base/bootstrap-notify.init.js" type="text/javascript"></script>
<script src="assets/vendors/toastr/build/toastr.min.js" type="text/javascript"></script>
<script src="assets/vendors/jstree/dist/jstree.js" type="text/javascript"></script>
<script src="assets/vendors/raphael/raphael.js" type="text/javascript"></script>
<script src="assets/vendors/morris.js/morris.js" type="text/javascript"></script>
<script src="assets/vendors/chartist/dist/chartist.js" type="text/javascript"></script>
<script src="assets/vendors/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
<script src="assets/vendors/js/framework/components/plugins/charts/chart.init.js" type="text/javascript"></script>
<script src="assets/vendors/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
<script src="assets/vendors/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
<script src="assets/vendors/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
<script src="assets/vendors/counterup/jquery.counterup.js" type="text/javascript"></script>
<script src="assets/vendors/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
<script src="assets/vendors/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
<script src="assets/vendors/js/framework/components/plugins/base/sweetalert2.init.js" type="text/javascript"></script>
<script src="assets/js/scripts.bundle.js" type="text/javascript"></script>
<script type="text/javascript">

$(".edit").focusout(function(){
	$(this).removeClass("edit");
	var id = this.id;
	var split_id = id.split("-");
	var field_name = split_id[0];
	var edit_id = split_id[1];
	var value = $(this).text();
	console.log(field_name+' '+value+' '+edit_id);
	$.ajax({
		url: 'inc/ajax/update-note.php',
		type: 'post',
		data: { field:field_name, value:value, id:edit_id },
		success:function(response){
			console.log(response); 
		}
	});
});

function displayNotes(i, j){
    if(i == ""){
        document.getElementById("notes-display").innerHTML = "";
        return;
    }else{
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200) {
				document.getElementById("notes-display").innerHTML = this.responseText;
        		return;
			}
		};
        if(j == true && ordering == true){
            xmlhttp.open("GET", "inc/ajax/notes.php?idmatiere="+i+"&asc", true);
            ordering = false;
       		 return;
        }else if(j == true && ordering == false){   
            xmlhttp.open("GET", "inc/ajax/notes.php?idmatiere="+i+"&desc", true);
            ordering = true;
        	return;
        }else if( j == false){
            xmlhttp.open("GET", "inc/ajax/notes.php?idmatiere="+i, true);
        }
        xmlhttp.send();
		return;
    }
}

// Save data

$(document).ready(function(){
    var ordering = true;
    $('#note-order').on('click', function(){
        var selectValue = $('#matieres-select').val();
        displayNotes(selectValue, true);
    });
    $("#addnews").click(function(){
        var newsTitle = $('#news-title').val();
        var newsContent = $('#news-content').val();
        $.post("inc/ajax/add-news.php",
        {
            news_title: newsTitle,
            news_content: newsContent
        },
        function(data,status){
            alert(data);
            $('#m_modal_1').modal('hide');
        });
	});
});

</script>