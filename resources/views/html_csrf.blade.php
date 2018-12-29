<html>

<form method="POST">
    {{ csrf_field() }}
    <input type="text" name="input_value" required>
    <button type="submit">submit</button>
</form>

</html>