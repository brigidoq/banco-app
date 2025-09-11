@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Bienvenido al Banco de Honor</h1>
                <p class="col-md-8 fs-4">Su socio financiero de confianza. Nos comprometemos a proporcionar servicios
                    bancarios excepcionales con integridad y honor.</p>
            </div>
        </div>

        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5 text-white bg-primary border rounded-3">
                    <h2>Nuestra Misión</h2>
                    <p>Ofrecer soluciones financieras innovadoras y accesibles que empoderen a nuestros clientes para
                        alcanzar sus metas. Nos esforzamos por mantener la más alta ética y un servicio al cliente sin
                        igual.</p>
                    <button class="btn btn-outline-light" type="button"
                        onclick="showToastInfo('Pregunte al asesor Brigido Quezada')">Conocer Más</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <h2>Nuestra Visión</h2>
                    <p>Ser el banco líder en la comunidad, reconocido por nuestro compromiso con el éxito de los clientes,
                        la innovación tecnológica y la responsabilidad social. Aspiramos a construir un futuro financiero
                        sólido para todos.</p>
                    <button class="btn btn-outline-secondary" type="button"
                        onclick="showToastInfo('Pregunte al asesor Brigido Quezada')">Conocer Más</button>
                    <script>
                        function showToastInfo(message) {
                            // Simple Bootstrap 5 toast example
                            let toastContainer = document.getElementById('toast-container');
                            if (!toastContainer) {
                                toastContainer = document.createElement('div');
                                toastContainer.id = 'toast-container';
                                toastContainer.style.position = 'fixed';
                                toastContainer.style.top = '1rem';
                                toastContainer.style.right = '1rem';
                                toastContainer.style.zIndex = 1055;
                                document.body.appendChild(toastContainer);
                            }
                            const toast = document.createElement('div');
                            toast.className = 'toast align-items-center text-bg-info border-0 show';
                            toast.role = 'alert';
                            toast.ariaLive = 'assertive';
                            toast.ariaAtomic = 'true';
                            toast.innerHTML = `
            <div class="d-flex">
                <div class="toast-body">${message}</div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        `;
                            toastContainer.appendChild(toast);
                            setTimeout(() => {
                                toast.classList.remove('show');
                                setTimeout(() => toast.remove(), 500);
                            }, 3000);
                            toast.querySelector('.btn-close').onclick = () => toast.remove();
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection
