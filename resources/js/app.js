import './bootstrap';
import 'bootstrap';

// Mostrar automáticamente los toasts de Bootstrap si existen
document.addEventListener('DOMContentLoaded', function () {
	const toastElList = [].slice.call(document.querySelectorAll('.toast'));
	toastElList.forEach(function (toastEl) {
		new window.bootstrap.Toast(toastEl, { delay: 4000 }).show();
	});
});
