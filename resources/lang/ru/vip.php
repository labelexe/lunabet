<?php

return [
    'rank' => [
        'level' => 'Уровень VIP - :level',
        '0' => '-',
        '1' => 'Бронза',
        '2' => 'Серебро',
        '3' => 'Золото',
        '4' => 'Платина',
        '5' => 'Алмаз'
    ],
    'description' => 'Ваш уровень VIP рассчитывается по общей сумме всех ставок в вашей любимой валюте (' . (auth()->guest() ? '' : auth()->user()->closestVipCurrency()->name()) . ')',
    'benefits_description' => 'Преимущества VIP статуса - это награды за длительную игру на 7My.',
    'benefits' => 'Преимущества',
    'benefit_list' => [
        'bronze' => [
            '1' => 'Еженедельный бонус',
            '2' => 'Доступ к VIP промокодам',
            '3' => 'VIP роль на сервере Discord'
        ],
        'silver' => [
            '1' => 'Количество активаций промокодов в день повышено с 2 до 3',
            '2' => 'Повышенный еженедельный бонус'
        ],
        'gold' => [
            '1' => 'VIP промокоды не влияют на общий лимит активаций промокодов',
            '2' => 'Повышенный еженедельный бонус'
        ],
        'platinum' => [
            '1' => 'Требуемая сумма для выплаты понижена в 2 раза',
            '2' => 'Повышенный еженедельный бонус'
        ],
        'diamond' => [
            '1' => 'Ваши выплаты имеют повышенный приоритет в очереди (Начало очереди)',
            '2' => 'Таймер лимита активаций промокодов в день понижен с 24 до 12 часов',
            '3' => 'Повышенный еженедельный бонус'
        ]
    ],
    'bonus' => [
        'tooltip' => 'Еженедельный VIP бонус',
        'title' => 'Еженедельный бонус',
        'progress_title' => 'Прогресс',
        'description' => "Вы получаете еженедельный бонус, максимальный размер которого определяется вашим VIP статусом - :vip.<br>
                          <br>Каждая ваша ставка добавляет 0.1% к еженедельному бонусу.
                          <br>Вы можете забрать свой накопленный бонус в любой момент, но учтите, что после этого вы не сможете получить ненакопленный остаток.
                          <br><br>Накопленный прогресс сбрасывается каждое воскресенье. Не забудьте забрать награду до этого дня!",
        'timeout' => "<br><strong>Вы получили бонус на этой неделе.</strong><br>Возвращайтесь в воскресенье!<br><br>"
    ]
];
