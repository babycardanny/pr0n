     <div id="rightcontent">
        {insert name=get_game_title assign=game_title GID=$GID}
        <div align="center"><b>Game</b>: <a href="games.php?m=view&GID={$GID}">{$GID} - {$game_title|escape:'html'}</a></div><br>
        {include file="errmsg.tpl"}
        {if $total_comments >= 1}
        <div id="paging">
            <div class="pagingnav">{$paging}</div>
        </div>
        <div class="pagingnav_clear"></div>
        {/if}
        <div id="right">
            <table width="100%" cellspacing="1" cellpadding="3" border="0">
            <tr>
                <td align="center"><b>Id</b></td>
                <td align="center"><b>Comment</b></td>
                <td align="center"><b>User</b></td>
                <td align="center"><b>Date</b></td>
                <td align="center"><b>Actions</b></td>
            </tr>
            {if $comments}
            {section name=i loop=$comments}
            <tr bgcolor="{cycle values="#F8F8F8,#F2F2F2"}">
                <td align="center">{$comments[i].CID}</td>
                <td align="center" width="50%">
                    {$comments[i].comment|escape:'html'|nl2br}
                </td>
                <td align="center">
                    <a href="users.php?m=view&UID={$comments[i].UID}">{$comments[i].username}</a>
                </td>
                <td align="center">{$comments[i].addtime|date_format}</td>
                <td align="center">
                    <a href="games.php?m=commentedit&GID={$GID}&COMID={$comments[i].CID}">Edit</a><br>
                    <a href="games.php?m=comments&a=delete&GID={$GID}&COMID={$comments[i].CID}" onClick="javascript:return confirm('Are you sure you want to delete this comment?');">Delete</a><br>
                </td>
            </tr>
            {/section}
            {else}
            <tr>
                <td colspan="8" align="center"><div class="missing">THIS GAME HAS NO COMMENTS</div></td>
            </tr>
            {/if}
            </table>
        </div>
        {if $total_comments >= 1}
        <div id="paging">
            <div class="pagingnav">{$paging}</div>
        </div>
        {/if}
     </div>