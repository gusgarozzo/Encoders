    <div class="wrapper">
        <header>Todo App</header>
        <div class="inputField">
          <form action="insertTask" method="POST">
            <input type="text" placeholder="Add your new todo" name="newTask">
            <select name="id">
              {foreach from=$folders item=$folder}
                  <option name="id" value="{$folder->id}">{$folder->folder}</option>
              {/foreach}
            </select>            
            <input type="submit" class="button" value="Add">
          </form>
        </div>

