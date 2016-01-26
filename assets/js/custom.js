//NOTE!!!!!! Set the email address that the form must be sent to below
var bookingEmail = "Some email address here";

var selText = null;

$('.dDown').dropdown()

$(document).ready(function(){
	$("#privateEvent").hide();
	$("#childEvent").hide();
});

$(document).ready(function(){
	$(".dropdown-menu li a").click(function(){
	  selText = $(this).text();
	  console.log(selText);
	  
	  if(selText == 'Kiddies' || selText == 'Day Visitors' || selText =='School Outing'){
		$("#childEvent").show();
		$("#privateEvent").hide();
	  } else if(selText == 'Private Function'){
		$("#privateEvent").show();
		$("#childEvent").hide();
	  } else{
	  	$("#privateEvent").hide();
		$("#childEvent").hide();
	  }
	});
});

$(document).ready(function(){
	$("#sMit").click(function(){
		var emailAddress = $("#emailAddress").val();
		if(emailAddress == ""){
			alert("Enter an email address");
		} else{

			var atpos = emailAddress.indexOf("@");
			var dotpos = emailAddress.lastIndexOf(".");
			if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=emailAddress.length) {
				alert("Not a valid e-mail address");
			} else {

				//Section1
				var name = $("#nameValue").val();
				var surename = $("#surNameValue").val();
				var cell = $("#cellValue").val();
				var additionalInfo = $("#additionInfValue").val();
				
				//Section2
				var startTime = $("#startValue").val();
				var endTime = $("#endValue").val();
				var select = $("#selText").val();
				
				//Section3
				var numberOfGuests_PVT = $("#numberOfGuests_PVT").val();
				var numberOfChildren = $("#numberOfChildren").val();
				var numberOfAdults = $("#numberOfAdults").val();
				
				//Section4
				var contactFName = $("#contact_firstName").val();
				var contactLName = $("#contact_lastName").val();
				var contactCell = $("#contact_cell").val();
				var contactEmail = $("#contact_email").val();
				
				if(selText == null){
					selText = "Event type not selected";
				}
				
				if(numberOfGuests_PVT == "" || numberOfGuests_PVT == null){
					numberOfGuests_PVT = "NA"
				}
				
				if(numberOfChildren == "" || numberOfChildren == null){
					numberOfChildren = "NA"
				}
				
				if(numberOfAdults == "" || numberOfAdults == null){
					numberOfAdults = "NA"
				}
				
				var date = new Date();
				
				var day = date.getDate();
				var month = date.getMonth() + 1;
				var year = date.getFullYear();
				
				var dateTimeStamp = day + " " + month + " " + year;
				
				var emailBody = "Name: " + name + "%0ASurname: " + surename + "%0ACell: " + cell + "%0AAdditional Information: " + additionalInfo + "%0AStart Time: " + startTime + "%0AEnd Time: " + endTime + "%0AEvent Type: " + selText + "%0ANumber of Guests (Private Event): " + numberOfGuests_PVT + "%0ANumber of Children: " + numberOfChildren + "%0ANumber of Adults: " + numberOfAdults + "%0AContact Name: " + contactFName + "%0AContact Lastname: " + contactLName + "%0AContact Number: " + contactCell + "%0AContact Email: " + contactEmail;
				
				var mailto_link = 'mailto:' + bookingEmail + '?subject=' + "Booking " + dateTimeStamp + '&body=' + emailBody;

				win = window.open(mailto_link, 'emailWindow');
			}
		}
	})
});
