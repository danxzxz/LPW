<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha uma Cor</title>
</head>

<body>
    <h3>Selecione uma cor para alterar o fundo da página</h3>

    <form method="POST" action="cor_exec.php">
        <select name="cor">
            <option value="">--</option>
            <option style="background-color: tomato;" value="tomato">Tomato</option>
            <option style="background-color: orange;" value="orange">orange</option>
            <option style="background-color: DodgerBlue;" value="DodgerBlue">DodgerBlue</option>
            <option style="background-color: MediumSeaGreen;" value="MediumSeaGreen">MediumSeaGreen</option>
            <option style="background-color: Gray;" value="Gray">Gray</option>
            <option style="background-color: SlateBlue;" value="SlateBlue">SlateBlue</option>
            <option style="background-color: Violet;" value="Violet">Violet</option>
            <option style="background-color: LightGray;" value="LightGray">LightGray</option>
        </select>
        <br><br>
        <button type="submit">Alterar cor</button>
    </form>
</body>

</html>