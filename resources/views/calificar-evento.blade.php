@extends('layouts.main')

@section('content')
<div class="card shadow my-5">
    <div class="card-body">
        <div class="row">
            <h1 class="fw-titulo-conf pt-3 text-center">Calificación Evento</h1>
            <h2 class="fw-titulo-conf pt-3 text-center">{{ $evento->tema }}</h2>
            <form action="{{ route('calificarEvento') }}" method="POST" class="py-5 needs-validation" novalidate>
                @csrf
                <input type="hidden" class="form-control" name="evento" value={{ $evento->id }}>
                <h4 class="mb-3">Teniendo en cuenta tu experiencia completa en el evento, ¿qué posibilidades tienes de recomendarlo a tus amigos o compañeros de trabajo?</h4>
                <div class="mb-3">
                    <i class="far fa-star fa-2x" id="p11" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p12" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p13" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p14" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p15" onclick="calificar(this)"></i>
                    <input type="hidden" class="form-control" name="p1" id="p1" required>
                    <div class="invalid-feedback">
                        Por favor ingrese su calificación.
                    </div>
                </div>
                
                <h4 class="mb-3">¿Dirías que los oradores o presentadores estaban bien informados?</h4>
                <div class="mb-3">
                    <i class="far fa-star fa-2x" id="p21" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p22" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p23" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p24" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p25" onclick="calificar(this)"></i>
                    <input type="hidden" class="form-control" name="p2" id="p2" required>
                    <div class="invalid-feedback">
                        Por favor ingrese su calificación.
                    </div>
                </div>

                <h4 class="mb-3">¿Cómo calificarías la organización del evento?</h4>
                <div class="mb-3">
                    <i class="far fa-star fa-2x" id="p31" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p32" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p33" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p34" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p35" onclick="calificar(this)"></i>
                    <input type="hidden" class="form-control" name="p3" id="p3" required>
                    <div class="invalid-feedback">
                        Por favor ingrese su calificación.
                    </div>
                </div>

                <h4 class="mb-3">¿Cumplió el evento con tus expectativas?</h4>
                <div class="mb-3">
                    <i class="far fa-star fa-2x" id="p41" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p42" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p43" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p44" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p45" onclick="calificar(this)"></i>
                    <input type="hidden" class="form-control" name="p4" id="p4" required>
                    <div class="invalid-feedback">
                        Por favor ingrese su calificación.
                    </div>
                </div>

                <h4 class="mb-3">¿El evento te ayudó a obtener nuevos aprendizajes o conocimientos?</h4>
                <div class="mb-3">
                    <i class="far fa-star fa-2x" id="p51" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p52" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p53" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p54" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p55" onclick="calificar(this)"></i>
                    <input type="hidden" class="form-control" name="p5" id="p5" required>
                    <div class="invalid-feedback">
                        Por favor ingrese su calificación.
                    </div>
                </div>

                <h4 class="mb-3">¿Dirías que los oradores o presentadores estaban bien informados?</h4>
                <div class="mb-3">
                    <i class="far fa-star fa-2x" id="p61" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p62" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p63" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p64" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p65" onclick="calificar(this)"></i>
                    <input type="hidden" class="form-control" name="p6" id="p6" required>
                    <div class="invalid-feedback">
                        Por favor ingrese su calificación.
                    </div>
                </div>

                <h4 class="mb-3">En general, ¿qué tan satisfecho estuviste con el evento?</h4>
                <div class="mb-3">
                    <i class="far fa-star fa-2x" id="p71" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p72" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p73" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p74" onclick="calificar(this)"></i>
                    <i class="far fa-star fa-2x" id="p75" onclick="calificar(this)"></i>
                    <input type="hidden" class="form-control" name="p7" id="p7" required>
                    <div class="invalid-feedback">
                        Por favor ingrese su calificación.
                    </div>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="p8" name="p8" placeholder="text">
                    <label for="floatingInput">En eventos futuros, ¿qué otra temática te gustaría que se tratara?</label>
                </div>

                <button type="submit" class="btn btn-primary w-100">Enviar</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    function calificar(item) {
        let pregunta = item.id[1];
        let calificacion = item.id[2];
        document.getElementById('p' + pregunta).value = calificacion;
        for(let i = 1; i <= 5; i++) {
            document.getElementById('p' + pregunta + i).className = "far fa-star fa-2x";
            document.getElementById('p' + pregunta + i).style.color = "black";
        }
        for(let i = 1; i <= calificacion; i++) {
            document.getElementById('p' + pregunta + i).className = " fas fa-star fa-2x";
            document.getElementById('p' + pregunta + i).style.color = "orange";
        }
    }
</script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
        })
    })()
</script>
@endsection
