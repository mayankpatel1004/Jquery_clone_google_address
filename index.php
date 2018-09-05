<script type="text/javascript" src="mootools-1.2.5c.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&sensor=false"></script>
Start : 
<input type="text" class="show_address"  name="address1[]" id="address1" style="width:500px;" /><br /><br />
<a rel="" id="add_stop" class="copy add_txt add_stop">Add Stop (s)</a>
<div id="cloneme" style="display:none"><br />
Stops : <input type="text" placeholder="Enter a Location" class="show_address" name="stops0[]" id="" style="width:500px;" />&nbsp;&nbsp;
<a href="Javascript: void(0);" class="remove_stop">X</a></div>
<br /><br />
End : 
<input type="text" style="width:500px;" id="address2" class="show_address" name="address2[]" /><br /><br />

<script type="text/javascript">
$$('.show_address').each(function(el) { new google.maps.places.Autocomplete(el); });
</script>

<script type="text/javascript">
var id = 1;
$('#add_stop').bind( "click", function(){
	var new_div = $('#cloneme').clone();
	new_div.removeAttr('style');
	new_div.removeAttr('id');
	new_div.addClass('stops stop'+id);
	new_div.attr("id",id);
	id++;
	new_div.find('.remove_stop').each(function() {$(this).click(function(){$(this).parent().remove();});});
	$(new_div).insertBefore("#cloneme");
	$$('.show_address').each(function(el) { new google.maps.places.Autocomplete(el); });
});
</script>