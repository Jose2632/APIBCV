# APIBDV
API para consulta del tipo de cambio publicado por el BCV (Banco Central de Venezuela)

API que devuelve informacióndel tipo de cambio en la pagina oficinal del Banco Central de Venezuela junto con su valor en Bs. haciendo uso de webscraping, dicha información la retorna en formato JSON para ser usada en proyectos de calculadora o convertidores para aplicaciones realizadas en territorio venezolano o para uso libre y de apoyo.

Instrucciones:

Iniciar la API en su servidor, direccion para realizar el request hostname/controller/converterBs.php?opt=getAll
Al enviar el request devolverá un JSON con la información correspondiente para ser usada.
Ejemplo de respuesta: {"USD":" 4,34","EUR":" 4,92","RUB":" 0,05","CNY":" 0,68","TRY":" 0,31","DATE":"2022-02-23"}
