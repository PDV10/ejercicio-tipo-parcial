<div class="container">

    <form action="api/buscar">
        <legend>Buscar vuelo</legend>

        <div class="mb-3">
            <label for="disabledSelect" class="form-label">Ciudad Origen</label>
            <select name="origen" id="disabledSelect" class="form-select">
                <option disabled>Origen</option>
                {foreach from=$ciudades item=$ciudad key=key name=name}
                    <option value="{$ciudad->id_ciudad}">{$ciudad->nombre}</option>
                {/foreach}
            </select>
        </div>

        <div class="mb-3">
            <label for="disabledSelect" class="form-label">Ciudad Destino</label>
            <select name="destino" id="disabledSelect" class="form-select">
                <option disabled>Destino</option>
                {foreach from=$ciudades item=$ciudad key=key name=name}
                    <option value="{$ciudad->id_ciudad}">{$ciudad->nombre}</option>
                {/foreach}
            </select>
        </div>
        
        <button type="buscar" class="btn btn-primary">Buscar</button>
        <a href="api/vuelos" class="btn btn-primary">obtener</a>
    </form>
</div>