describe('Testeo de la función areaVolumenCono', function () {
    // Datos de testeo de varios conos de distintos radios y alturas
    let datos_testeo = [
        { radio: 5.2, altura: 12.7, area: 309.137, volumen: 359.616 },
        { radio: 7.1, altura: 16.3, area: 554.938, volumen: 860.464 },
        { radio: 2.81, altura: 19.35, area: 197.418, volumen: 160.001 }
    ];

    // Datos de testeo para comprobar que la función areaVolumenCono genera una excepción si el radio o la altura es negativa
    let cono_radio_negativo = { radio: -5.1, altura: 10.2, texto_excepcion: "Radio debe ser positivo" };
    let cono_altura_negativa = { radio: 5.1, altura: -10.2, texto_excepcion: "Altura debe ser positiva" };

    // Testeo con los datos del array datos_testeo
    function testeo(radio, altura, area, volumen) {
        it(`debería devolver que para un cono de radio ${radio} y altura ${altura} el área es ${area} y el volumen ${volumen}`, function () {
            expect(areaVolumenCono(radio, altura).area).toEqual(area);
            expect(areaVolumenCono(radio, altura).volumen).toEqual(volumen);
        });
    }
    for (let i = 0; i < datos_testeo.length; i++) {
        testeo(datos_testeo[i].radio, datos_testeo[i].altura, datos_testeo[i].area, datos_testeo[i].volumen);
    }

    // Testeo excepción con radio negativo
    it(`debería lanzar una excepción con un radio negativo`, function () {
        expect(function () { areaVolumenCono(cono_radio_negativo.radio, cono_radio_negativo.altura) }).toThrowError(cono_radio_negativo.texto_excepcion);
    });

    // Testeo excepción con altura negativa
    it(`debería lanzar una excepción con una altura negativa`, function () {
        expect(function () { areaVolumenCono(cono_altura_negativa.radio, cono_altura_negativa.altura) }).toThrowError(cono_altura_negativa.texto_excepcion);
    });
});