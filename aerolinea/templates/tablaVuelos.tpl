<div class="container">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Num Vuelo</th>
        <th scope="col">Origen</th>
        <th scope="col">Destino</th>
        <th scope="col">Fecha</th>
        <th scope="col">Estado</th>
        </tr>
    </thead>
    <tbody>
    
        {foreach from=$vuelos item=$vuelo}
            <tr> 
                <td>{$vuelo->id}</td>
                <td>{$vuelo->num_vuelo}</td>
                <td>{$origen}</td>
                <td>{$destino}</td>
                <td>{$vuelo->fechaSalida}</td>
                <td>{$vuelo->estado}</td>
            </tr> 
        {/foreach}
        
    </tbody>
    </table>
    <a href="home" class="btn btn-outline-info">Volver al inicio</a>
</div>