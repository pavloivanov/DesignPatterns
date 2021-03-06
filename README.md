# DesignPatterns
## Породжувальні

### Singleton
Шаблон проектування, який гарантує створення лише одиного екземпляру класу, та надає глобальну точку доступу до нього

### Factory Method
Шаблон проектування, який визначає загальний інтерфейс для створення об'єкту у суперкласі та дозволяє підкласам обирати який екземпляр класу буде створенно.

### Abstract Factory
Шаблон проектування, який визначає загальний інтерфейс для свторення сімейства об'єктів.

### Prototype
Прототип — це породжувальний патерн проектування, що дає змогу копіювати об’єкти, не вдаючись у подробиці їхньої реалізації.

Патерн Прототип доручає процес копіювання самим об’єктам, які треба скопіювати.

## Структурні
### Adapter
Шаблон проектування, який дозволяє об'єктам з несумісними інтерфейсами працювати разом

### Proxy
Шаблон проектування, що дає змогу підставляти замість реальних об’єктів спеціальні об’єкти-замінники.
Ці об’єкти перехоплюють виклики до оригінального об’єкта, дозволяючи зробити щось до чи після передачі виклику оригіналові.

### Decorator
Шаблон, що дає змогу динамічно додавати об’єктам нову функціональність, загортаючи їх у корисні «обгортки».

## Поведінкові
### Strategy
Шаблон проектування, який визначає сімйство схожих алгоритмів і розміщує їх у власному класі. Після цього алгоритм (стратегію) можна заміняти один на інший прямо під час виконання програми.

### Observer
Шаблон проектування, який створює механізм підписки, що дає змогу стежити і реагувати на події, які відбуваються в інших об'єктах

### State
Стан — це поведінковий патерн проектування, що дає змогу об’єктам змінювати поведінку в залежності від їхнього стану.
Ззовні створюється враження, ніби змінився клас об’єкта.

Патерн Стан пропонує створити окремі класи для кожного стану, в якому може перебувати контекстний об’єкт, а потім винести туди поведінки, що відповідають цим станам.

Важливим нюансом, який відрізняє цей патерн від Стратегії, є те, що і контекст, і конкретні стани можуть знати один про одного та ініціювати переходи від одного стану до іншого.