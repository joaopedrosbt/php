<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>

</head>
<body>
<form action="listaprod.php" method="get">
  <label for="Produto">Produto</label><br>
  <input type="text" name="produto" id="produto" placeholder="Digite aqui" required><br>
  <br>

  <label for="Marca">Marca</label><br>
  <input type="text" name="Marca" id="Marca" placeholder="Digite aqui" required><br>
  <br>

  <label for="Tamanho">Tamanho</label><br>
  <select id="Tamanho" name="Tamanho">
    <option value="P">P</option><br>
    <option value="P-infantil">P-infantil</option>
    <option value="M">M</option>
    <option value="M-infantil">M-infantil</option>
    <option value="G">G</option>
    <option value="G-infantil">G-infantil</option>
    <option value="GG">GG</option>
    <option value="GG-infantil">GG-infantil</option>
</select><br>
<br>

<label for="precoV">Preço de Venda</label><br>
<input type="number" name="PrecoV" id="Precov" placeholder="Digite aqui" required><br>
<br>

<label for="precoC">Preço de Compra</label><br>
<input type="number" name="PrecoC" id="Precoc" placeholder="Digite aqui" required><br>
<br>

<label for="cor">Cor</label><br>
<input type="text" name="Cor" id="Cor" placeholder="Digite aqui" required><br>
<br>


<label for="genero">Genero</label><br>
<input type="text" name="Genero" id="Genero" placeholder="Digite aqui" required><br>
<br>



<!--<label for="genero">Genero</label><br>
<input type="radio" name="Genero" id="Genero" value="masculino">
<label for="masculino">Masculino</label><br>
<input type="radio" name="Genero" id="Genero" value="faminino">
<label for="feminino">Feminino</label><br>
<input type="radio" name="Genero" id="Genero" value="preferencia">
<label for="preferencia">Para todos</label><br>
<br>-->



<label for="Modelo">Modelo</label><br>
<input type="text" name="Modelo" id="Modelo" placeholder="Digite aqui" required><br>
<br>

<label for="DataC">Data de Compra</label><br>
<input type="date" name="DataC" id="Datac" max="2024-07-09"required>

<br>
<br>
<input type="submit" value="Salvar">

</form>
</body>
</html>