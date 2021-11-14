{include file="index.tpl"}
<div class="footer">
        <ul class="todoList">
{foreach from=$folders item=folder}
            <li>
              <div>
                <a href="folders/{$folder->id_folder}">{$folder->folder}
              </div>
              <div>
                <a href="deleteFolder/{$folder->id_folder}">Delete</a>
              </div>
            </li>
          {/foreach}
        </ul>
    </div>
      </body>
</html>