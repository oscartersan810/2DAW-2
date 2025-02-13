describe('Testeo de la función correoCorporativo', function(){
  let datos_testeo = [
      {nombre:"Santos;Mora;Antonio", corporativo:"a.santos-mora@iesruizgijon.com"},
      {nombre:"Santos; Mora; Antonio", corporativo:"a.santos-mora@iesruizgijon.com"},
      {nombre:"Pérez;Sánchez;José", corporativo:"j.perez-sanchez@iesruizgijon.com"},
      {nombre:"Pérez; Sánchez; José", corporativo:"j.perez-sanchez@iesruizgijon.com"},
      {nombre:"Perea; Alonso; Pedro", corporativo:"p.perea-alonso@iesruizgijon.com"},
      {nombre:"Sánchez; Muñoz; Jesús Manuel", corporativo:"jm.sanchez-munoz@iesruizgijon.com"},
      {nombre:"García; Muñoz; Ana", corporativo:"a.garcia-munoz@iesruizgijon.com"},
      {nombre:"De la Rosa; Sánchez; Juan Miguel", corporativo:"jm.delarosa-sanchez@iesruizgijon.com"},
      {nombre:"Del Corral; De la Torre; Gabriel del Cristo", corporativo:"gdc.delcorral-delatorre@iesruizgijon.com"}
  ];

  function testeo(entrada,salidaEsperada){
  it(`debería devolver que el correo corporativo de "${entrada}" es ${salidaEsperada}`, function(){
    expect(correoCorporativo(entrada)).toEqual(salidaEsperada);
  });
}

for(let i=0;i<datos_testeo.length; i++){
  testeo(datos_testeo[i].nombre,datos_testeo[i].corporativo);
}

});