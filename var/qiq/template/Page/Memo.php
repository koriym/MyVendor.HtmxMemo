{{ if (isset($this->memo)): }}
    {{ $id = (string) $this->memo['id'] }}
    {{ $title = $this->memo['title'] }}
    <!-- 通常行の表示 -->
    <tr>
        <td>
            <input type="hidden" name="id" value="{{h $id }}"/>
            {{h $title }}
        </td>
        <td class="td-button">
            <button class="button is-warning" hx-get="/edit-memo?id={{h $id }}">編集</button>
            <button class="button is-danger" hx-delete="/memo" hx-include="closest tr" hx-swap="outerHTML swap:1s">削除</button>
        </td>
    </tr>
{{ endif }}
