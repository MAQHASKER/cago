@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Хранилище для оригинальных значений полей
            const originalValues = new Map();
            // Хранилище для таймеров отмены
            const undoTimers = new Map();

            // Обработчик для кнопок редактирования
            document.querySelectorAll('.edit-btn').forEach(button => {
                button.addEventListener('click', function () {
                    const field = this.getAttribute('data-field');
                    const input = this.parentElement.querySelector('input');
                    const saveBtn = this.parentElement.querySelector('.save-btn');

                    // Сохраняем оригинальное значение
                    originalValues.set(field, input.value);

                    // Активируем поле ввода
                    input.disabled = false;
                    // Скрываем кнопку редактирования
                    this.classList.add('d-none');
                    // Показываем кнопку сохранения
                    saveBtn.classList.remove('d-none');
                });
            });

            // Функция для создания уведомления об отмене
            function createUndoNotification(field, input, originalValue) {
                // Создаем уведомление
                const alert = document.createElement('div');
                alert.className = 'alert alert-info alert-dismissible fade show';
                alert.innerHTML = `
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span>Изменения сохранены</span>
                            <button class="btn btn-sm btn-outline-secondary ms-2 undo-btn">Отменить изменения</button>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="progress mt-2" style="height: 3px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                             role="progressbar"
                             style="width: 100%"
                             aria-valuenow="100"
                             aria-valuemin="0"
                             aria-valuemax="100">
                        </div>
                    </div>
                `;

                // Добавляем уведомление перед формой
                input.closest('form').insertAdjacentElement('beforebegin', alert);

                // Обработчик для кнопки отмены
                const undoBtn = alert.querySelector('.undo-btn');
                undoBtn.addEventListener('click', () => {
                    input.value = originalValue;
                    input.disabled = true;
                    const editBtn = input.parentElement.querySelector('.edit-btn');
                    const saveBtn = input.parentElement.querySelector('.save-btn');
                    editBtn.classList.remove('d-none');
                    saveBtn.classList.add('d-none');
                    alert.remove();
                });

                // Анимация прогресс-бара
                const progressBar = alert.querySelector('.progress-bar');
                progressBar.style.transition = 'width 10s linear';
                setTimeout(() => {
                    progressBar.style.width = '0%';
                }, 100);

                // Удаляем уведомление через 10 секунд
                setTimeout(() => {
                    alert.remove();
                }, 10000);
            }

            // Обработчик для кнопок сохранения
            document.querySelectorAll('.save-btn').forEach(button => {
                button.addEventListener('click', function (e) {
                    e.preventDefault();
                    const field = this.getAttribute('data-field');
                    const input = this.parentElement.querySelector('input');
                    const editBtn = this.parentElement.querySelector('.edit-btn');
                    const originalValue = originalValues.get(field);

                    // Деактивируем поле ввода
                    input.disabled = true;
                    // Показываем кнопку редактирования
                    editBtn.classList.remove('d-none');
                    // Скрываем кнопку сохранения
                    this.classList.add('d-none');

                    // Создаем FormData
                    const formData = new FormData();
                    formData.append('_token', document.querySelector('meta[name="csrf-token"]').content);
                    formData.append('_method', 'POST');

                    // Добавляем только измененное поле
                    formData.append(field, input.value);

                    // Отправляем AJAX запрос
                    fetch('{{ route("profile.update") }}', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'Accept': 'application/json'
                        }
                    })
                        .then(response => {
                            if (!response.ok) {
                                return response.json().then(err => Promise.reject(err));
                            }
                            return response.json();
                        })
                        .then(data => {
                            if (data.success) {
                                // Показываем уведомление об отмене
                                createUndoNotification(field, input, originalValue);
                            } else {
                                throw new Error(data.message || 'Произошла ошибка при сохранении данных');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            // Показываем сообщение об ошибке
                            const alert = document.createElement('div');
                            alert.className = 'alert alert-danger alert-dismissible fade show';

                            let errorMessage = 'Произошла ошибка при сохранении данных';
                            if (error.errors) {
                                // Если есть ошибки валидации
                                errorMessage = '<ul class="mb-0">';
                                Object.keys(error.errors).forEach(key => {
                                    errorMessage += `<li>${error.errors[key][0]}</li>`;
                                });
                                errorMessage += '</ul>';
                            } else if (error.message) {
                                errorMessage = error.message;
                            }

                            alert.innerHTML = `
                        ${errorMessage}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    `;
                            input.closest('form').insertAdjacentElement('beforebegin', alert);
                        });
                });
            });

            // Обработчик для навигации
            const navLinks = document.querySelectorAll('.nav-link');
            const sections = document.querySelectorAll('.section-content');

            function switchSection(sectionId) {
                // Скрываем все секции
                sections.forEach(section => {
                    section.style.display = 'none';
                });

                // Убираем активный класс у всех ссылок
                navLinks.forEach(link => {
                    link.classList.remove('active', 'text-white');
                    link.classList.add('text-dark');
                });

                // Активируем нужную ссылку
                const activeLink = document.querySelector(`[data-section="${sectionId}"]`);
                if (activeLink) {
                    activeLink.classList.add('active', 'text-white');
                    activeLink.classList.remove('text-dark');
                }

                // Показываем нужную секцию
                const activeSection = document.getElementById(sectionId);
                if (activeSection) {
                    activeSection.style.display = 'block';
                }
            }

            // Добавляем обработчики для ссылок навигации
            navLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    const sectionId = this.getAttribute('data-section');
                    switchSection(sectionId);
                });
            });

            // Показываем секцию профиля по умолчанию
            switchSection('profile-settings');

            // Обработчик удаления профиля
            const deleteProfileBtn = document.getElementById('deleteProfileBtn');
            if (deleteProfileBtn) {
                deleteProfileBtn.addEventListener('click', function (e) {
                    e.preventDefault();

                    if (confirm('Вы уверены, что хотите удалить свой профиль? Это действие нельзя отменить.')) {
                        const password = prompt('Введите ваш пароль для подтверждения:');
                        if (password) {
                            const formData = new FormData();
                            formData.append('password', password);
                            formData.append('_method', 'DELETE');
                            formData.append('_token', document.querySelector('meta[name="csrf-token"]').content);

                            fetch('{{ route("profile.destroy") }}', {
                                method: 'POST',
                                headers: {
                                    'Accept': 'application/json'
                                },
                                body: formData
                            })
                                .then(response => {
                                    if (!response.ok) {
                                        return response.json().then(err => Promise.reject(err));
                                    }
                                    return response.json();
                                })
                                .then(data => {
                                    if (data.success) {
                                        alert(data.message);
                                        window.location.href = data.redirect;
                                    } else {
                                        alert(data.message || 'Произошла ошибка при удалении профиля');
                                    }
                                })
                                .catch(error => {
                                    console.error('Ошибка:', error);
                                    alert(error.message || 'Произошла ошибка при удалении профиля');
                                });
                        }
                    }
                });
            }
        });
    </script>
@endpush
