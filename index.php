<?php require_once 'header.php'; ?>

    <main class="row justify-content-center">
        <h1>Ejercicio 7</h1>
    </main>

    <form class="form p-2" id="form">
        <input type="text" id="name" name="name" class="form-control mt-2" placeholder="Nombre" required>
        <input type="text" id="apellido" name="surname" class="form-control mt-2" placeholder="Apellido" required>
        <input type="number" id="age" name="age" class="form-control mt-2" placeholder="Edad" required>
        <hr class="mb-2">

        <div class="d-flex justify-content-between m-1">        
            <label for="gender">Genero Percibido: </label>
            <input type="radio" name="gender" value="H" checked="checked">H</input>
            <input type="radio" name="gender" value="M">M</input>
            
            <select class="form-control col-6" name="country" id="country">
                <option value="Argentina">Argentina</option>
                <option value="Brasil">Brasil</option>
                <option value="Chile">Chile</option>
                <option value="Uruguay">Uruguay</option>
            </select>
        </div>

        <hr class="mb-2">
        <div class="d-flex justify-content-around m-1">
            <label for="interest">Autos</label>
            <input type="checkbox" value="autos" name="interests[]">autos</input>
            <input type="checkbox" value="motos" name="interests[]">motos</input>
            <input type="checkbox" value="bicis" name="interests[]">bicis</input>           
        </div>
        <hr class="mb-2">

        <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
    </form>

    <div id="container" class="d-flex justify-content-center">
    </div>

<?php require_once 'footer.php'; ?>