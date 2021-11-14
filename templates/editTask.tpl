<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
    <body>
    <div class="wrapper">
        <header>Todo App</header>
        <div class="inputField">
          <form action="editar" method="POST">

          {foreach from=$task item=singletask}
              <input type="hidden" value="{$singletask->id}" name="id">
              <input type="text" value="{$singletask->tarea}" name="task">
          {/foreach}
          <select name="folder">
            {foreach from=$folders item=folder}
                <option value="{$folder->id_folder}">{$folder->folder}</option>
            {/foreach}
            </select>
            <input type="submit" class="button" value="Edit">
            <input type="button" class="button" onclick="history.back()" value="Cancel">
        </form>
        
      </div>
      </div>
      </body>
</html>
  