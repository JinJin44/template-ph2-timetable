<h1>登録した授業</h1>

<table border="1">
    <tr>
        <th>曜日</th>
        <th>時限</th>
        <th>授業名</th>
        <th>教室</th>
    </tr>
    @forelse ($entries as $entry)
        <tr>
            <td>{{ $entry->day }}</td>
            <td>{{ $entry->period }}</td>
            <td>{{ $entry->title }}</td>
            <td>{{ $entry->room }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="4">まだ授業が登録されていません</td>
        </tr>
    @endforelse
</table>