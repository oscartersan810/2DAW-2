// Jasmine Tests
describe('Validación de Direcciones IP', function() {
  it('Debería validar direcciones IP válidas', function() {
    expect(validaDireccionIP('192.168.0.1')).toBe(true);
    expect(validaDireccionIP('10.0.0.255')).toBe(true);
    expect(validaDireccionIP('172.16.31.4')).toBe(true);
    expect(validaDireccionIP('255.255.255.255')).toBe(true);
    expect(validaDireccionIP('0.0.0.0')).toBe(true);
  });

  it('Debería rechazar direcciones IP no válidas', function() {
    expect(validaDireccionIP('256.168.0.1')).toBe(false);
    expect(validaDireccionIP('192.168.0.256')).toBe(false);
    expect(validaDireccionIP('192.168.0')).toBe(false);
    expect(validaDireccionIP('192.168.0.1.2')).toBe(false);
    expect(validaDireccionIP('192.168.0.01')).toBe(false);
  });
});