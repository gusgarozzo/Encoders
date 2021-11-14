        <div class="footer">
        <ul class="todoList">
          {foreach from=$tasks item=task}
            <li>
              <div>
                <input type="checkbox" name="" id="{$task->id}">{$task->tarea}
              </div>
              <div>
                <a href="editTask/{$task->id}">Edit</a>
                <a href="delete/{$task->id}">Delete</a>
              </div>
            </li>
          {/foreach}
        </ul>
        </div>
      </div>
      </body>
</html>