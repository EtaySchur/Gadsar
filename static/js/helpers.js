/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

var ChartManager = function (){
	
};

var RestCallManager = function( callback , http) {
	
};

RestCallManager.prototype.post = function( callback , http , data , action ){
    console.log("post data");
    console.log(data);
	$('html').css('cursor' , 'progress');
	http.post('server/WebService.php', {
		"action" : action,
		"data" : data
	}).
	success(function(data, status) {
		callback(data , status , true);
		$('html').css('cursor' , 'default');
	})
	.
	error(function(data, status) {
		callback(data , status , false);
		$('html').css('cursor' , 'default');
	});
}



var AlertManager = function (){

};

AlertManager.prototype.successAlert = function(){
	new PNotify({
		title: 'שמירת נתונים',
		text: 'שמירת הנתונים הסתיימה בהצלחה',
		type: 'success'
	});
}

AlertManager.prototype.failAlert = function(){
	new PNotify({
		title: 'שמירת נתונים',
		text: 'שמירת הנתונים נכשלה',
		type: 'danger'
	});
}
		



