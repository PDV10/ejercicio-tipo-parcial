a- 
1) obtener toda la info de un vuelo dado su numero de vuelo 

recurso: vuelos/:ID
verbo:  GET
parametros get: 
parametros del recurso: :ID

2)obetener todas las ciudades en que la aerolinia tiene alcances

recurso: ciudades
verbo:  GET
parametros get: --
parametros del recurso: --

3)insertar un vuelo nuevo en el sistema

recurso: vuelo
verbo:  POST
parametros get: $_REQUEST[datos]
parametros del recurso: --

4)obtener vuelos que no salieron 

recurso: vuelos 
verbo: GET
parametros get: ?estado=en-espera
parametros del recurso: --

5)obtener vuelos entre 2 ciudades para un dia determinado 

recurso: vuelos
verbo: GET 
parametros get: ?ciudad1=nombreCiudad1&ciudad2=nombreCiudad2&fecha=fecha
parametros del recurso: --

6)obtener todos los vuelos con destino a barcelona

recurso: vuelos
verbo:  GET
parametros get: ?destino=barcelona
parametros del recurso: --
