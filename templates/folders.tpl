        <div class="footer">
        <ul class="todoList">
        <div class="folders_form">
        {foreach from=$folders item=folder}
          <a class="folders" href="folders/{$folder->id_folder}">{$folder->folder}</a>
        {/foreach}
          <a class="folders" href="tasks">All</a>
        </div>
