    <div class="wrapper">
        <header>Todo App</header>
        <div class="inputField">
          <form action="insertTask" method="POST">
            <input type="text" placeholder="Add your new todo" name="newTask">
            <select name="id">
            {foreach from=$folders item=folder}
                <option value="{$folder->id_folder}">{$folder->folder}</option>
            {/foreach}
            </select>
            <input class="button" type="submit" value="Add">
          </form>
        </div>
        <a href="folders">Folders</a>
        <a href="tasks">Tasks</a>

