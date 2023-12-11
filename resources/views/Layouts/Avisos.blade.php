<link rel="stylesheet" href="{{ asset('css/padrao/MensagensAlerta.css') }}">
<div class="container-erros">
    @if (session('error'))
        <div class="d-flex justify-content-center">
            <div class="toast-container">
                <div class="toast toast-erro" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                    </div>
                    <div class="toast-body fw-bold">
                        <img src="{{ asset('./images/icon-erro.svg') }}" alt="">
                        <p>
                            {{ session('error') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @if (session('success'))
        <div class="d-flex justify-content-center">
            <div class="toast-container">
                <div class="toast toast-sucesso" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                    </div>
                    <div class="toast-body fw-bold">
                        <img src="{{ asset('./images/icon-acerto.svg') }}" alt="">
                        <p>
                            {{ session('success') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="d-flex justify-content-center ">
        <div class="toast-container alerta-email">
            <div class="toast toast-atencao" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <button type="button" class="btn-close" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
                <div class="toast-body fw-bold">
                    <img src="{{ asset('./images/icon-atencao.svg') }}" alt="">
                    <br>
                    <p>Não é possível editar o email</p>
                </div>
            </div>
        </div>
    </div>
</div>
