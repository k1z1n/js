<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <title>Главная</title>
</head>
<body class="bg-gray-100">
<div class="container mx-auto mt-10">

    <!-- Кнопки для открытия модальных окон -->
    <div class="space-y-4">
        <button data-modal-target="dom-modal" data-modal-toggle="dom-modal"
                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                type="button">
            Преобразование типов данных
        </button>

        <button data-modal-target="else-if" data-modal-toggle="else-if"
                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                type="button">
            Условные операторы
        </button>

        <button data-modal-target="dom" data-modal-toggle="dom"
                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                type="button">
            Навигация по DOM
        </button>

        <button data-modal-target="events-modal" data-modal-toggle="events-modal"
                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                type="button">
            Основы событий, функции
        </button>

        <button data-modal-target="mouse-events-modal" data-modal-toggle="mouse-events-modal"
                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                type="button">
            События мыши
        </button>

        <button data-modal-target="keyboard-events-modal" data-modal-toggle="keyboard-events-modal"
                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                type="button">
            События клавиатуры
        </button>

        <button data-modal-target="form-events-modal" data-modal-toggle="form-events-modal"
                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                type="button">
            Работа с формами
        </button>
    </div>

    <!-- Модальные окна -->

    <!-- Modal Навигация по DOM -->
    <div id="dom-modal" tabindex="-1" aria-hidden="true"
         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-4xl max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="header-text">
                        Преобразование типов данных
                    </h3>
                    <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="dom-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>
                <div
                    class="p-6 space-y-6 overflow-y-auto h-[700px] bg-gray-50 rounded-lg shadow-md border border-gray-200">
                    <p class="text-lg font-semibold text-gray-800">1. Типы данных в JavaScript</p>
                    <p class="text-gray-700">
                        JavaScript различает несколько основных типов данных:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 space-y-2">
                        <li><strong>Number</strong>: числовые значения, включая целые и дробные числа, Infinity и NaN.
                        </li>
                        <li><strong>String</strong>: строковые значения, заключённые в кавычки (' ', " ", `` `).</li>
                        <li><strong>Boolean</strong>: логические значения <code>true</code> и <code>false</code>.</li>
                        <li><strong>Null</strong>: специальное значение, которое означает "ничто".</li>
                        <li><strong>Undefined</strong>: значение переменной, которая была объявлена, но не
                            инициализирована.
                        </li>
                        <li><strong>Symbol</strong>: уникальные идентификаторы.</li>
                        <li><strong>BigInt</strong>: целые числа произвольной длины.</li>
                        <li><strong>Object</strong>: сложные структуры данных (объекты, массивы, функции).</li>
                    </ul>

                    <p class="text-lg font-semibold text-gray-800">2. Преобразование типов (type casting)</p>
                    <p class="text-gray-700">
                        Преобразование типов данных бывает явным (явное указание на преобразование) и неявным (когда
                        JavaScript автоматически преобразует типы).
                    </p>

                    <p class="font-semibold text-gray-800">Явное преобразование</p>
                    <p class="text-gray-700">Преобразование в строку (<code>String</code>)</p>
                    <pre class="code">
let num = 10;
let str = String(num);  // '10'

let value = 5 + '';
console.log(typeof value);  // 'string'
    </pre>

                    <p class="text-gray-700">Также можно использовать конкатенацию со строкой:</p>
                    <pre class="code">
let value = 5 + '';
console.log(typeof value);  // 'string'
    </pre>

                    <p class="font-semibold text-gray-800">Преобразование в число (<code>Number</code>)</p>
                    <pre class="code">
let str = '20';
let num = Number(str);  // 20

let str = '5';
let num = +str;  // 5
    </pre>

                    <p class="font-semibold text-gray-800">Преобразование в логическое значение (<code>Boolean</code>)
                    </p>
                    <pre class="code">
let nonEmptyStr = 'Hello';
let isTrue = Boolean(nonEmptyStr);  // true
    </pre>

                    <p class="text-gray-700">Значения, которые становятся <code>false</code> при преобразовании:</p>
                    <ul class="list-disc list-inside text-gray-600 space-y-2">
                        <li>Пустая строка ('')</li>
                        <li>0</li>
                        <li><code>null</code></li>
                        <li><code>undefined</code></li>
                        <li><code>NaN</code></li>
                    </ul>

                    <p class="text-lg font-semibold text-gray-800">Неявное преобразование</p>
                    <p class="text-gray-700">
                        Неявное преобразование типов происходит автоматически во время выполнения операций, когда
                        JavaScript сам преобразует типы для выполнения задачи.
                    </p>

                    <p class="text-gray-700">Пример сложения строки и числа:</p>
                    <pre class="code">
let result = '5' + 3;  // '53'
    </pre>

                    <p class="text-gray-700">Пример для других арифметических операций:</p>
                    <pre class="code">
let result = '5' - 2;  // 3
    </pre>

                    <p class="text-lg font-semibold text-gray-800">3. Проверка типов данных</p>
                    <p class="text-gray-700">
                        Для проверки типов данных в JavaScript можно использовать оператор <code>typeof</code> и
                        некоторые методы и проверки.
                    </p>

                    <p class="font-semibold text-gray-800">Оператор <code>typeof</code></p>
                    <pre class="code">
let num = 42;
console.log(typeof num);  // 'number'

let str = 'Hello';
console.log(typeof str);  // 'string'

let isTrue = true;
console.log(typeof isTrue);  // 'boolean'

console.log(typeof undefined);  // 'undefined'
console.log(typeof null);  // 'object'
    </pre>

                    <p class="font-semibold text-gray-800">Проверка на массив (<code>Array.isArray()</code>)</p>
                    <pre class="code">
let arr = [1, 2, 3];
console.log(Array.isArray(arr));  // true
    </pre>

                    <p class="font-semibold text-gray-800">Проверка на <code>null</code></p>
                    <pre class="code">
let value = null;
console.log(value === null);  // true
    </pre>

                    <p class="font-semibold text-gray-800">Проверка на <code>NaN</code></p>
                    <pre class="code">
let value = NaN;
console.log(isNaN(value));  // true
console.log(Number.isNaN(NaN));  // true
    </pre>
                    <p class="text-lg font-semibold text-gray-800">4. Часто используемые методы преобразования</p>
                    <p class="text-gray-700">
                        Преобразование строки в число: parseInt() и parseFloat() Эти функции позволяют преобразовывать строки в числа, включая целые (parseInt()) и дробные (parseFloat()). <code>typeof</code> и некоторые методы и проверки.
                    </p>

{{--                    <p class="font-semibold text-gray-800">Оператор <code>typeof</code></p>--}}
                    <pre class="code">
let str = '100px';
let num = parseInt(str);  // 100

let floatStr = '3.14';
let floatNum = parseFloat(floatStr);  // 3.14

    </pre>
                    <p class="text-gray-700">
                        toString() для преобразования в строку Для преобразования числа или другого объекта в строку используется метод toString().

                    </p>
                    <pre class="code">
let num = 42;
let str = num.toString();  // '42'
    </pre>
                    <p class="h2">4. Часто используемые методы преобразования</p>
                    <pre class="code">
// Преобразование строки в число
let str = '100';
let num = Number(str);
console.log(num);  // 100
console.log(typeof num);  // 'number'

// Преобразование числа в строку
let anotherNum = 50;
let anotherStr = String(anotherNum);
console.log(anotherStr);  // '50'
console.log(typeof anotherStr);  // 'string'

// Проверка типа данных
console.log(typeof anotherStr);  // 'string'

// Проверка на массив
let arr = [1, 2, 3];
console.log(Array.isArray(arr));  // true

// Преобразование строки в логическое значение
let isEmpty = Boolean('');
console.log(isEmpty);  // false

// Преобразование значения в число с помощью унарного плюса
let result = +'20';
console.log(result);  // 20

                    </pre>
                </div>

            </div>
        </div>
    </div>

    <div id="else-if" tabindex="-1" aria-hidden="true"
         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-4xl max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="header-text">
                        Условные операторы
                    </h3>
                    <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="dom-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>
                <div
                    class="p-6 space-y-6 overflow-y-auto h-[700px] bg-gray-50 rounded-lg shadow-md border border-gray-200">
                    <p class="h2">1. Оператор if...else</p>
                    <p class="p">Оператор if...else выполняет один блок кода, если условие истинно (true), и другой блок кода, если условие ложно (false).</p>
                    <p class="p">Синтаксис:</p>
                    <pre class="code">
if (условие) {
    // Код выполняется, если условие истинно (true)
} else {
    // Код выполняется, если условие ложно (false)
}
                    </pre>
                    <p class="p">Пример:</p>
                    <pre class="code">
let age = 18;

if (age >= 18) {
    console.log('Вы совершеннолетний');
} else {
    console.log('Вы несовершеннолетний');
}
                    </pre>
                    <p class="h2">2. Оператор else if</p>
                    <p class="p">Оператор else if используется для проверки нескольких условий. Если одно из условий истинно, соответствующий блок кода будет выполнен.</p>
                    <p class="p">Синтаксис:</p>
                    <pre class="code">
if (условие1) {
    // Код выполняется, если условие1 истинно
} else if (условие2) {
    // Код выполняется, если условие2 истинно
} else {
    // Код выполняется, если все предыдущие условия ложны
}
                    </pre>
                    <p class="p">Пример:</p>
                    <pre class="code">
let score = 85;

if (score >= 90) {
    console.log('Отлично');
} else if (score >= 70) {
    console.log('Хорошо');
} else {
    console.log('Удовлетворительно');
}
                    </pre>
                    <p class="h2">3. Тернарный оператор ?</p>
                    <p class="p">Тернарный оператор ? является сокращённой формой записи оператора if...else. Он возвращает одно из двух значений в зависимости от условия.</p>
                    <p class="p">Синтаксис:</p>
                    <pre class="code">
условие ? значение1 : значение2;
                    </pre>
                    <p class="p">
                        Если условие истинно, возвращается значение1, если ложно — значение2.

                        Пример:
                    </p>
                    <pre class="code">
let isLoggedIn = true;

let message = isLoggedIn ? 'Добро пожаловать!' : 'Пожалуйста, войдите в систему';
console.log(message);  // 'Добро пожаловать!'
                    </pre>
                    <div class="h2">4. Оператор switch</div>
                    <p class="p">Оператор switch проверяет значение переменной и выполняет соответствующий блок кода, если есть совпадение.</p>
                    <p class="p">Синтаксис:</p>
                    <pre class="code">
switch (выражение) {
    case значение1:
        // Код выполняется, если выражение равно значению1
        break;
    case значение2:
        // Код выполняется, если выражение равно значению2
        break;
    default:
        // Код выполняется, если ни одно из значений не совпало
}
                    </pre>
                    <p class="p">Пример:</p>
                    <pre class="code">
let day = 3;

switch (day) {
    case 1:
        console.log('Понедельник');
        break;
    case 2:
        console.log('Вторник');
        break;
    case 3:
        console.log('Среда');
        break;
    default:
        console.log('Неизвестный день');
}
                    </pre>
                    <div class="h2">Пример кода с использованием условных операторов:</div>
                    <pre class="code">
let temperature = 30;

if (temperature > 30) {
    console.log('Очень жарко!');
} else if (temperature > 20) {
    console.log('Тепло');
} else {
    console.log('Холодно');
}

// Тернарный оператор
let access = (temperature > 20) ? 'Можно идти на прогулку' : 'Останьтесь дома';
console.log(access);

// Switch оператор
let weather = 'дождь';
switch (weather) {
    case 'солнечно':
        console.log('Солнечный день');
        break;
    case 'дождь':
        console.log('Возьмите зонт');
        break;
    default:
        console.log('Неизвестная погода');
}
                    </pre>

                </div>
            </div>
        </div>
    </div>

    <div id="dom" tabindex="-1" aria-hidden="true"
         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-4xl max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="header-text">
                        Преобразование типов данных
                    </h3>
                    <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="dom-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>
                <div class="p-6 space-y-6 overflow-y-auto h-[700px] bg-gray-50 rounded-lg shadow-md border border-gray-200">
                    <div class="h2">2. Выбор элементов</div>
                    <p class="p">JavaScript предоставляет несколько методов для поиска и работы с элементами DOM.</p>
                    <p class="h3">2.1 getElementById()</p>
                    <p class="p">Возвращает элемент по его уникальному id.</p>
                    <pre class="code">
let element = document.getElementById('header');
console.log(element);  // Вернёт элемент с id "header"
                    </pre>
                    <div class="h3">2.2 getElementsByClassName()</div>
                    <p class="p">Возвращает все элементы, у которых есть указанное имя класса.
                    </p>
                    <pre class="code">
let elements = document.getElementsByClassName('item');
console.log(elements);  // Вернёт HTMLCollection всех элементов с классом "item"
                    </pre>
                    <div class="h3">
                        2.3 getElementsByTagName()
                    </div>
                    <p class="p">
                        Возвращает все элементы с указанным именем тега.
                    </p>
                    <pre class="code">
let elements = document.getElementsByTagName('div');
console.log(elements);  // Вернёт HTMLCollection всех элементов div
                    </pre>
                    <div class="h3">
                        2.4 querySelector()
                    </div>
                    <p class="p">
                        Возвращает первый элемент, который соответствует CSS-селектору.
                    </p>
                    <pre class="code">
let element = document.querySelector('.container .item');
console.log(element);  // Вернёт первый элемент с классом "item" внутри элемента с классом "container"
                    </pre>
                    <div class="h3">
                        2.5 querySelectorAll()
                    </div>
                    <p class="p">
                        Возвращает все элементы, соответствующие CSS-селектору.
                    </p>
                    <pre class="code">
let elements = document.querySelectorAll('.container .item');
console.log(elements);  // Вернёт NodeList всех элементов с классом "item"
                    </pre>
                    <div class="h2">3. Изменение элементов</div>
                    <p class="p">После того, как элементы были выбраны, с ними можно взаимодействовать — изменять текст, стили или добавлять новые элементы.</p>
                    <div class="h3">3.1 Изменение текста</div>
                    <p class="p">Используйте свойство textContent для изменения текста внутри элемента.</p>
                    <pre class="code">
let element = document.getElementById('header');
element.textContent = 'Новый текст';  // Изменит текст элемента с id "header"
                    </pre>
                    <div class="h3">3.2 Изменение HTML-содержимого</div>
                    <p class="p">Используйте свойство innerHTML для изменения HTML-контента элемента.</p>
                    <pre class="code">
let element = document.getElementById('content');
element.innerHTML = &lt;p&gt;Hовый параграф&lt;/p&gt;;  // Заменит содержимое на новый параграф
                    </pre>
                    <div class="h3">3.3 Изменение стилей</div>
                    <p class="p">Используйте свойство style для изменения CSS-стилей элемента.</p>
                    <pre class="code">
let element = document.getElementById('box');
element.style.backgroundColor = 'blue';  // Изменит цвет фона на синий
                    </pre>
                    <div class="h2">
                        4. Создание и удаление элементов
                    </div>
                    <div class="h3">
                        4.1 Создание элементов
                    </div>
                    <p class="p">
                        Используйте метод createElement() для создания новых элементов и appendChild() для их добавления в DOM.
                    </p>
                    <pre class="code">
let newElement = document.createElement('div');
newElement.textContent = 'Новый элемент';
document.body.appendChild(newElement);  // Добавит новый элемент в конец &lt;body&gt;
                    </pre>
                    <div class="h3">
                        4.2 Удаление элементов
                    </div>
                    <p class="p">
                        Используйте метод remove() для удаления элемента из DOM.
                    </p>
                    <pre class="code">
let element = document.getElementById('header');
element.remove();  // Удалит элемент с id "header"
                    </pre>
                </div>
            </div>
        </div>
    </div>
</div>











    <!-- Modal Основы событий, функции -->
    <div id="events-modal" tabindex="-1" aria-hidden="true"
         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Основы событий, функции
                    </h3>
                    <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="events-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>
                <div class="p-4 space-y-4">
                    <p>События позволяют взаимодействовать с пользователем. Пример события — это нажатие на кнопку.
                        Функции — это блоки кода, которые выполняют действия при вызове.</p>
                    <ul class="list-disc pl-5">
                        <li><strong>addEventListener</strong>: Добавление обработчика события.</li>
                        <li><strong>removeEventListener</strong>: Удаление обработчика.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal События мыши -->
    <div id="mouse-events-modal" tabindex="-1" aria-hidden="true"
         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        События мыши
                    </h3>
                    <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="mouse-events-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>
                <div class="p-4 space-y-4">
                    <p>События мыши включают взаимодействие с элементами на странице с помощью мыши.</p>
                    <ul class="list-disc pl-5">
                        <li><strong>click</strong>: Нажатие на элемент.</li>
                        <li><strong>dblclick</strong>: Двойной клик.</li>
                        <li><strong>mouseenter</strong>: Наведение курсора.</li>
                        <li><strong>mouseleave</strong>: Уход курсора с элемента.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal События клавиатуры -->
    <div id="keyboard-events-modal" tabindex="-1" aria-hidden="true"
         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        События клавиатуры
                    </h3>
                    <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="keyboard-events-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>
                <div class="p-4 space-y-4">
                    <p>События клавиатуры включают взаимодействие с элементами через нажатие клавиш.</p>
                    <ul class="list-disc pl-5">
                        <li><strong>keydown</strong>: Нажатие клавиши.</li>
                        <li><strong>keyup</strong>: Отпускание клавиши.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Работа с формами -->
    <div id="form-events-modal" tabindex="-1" aria-hidden="true"
         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Работа с формами
                    </h3>
                    <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="form-events-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>
                <div class="p-4 space-y-4">
                    <p>Работа с формами — важная часть взаимодействия с пользователем. Основные события:</p>
                    <ul class="list-disc pl-5">
                        <li><strong>submit</strong>: Отправка формы.</li>
                        <li><strong>change</strong>: Изменение значения в поле формы.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>
