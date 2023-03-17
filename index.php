<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<style>
    .container{
        display:flex;
        flex-direction: column;
        gap: 35px;
        margin: 0 auto;
        width: 1024px;
        padding: 30px;
        font-size: 28px;
        text-transform: uppercase;
    }
    button{
        cursor: pointer;
        align-self: center;
        max-width: fit-content;
        padding: 15px 60px;
    }
</style>
<body>
    <div>
        <form action="badWord.php" method="GET" class="container">
            <label for="words">Inserisci il tuo testo:</label>
            <textarea id="words" name="words" rows="3" cols="50" >
            </textarea>
            <input type="text" name="badword" placeholder="inserisci parola da censurare" style="padding: 10px">
            <button type="submit">Invia</button>                   
        </form>
    </div>

</body>
</html>