document.addEventListener("DOMContentLoaded", function () {

    // Получаем форму по id
    const form = document.getElementById('modal-form-sale');

// Добавляем обработчик события submit
    form.addEventListener('submit', (e) => {
        // Отменяем стандартное поведение отправки формы
        e.preventDefault();

        // Получаем данные формы
        const formData = new FormData(form);

        // Отправляем данные на сервер
        fetch('/local/ajax/form.php', {
            method: 'POST',
            body: formData,
        })
            .then((response) => {
                // Проверяем, был ли ответ успешным
                if (response.ok) {
                    // Возвращаем данные из ответа
                    return response.json();
                } else {
                    // Возвращаем сообщение об ошибке
                    throw new Error(`Ошибка: ${response.status}`);
                }
            })
            .then((data) => {
                console.debug(data); // Выводим полученные данные
            })
            .catch((error) => {
                console.error(error.message); // Выводим сообщение об ошибке
            });
    });

});
