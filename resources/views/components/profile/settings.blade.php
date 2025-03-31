<div id="profile-settings" class="section-content">
    <div class="card mb-0">
        <div class="card-body">
            <div class="d-flex flex-row align-items-center align-items-xxl-center">
                <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"><svg
                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                        viewBox="0 0 16 16" class="bi bi-person">
                        <path
                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z">
                        </path>
                    </svg></div><button class="btn btn-primary ms-xxl-2" type="button">Изменить
                    аватар</button>
            </div>
            <form class="text-center" method="post" action="{{ route('profile.update') }}">
                @csrf
                <div class="d-flex flex-column flex-xxl-row mb-xxl-3">
                    <div class="flex-grow-1 me-xxl-2 mb-2">
                        <span
                            class="text-secondary d-flex d-xxl-flex flex-row justify-content-xxl-start align-items-xxl-start px-3 pt-1"
                            style="border-top-left-radius: 6px;border-top-right-radius: 6px;border: 1px solid rgba(33,37,41,0.2);border-bottom-style: none;font-size: 12px;">Имя</span>
                        <div class="input-group">
                            <input class="form-control ps-3 pt-0 pe-0" type="text"
                                style="border-top-left-radius: 0px;border-top-style: none;"
                                value="{{ Auth::user()->first_name }}" name="firstName" disabled>
                            <button class="btn btn-primary edit-btn" type="button" style="border-top-right-radius: 0px;"
                                data-field="firstName">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M21.2635 2.29289C20.873 1.90237 20.2398 1.90237 19.8493 2.29289L18.9769 3.16525C17.8618 2.63254 16.4857 2.82801 15.5621 3.75165L4.95549 14.3582L10.6123 20.0151L21.2189 9.4085C22.1426 8.48486 22.338 7.1088 21.8053 5.99367L22.6777 5.12132C23.0682 4.7308 23.0682 4.09763 22.6777 3.70711L21.2635 2.29289ZM16.9955 10.8035L10.6123 17.1867L7.78392 14.3582L14.1671 7.9751L16.9955 10.8035ZM18.8138 8.98525L19.8047 7.99429C20.1953 7.60376 20.1953 6.9706 19.8047 6.58007L18.3905 5.16586C18 4.77534 17.3668 4.77534 16.9763 5.16586L15.9853 6.15683L18.8138 8.98525Z"
                                        fill="currentColor"></path>
                                    <path d="M2 22.9502L4.12171 15.1717L9.77817 20.8289L2 22.9502Z" fill="currentColor">
                                    </path>
                                </svg>
                            </button>
                            <button class="btn btn-success save-btn d-none" type="submit"
                                style="border-top-right-radius: 0px;" data-field="firstName">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                    fill="none">
                                    <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="flex-grow-1 mb-2">
                        <span
                            class="text-secondary d-flex d-xxl-flex flex-row justify-content-xxl-start align-items-xxl-start px-3 pt-1"
                            style="border-top-left-radius: 6px;border-top-right-radius: 6px;border: 1px solid rgba(33,37,41,0.2);border-bottom-style: none;font-size: 12px;">Фамилия</span>
                        <div class="input-group">
                            <input class="form-control ps-3 pt-0 pe-0" type="text"
                                style="border-top-left-radius: 0px;border-top-style: none;"
                                value="{{ Auth::user()->second_name }}" name="secondName" disabled>
                            <button class="btn btn-primary edit-btn" type="button" style="border-top-right-radius: 0px;"
                                data-field="secondName">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M21.2635 2.29289C20.873 1.90237 20.2398 1.90237 19.8493 2.29289L18.9769 3.16525C17.8618 2.63254 16.4857 2.82801 15.5621 3.75165L4.95549 14.3582L10.6123 20.0151L21.2189 9.4085C22.1426 8.48486 22.338 7.1088 21.8053 5.99367L22.6777 5.12132C23.0682 4.7308 23.0682 4.09763 22.6777 3.70711L21.2635 2.29289ZM16.9955 10.8035L10.6123 17.1867L7.78392 14.3582L14.1671 7.9751L16.9955 10.8035ZM18.8138 8.98525L19.8047 7.99429C20.1953 7.60376 20.1953 6.9706 19.8047 6.58007L18.3905 5.16586C18 4.77534 17.3668 4.77534 16.9763 5.16586L15.9853 6.15683L18.8138 8.98525Z"
                                        fill="currentColor"></path>
                                    <path d="M2 22.9502L4.12171 15.1717L9.77817 20.8289L2 22.9502Z" fill="currentColor">
                                    </path>
                                </svg>
                            </button>
                            <button class="btn btn-success save-btn d-none" type="submit"
                                style="border-top-right-radius: 0px;" data-field="secondName">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                    fill="none">
                                    <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column flex-sm-column flex-xxl-row mb-xxl-3">
                    <div class="flex-grow-1 me-xxl-2 mb-2">
                        <span
                            class="text-secondary d-flex d-xxl-flex flex-row justify-content-xxl-start align-items-xxl-start px-3 pt-1"
                            style="border-top-left-radius: 6px;border-top-right-radius: 6px;border: 1px solid rgba(33,37,41,0.2);border-bottom-style: none;font-size: 12px;">Пароль</span>
                        <div class="input-group">
                            <input class="form-control ps-3 pt-0 pe-0" type="password"
                                style="border-top-left-radius: 0px;border-top-style: none;" value="**********"
                                name="password" disabled>
                            <button class="btn btn-primary edit-btn" type="button" style="border-top-right-radius: 0px;"
                                data-field="password">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M21.2635 2.29289C20.873 1.90237 20.2398 1.90237 19.8493 2.29289L18.9769 3.16525C17.8618 2.63254 16.4857 2.82801 15.5621 3.75165L4.95549 14.3582L10.6123 20.0151L21.2189 9.4085C22.1426 8.48486 22.338 7.1088 21.8053 5.99367L22.6777 5.12132C23.0682 4.7308 23.0682 4.09763 22.6777 3.70711L21.2635 2.29289ZM16.9955 10.8035L10.6123 17.1867L7.78392 14.3582L14.1671 7.9751L16.9955 10.8035ZM18.8138 8.98525L19.8047 7.99429C20.1953 7.60376 20.1953 6.9706 19.8047 6.58007L18.3905 5.16586C18 4.77534 17.3668 4.77534 16.9763 5.16586L15.9853 6.15683L18.8138 8.98525Z"
                                        fill="currentColor"></path>
                                    <path d="M2 22.9502L4.12171 15.1717L9.77817 20.8289L2 22.9502Z" fill="currentColor">
                                    </path>
                                </svg>
                            </button>
                            <button class="btn btn-success save-btn d-none" type="submit"
                                style="border-top-right-radius: 0px;" data-field="password">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                    fill="none">
                                    <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="flex-grow-1 mb-2">
                        <span
                            class="text-secondary d-flex d-xxl-flex flex-row justify-content-xxl-start align-items-xxl-start px-3 pt-1"
                            style="border-top-left-radius: 6px;border-top-right-radius: 6px;border: 1px solid rgba(33,37,41,0.2);border-bottom-style: none;font-size: 12px;">Электронная
                            почта</span>
                        <div class="input-group">
                            <input class="form-control ps-3 pt-0 pe-0" type="text"
                                style="border-top-left-radius: 0px;border-top-style: none;"
                                value="{{ Auth::user()->email }}" name="email" disabled>
                            <button class="btn btn-primary edit-btn" type="button" style="border-top-right-radius: 0px;"
                                data-field="email">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M21.2635 2.29289C20.873 1.90237 20.2398 1.90237 19.8493 2.29289L18.9769 3.16525C17.8618 2.63254 16.4857 2.82801 15.5621 3.75165L4.95549 14.3582L10.6123 20.0151L21.2189 9.4085C22.1426 8.48486 22.338 7.1088 21.8053 5.99367L22.6777 5.12132C23.0682 4.7308 23.0682 4.09763 22.6777 3.70711L21.2635 2.29289ZM16.9955 10.8035L10.6123 17.1867L7.78392 14.3582L14.1671 7.9751L16.9955 10.8035ZM18.8138 8.98525L19.8047 7.99429C20.1953 7.60376 20.1953 6.9706 19.8047 6.58007L18.3905 5.16586C18 4.77534 17.3668 4.77534 16.9763 5.16586L15.9853 6.15683L18.8138 8.98525Z"
                                        fill="currentColor"></path>
                                    <path d="M2 22.9502L4.12171 15.1717L9.77817 20.8289L2 22.9502Z" fill="currentColor">
                                    </path>
                                </svg>
                            </button>
                            <button class="btn btn-success save-btn d-none" type="submit"
                                style="border-top-right-radius: 0px;" data-field="email">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                    fill="none">
                                    <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="d-flex mb-xxl-3">
                    <div class="flex-grow-1 me-xxl-0 mb-2">
                        <span
                            class="text-secondary d-flex d-xxl-flex flex-row justify-content-xxl-start align-items-xxl-start px-3 pt-1"
                            style="border-top-left-radius: 6px;border-top-right-radius: 6px;border: 1px solid rgba(33,37,41,0.2);border-bottom-style: none;font-size: 12px;">Логин</span>
                        <div class="input-group">
                            <input class="form-control ps-3 pt-0 pe-0" type="text"
                                style="border-top-left-radius: 0px;border-top-style: none;"
                                value="{{ Auth::user()->login }}" name="login" disabled>
                            <button class="btn btn-primary edit-btn" type="button" style="border-top-right-radius: 0px;"
                                data-field="login">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M21.2635 2.29289C20.873 1.90237 20.2398 1.90237 19.8493 2.29289L18.9769 3.16525C17.8618 2.63254 16.4857 2.82801 15.5621 3.75165L4.95549 14.3582L10.6123 20.0151L21.2189 9.4085C22.1426 8.48486 22.338 7.1088 21.8053 5.99367L22.6777 5.12132C23.0682 4.7308 23.0682 4.09763 22.6777 3.70711L21.2635 2.29289ZM16.9955 10.8035L10.6123 17.1867L7.78392 14.3582L14.1671 7.9751L16.9955 10.8035ZM18.8138 8.98525L19.8047 7.99429C20.1953 7.60376 20.1953 6.9706 19.8047 6.58007L18.3905 5.16586C18 4.77534 17.3668 4.77534 16.9763 5.16586L15.9853 6.15683L18.8138 8.98525Z"
                                        fill="currentColor"></path>
                                    <path d="M2 22.9502L4.12171 15.1717L9.77817 20.8289L2 22.9502Z" fill="currentColor">
                                    </path>
                                </svg>
                            </button>
                            <button class="btn btn-success save-btn d-none" type="submit"
                                style="border-top-right-radius: 0px;" data-field="login">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                    fill="none">
                                    <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="btn-group gap-1 d-flex flex-row justify-content-between" role="group">
                <form action="{{ route('logout') }}" method="POST" class="flex-grow-0">
                    @csrf
                    <button type="submit" class="btn btn-warning" style="border-radius: 6px;">Выйти</button>
                </form>
                <button id="deleteProfileBtn" class="btn btn-danger flex-grow-0" type="button"
                    style="border-radius: 6px;">Удалить профиль</button>
            </div>
        </div>
    </div>
</div>