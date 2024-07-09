<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>

<style>
#Estilo {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#Estilo td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#Estilo tr:nth-child(even){background-color: #f2f2f2;}

#Estilo tr:hover {background-color: #ddd;}

#Estilo th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>

</head>
<body>
<table id="Estilo">
  <tr>
    <th>Produto</th>
    <th>Marca</th>
    <th>Tamanho</th>
    <th>Preço Venda</th>
    <th>Preço Compra</th>
    <th>Cor</th>
    <th>Genero</th>
    <th>Modelo</th>
    <th>Data</th>
  </tr>

  <tr>
    <td><?php echo $_GET['produto']?></td>
    <td><?php echo $_GET['Marca']?></td>
    <td><?php echo $_GET['Tamanho']?></td>
    <td><?php echo $_GET['PrecoV']?></td>
    <td><?php echo $_GET['PrecoC']?></td>
    <td><?php echo $_GET['Cor']?></td>
    <td><?php echo $_GET['Genero']?></td>
    <td><?php echo $_GET['Modelo']?></td>
    <td><?php echo $_GET['DataC']?></td>
  </tr>
    
</body>
</html>