{foreach from=$tasks item=task}
            <li>
              <div>
                <input type="checkbox" class="checkbox" id="{$task->id}"><label>{$task->tarea}</label>
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