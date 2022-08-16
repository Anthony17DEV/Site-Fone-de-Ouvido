<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel="stylesheet" href="styleNotaFiscal.css">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
	</head>
	<body>
		<header>
			<h1>Nota Fiscal</h1>
		</header>
		<article>
			<h1>Recipient</h1>
			<table class="meta">
				<tr>
					<th><span >Número</span></th>
					<td><span >1</span></td>
				</tr>
				<tr>
					<th><span >Data</span></th>
					<td><span >Data de hoje (dia/mês/ano)<?php // use a função date() ?></span></td>
				</tr>
				<tr>
					<th><span >Grupo</span></th>
					<td><span >João, Maria, José</span></td>
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span >Item</span></th>
						<th><span >Descrição</span></th>
						<th><span >Quantidade</span></th>
						<th><span >Preço</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a class="cut">-</a><span >Beats EP</span></td>
						<td><span >Fone de ouvido</span></td>
						<td><span >1</span></td>
            <?php
	      // Algumas variáveis úteis. Podem modificar livremente.
              $valorBase = 700;
              $valorCor = 0;
              $valorTamanhoCabo = 0;

	      // Aqui pode usar dois switches para atribuir os valores da cor e do tamanho
	      // de acordo com os valores obtidos via $_GET.

              $valorTotal = $valorBase + $valorCor + $valorTamanhoCabo;
                          ?>
						<td><span data-prefix>$</span><span><?php echo $valorTotal; ?></span></td>
					</tr>
				</tbody>
			</table>
			<table class="balance">
				<tr>
					<th><span >Total</span></th>
					<td><span data-prefix>R$ &nbsp;</span><span><?php echo $valorTotal; ?></span></td>
				</tr>
				<tr>
					<th><span >Total pago</span></th>
					<td><span data-prefix>R$ &nbsp;</span><span ><?php echo $valorTotal; ?></span></td>
				</tr>
			</table>
		</article>
	</body>
</html>
