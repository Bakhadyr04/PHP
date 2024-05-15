<!DOCTYPE html>
<html>
<head>
    <title>Добавить канал</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        background-color: lime;
    }
    header {
        background-color:indigo;
        padding: 20px;
        display: flex;
        justify-content: space-between;
    }

    nav {
        display: flex;
        gap: 20px;
    }
    a {
        color: white;
        font-size: 20px;
    }
    main {
        margin-top: 50px;
        padding: 50px;
        border: 1px solid black;
        border-radius: 30px;
        background-color: yellow;
        width: fit-content;
    }

    form {
        display: flex;
        flex-direction: column;
        gap:20px;
    }

</style>
</head>
<body>
<header style="display: flex; justify-content:space-between; background-color:indigo;">
        <h2 style='margin:0; color: white'>Добавить канал</h2>
        <nav style="display: flex; gap: 20px; align-items:center;">
            <a href="/PHP/Course_work/add_message.php">Добавить сообщение</a>
            <a href="/PHP/Course_work/index.php">Вернуться на главную</a>
        </nav>
    </header>
    <main>
    <form action="add_channel_process.php" method="post">
        <label>Название канала:
            
        </label>
        <input type="text" name="channel_name" required>
        <label>Доверенный канал:
        <input type="checkbox" name="trusted">
        </label>
        <input type="submit" value="Добавить">
    </form>
    </main>

</body>
</html>