<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Ejercicio 2: Juego del Bingo</h1>
    <h3>Tienes que elegir 6 numeros y el numero de serie (1-999)</h3><br><br>
    <form action="Ejercicio2b.php" method="post">
    <table border="1">
        <tr>
          <td><input type="checkbox" name="n1" value="1"><h2>1</h2></td>
          <td><input type="checkbox" name="n2" value="2"><h2>2</h2></td>
          <td><input type="checkbox" name="n3" value="3"><h2>3</h2></td>
          <td><input type="checkbox" name="n4" value="4"><h2>4</h2></td>
          <td><input type="checkbox" name="n5" value="5"><h2>5</h2></td>
          <td><input type="checkbox" name="n6" value="6"><h2>6</h2></td>
          <td><input type="checkbox" name="n7" value="7"><h2>7</h2></td>
          <td><input type="checkbox" name="n8" value="8"><h2>8</h2></td>
          <td><input type="checkbox" name="n9" value="9"><h2>9</h2></td>
          <td><input type="checkbox" name="n10" value="10"><h2>10</h2></td>
        </tr>
        <tr>
            <td><input type="checkbox" name="n11" value="11"><h2>11</h2></td>
            <td><input type="checkbox" name="n12" value="12"><h2>12</h2></td>
            <td><input type="checkbox" name="n13" value="13"><h2>13</h2></td>
            <td><input type="checkbox" name="n14" value="14"><h2>14</h2></td>
            <td><input type="checkbox" name="n15" value="15"><h2>15</h2></td>
            <td><input type="checkbox" name="n16" value="16"><h2>16</h2></td>
            <td><input type="checkbox" name="n17" value="17"><h2>17</h2></td>
            <td><input type="checkbox" name="n18" value="18"><h2>18</h2></td>
            <td><input type="checkbox" name="n19" value="19"><h2>19</h2></td>
            <td><input type="checkbox" name="n20" value="20"><h2>20</h2></td>
        </tr>
      </table><br><br>
      <label for="serie">Numero serie: </label>
      <input type="number" title="numeroSerie" min="1" max="999" name="numeroSerie"><br><br>
      <input type="submit" value="Jugar">
    </form>
</body>
</html>