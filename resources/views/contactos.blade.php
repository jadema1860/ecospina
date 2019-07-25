@extends("layouts.plantilla")

@section("carrusel")
<div class="container mt-2">
    <div class="row">
        <div class="col-6">
            <form>
            <div class="form-group">
                <label for="name">Nombres y Apellidos</label>
                <input type="email" class="form-control" id="name" placeholder="Nombre y Apellidos">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Correo Electrónico</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Tipo Mensaje</label>
                <select class="form-control" id="exampleFormControlSelect1">
                <option>Peticiones</option>
                <option>Quejas</option>
                <option>Reclamos</option>
                <option>Felicitaciones</option>
                <option>Otra requerimiento</option>
                </select>
            </div>
        
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Mensaje</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Mensaje</textarea>
            </div>

            <div class="form-group">
            <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
            </form>
        </div>
        <div class="col-6 mt-4">
            <div class="card" style="width: 18rem;">
                    <img src="./images/fotos/fachada.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sede Ecospina</h5>
                            <p class="card-text">Sus necesidades seran tramitadas lo mas rapido posible</p>
                        </div>
            </div>       
        
        </div>
    </div>
</div>
    
@endsection