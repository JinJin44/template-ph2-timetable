<h1>授業を登録</h1>

<form action="/entries" method="POST">
    @csrf

    <div>
        <label for="day">曜日</label>
        <select id="day" name="day" required>
            <option value="">曜日を選択してください</option>
            <option value="1" @selected(old('day') == '1')>月曜日</option>
            <option value="2" @selected(old('day') == '2')>火曜日</option>
            <option value="3" @selected(old('day') == '3')>水曜日</option>
            <option value="4" @selected(old('day') == '4')>木曜日</option>
            <option value="5" @selected(old('day') == '5')>金曜日</option>
        </select>
        @error('day')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="period">時限</label>
        <input id="period" name="period" type="number" min="1" max="6" value="{{ old('period') }}" required>
        @error('period')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="title">授業名</label>
        <input id="title" name="title" type="text" value="{{ old('title') }}" required>
        @error('title')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="room">教室</label>
        <input id="room" name="room" type="text" value="{{ old('room') }}">
        @error('room')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <button type="submit">登録</button>
</form>
