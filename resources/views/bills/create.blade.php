<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/bills/store" method="POST">
        @csrf
        <input name="invoice" placeholder="Fatura"><br>
        <input name="installment" placeholder="Prestação"><br>
        <input name="value" placeholder="Valor"><br>
        <input name="client_id" placeholder="ID CLIENTE"><br>
        <input name="due_date" type="date"><br>
        <input name="payment_day" type="date"><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>