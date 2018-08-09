var app = new Vue({
    el: '#app',
    data: {
        habitaciones: []
    },
   
    methods: {
        ajax_peticion(url, key, datos = null, callback = []) {
            var peticion = {
                key: key
            };
            var rawData = JSON.stringify(peticion)
            var formData = new FormData();
            formData.append('key', rawData);
            //Pregunto si se estan enviando datos para operaciones
            if (datos != null) {
                formData.append('data', datos);
            }
            axios.post(url, formData, { headers: { 'Content-type': 'multipart/form-data' } }
            ).then((respuesta) => {
                if (callback.length > 0) {
                    callback.forEach(element => {
                        if (element != null) {
                            element(respuesta.data);
                        }
                    });
                }
            });
        },
    },
    mounted() {
        // pido las areas
        this.ajax_peticion('habitaciones/ajax_habitaciones', 'pedir_areas', null, [(datos) => {
            console.log('------------------------------------');
            console.log(datos);
            console.log('------------------------------------');
            this.habitaciones = datos.datos;
            // this.areas = datos;
        }]);
    
    }

})

