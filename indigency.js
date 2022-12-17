document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('#btnsave').addEventListener('click', function () {
		html2canvas(document.querySelector('#pdf-view')).then((canvas) => {
			let base64image = canvas.toDataURL('image/svg');
			// console.log(base64image);
			let pdf = new jsPDF('p', 'px', [816, 1056]);
			pdf.addImage(base64image, 'PNG', 0, 0, 816, 1056);
			pdf.save('Certificate of Indigency.pdf');
		});
	}); 
});