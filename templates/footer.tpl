        <div class="footer">
        <ul class="todoList">
          {foreach from=$tasks item=task}
            <li>
              <div>
                <input type="checkbox" class="tarea" id="{$task->id}"><span>{$task->tarea}</span>
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