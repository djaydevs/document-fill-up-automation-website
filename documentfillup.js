//get current date
var today = new Date();
var month = today.toLocaleString('default', { month: 'long' });
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0');
var yyyy = today.getFullYear();

today = mm + '/' + dd + '/' + yyyy;
//console.log(month);
//console.log(today);

var fname = document.getElementById('firstname');
var mi = document.getElementById('initial');
var lname = document.getElementById('lastname');
var age = document.getElementById('age');
var stay = document.getElementById("stay");
var purpose = document.getElementById('purpose');
var housenum = document.getElementById('housenum');
var street = document.getElementById('street');


const switchDoc1 = function() { //function for indigency
    //let swithDocu = document.querySelector("#docpic");
    //swithDocu.setAttribute("src", fileName);
    document.getElementById("docCOI").style.display="block";
    document.getElementById("docCOR").style.display="none";
    document.getElementById("docCOC").style.display="none";
    
    document.getElementById("resname1").value = fname.innerHTML + " " + mi.innerHTML + ". " + lname.innerHTML;
    document.getElementById("resage1").value = age.innerHTML;
    document.getElementById("resaddress1").value = housenum.innerHTML + " " + street.innerHTML; 
    document.getElementById("respurpose1").value = purpose.innerHTML.toUpperCase();
    document.getElementById("month1").value = month;
    document.getElementById("day1").value = dd;
    document.getElementById("year1").value = yyyy;
    document.getElementById("date1").value = today;

    document.getElementById("resname1").style.display="block";
    document.getElementById("resage1").style.display="block";
    document.getElementById("resaddress1").style.display="block";
    document.getElementById("respurpose1").style.display="block";
    document.getElementById("month1").style.display="block";
    document.getElementById("day1").style.display="block";
    document.getElementById("year1").style.display="block";
    document.getElementById("date1").style.display="block";

    document.getElementById("resname2").style.display="none";
    document.getElementById("resage2").style.display="none";
    document.getElementById("resaddress2").style.display="none";
    document.getElementById("stay2").style.display="none";
    document.getElementById("resname_2").style.display="none";
    document.getElementById("respurpose2").style.display="none";
    document.getElementById("month2").style.display="none";
    document.getElementById("day2").style.display="none";
    document.getElementById("year2").style.display="none";
    document.getElementById("date2").style.display="none";
    document.getElementById("res_name_2").style.display="none";

    document.getElementById("resname3").style.display="none";
    document.getElementById("resage3").style.display="none";
    document.getElementById("resaddress3").style.display="none";
    document.getElementById("stay3").style.display="none";
    document.getElementById("respurpose3").style.display="none";
    document.getElementById("month3").style.display="none";
    document.getElementById("day3").style.display="none";
    document.getElementById("year3").style.display="none";
    document.getElementById("date3").style.display="none";
    document.getElementById("resname_3").style.display="none";
}

const switchDoc2 = function() { //function for residency
    document.getElementById("docCOI").style.display="none";
    document.getElementById("docCOR").style.display="block";
    document.getElementById("docCOC").style.display="none";

    document.getElementById("month2").value = month;
    document.getElementById("day2").value = dd;
    document.getElementById("year2").value = yyyy;
    document.getElementById("date2").value = today;
    //console.log(today);

    document.getElementById("resname2").style.display="block";
    document.getElementById("resage2").style.display="block";
    document.getElementById("resaddress2").style.display="block";
    document.getElementById("stay2").style.display="block";
    document.getElementById("resname_2").style.display="block";
    document.getElementById("respurpose2").style.display="block";
    document.getElementById("month2").style.display="block";
    document.getElementById("day2").style.display="block";
    document.getElementById("year2").style.display="block";
    document.getElementById("date2").style.display="block";
    document.getElementById("res_name_2").style.display="block";

    document.getElementById("resname1").style.display="none";
    document.getElementById("resage1").style.display="none";
    document.getElementById("resaddress1").style.display="none";
    document.getElementById("respurpose1").style.display="none";
    document.getElementById("month1").style.display="none";
    document.getElementById("day1").style.display="none";
    document.getElementById("year1").style.display="none";
    document.getElementById("date1").style.display="none";

    document.getElementById("resname3").style.display="none";
    document.getElementById("resage3").style.display="none";
    document.getElementById("resaddress3").style.display="none";
    document.getElementById("stay3").style.display="none";
    document.getElementById("respurpose3").style.display="none";
    document.getElementById("month3").style.display="none";
    document.getElementById("day3").style.display="none";
    document.getElementById("year3").style.display="none";
    document.getElementById("date3").style.display="none";
    document.getElementById("resname_3").style.display="none";
}

const switchDoc3 = function() { //function for clearance
    document.getElementById("docCOI").style.display="none";
    document.getElementById("docCOR").style.display="none";
    document.getElementById("docCOC").style.display="block";

    document.getElementById("month3").value = month;
    document.getElementById("day3").value = dd;
    document.getElementById("year3").value = yyyy;
    document.getElementById("date3").value = today;

    document.getElementById("resname3").style.display="block";
    document.getElementById("resage3").style.display="block";
    document.getElementById("resaddress3").style.display="block";
    document.getElementById("stay3").style.display="block";
    document.getElementById("respurpose3").style.display="block";
    document.getElementById("month3").style.display="block";
    document.getElementById("day3").style.display="block";
    document.getElementById("year3").style.display="block";
    document.getElementById("date3").style.display="block";
    document.getElementById("resname_3").style.display="block";

    document.getElementById("resname1").style.display="none";
    document.getElementById("resage1").style.display="none";
    document.getElementById("resaddress1").style.display="none";
    document.getElementById("respurpose1").style.display="none";
    document.getElementById("month1").style.display="none";
    document.getElementById("day1").style.display="none";
    document.getElementById("year1").style.display="none";
    document.getElementById("date1").style.display="none";

    document.getElementById("resname2").style.display="none";
    document.getElementById("resage2").style.display="none";
    document.getElementById("resaddress2").style.display="none";
    document.getElementById("stay2").style.display="none";
    document.getElementById("resname_2").style.display="none";
    document.getElementById("respurpose2").style.display="none";
    document.getElementById("month2").style.display="none";
    document.getElementById("day2").style.display="none";
    document.getElementById("year2").style.display="none";
    document.getElementById("date2").style.display="none";
    document.getElementById("res_name_2").style.display="none";
}

document.addEventListener('DOMContentLoaded', function () { //function for saving/printing document
    document.querySelector('#btnsave').addEventListener('click', function () {
		html2canvas(document.querySelector('#pdf-view')).then((canvas) => {
			let base64image = canvas.toDataURL('image/svg');
			// console.log(base64image);
			let pdf = new jsPDF('p', 'px', [816, 1056]);
			pdf.addImage(base64image, 'SVG', 0, 0, 816, 1056);
            pdf.save('Certificate.pdf');
		});
	}); 
});