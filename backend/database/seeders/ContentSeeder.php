<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;

/**
 * asilbekdev.uz sayt kontenti.
 *
 * DIQQAT: bu fayl `src/data/content.ts` dan avtomatik ko'chirilgan.
 * Ko'p tilli maydonlar {"en","uz","ru","tj"} ko'rinishida JSON ustunda saqlanadi.
 */
class ContentSeeder extends Seeder
{
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $this->insert('site_settings', ['value'], [
            [
               'key' => 'name',
'value' => [
    'en' => 'Asilbek Abdunabiyev',
    'uz' => 'Asilbek Abdunabiyev',
    'ru' => 'Асилбек Абдунабиев',
    'tj' => 'Асилбек Абдунабиев',
],
            ],
            [
                'key' => 'location',
                'value' => [
                    'en' => 'Samarkand, Uzbekistan',
                    'uz' => 'Samarqand, O‘zbekiston',
                    'ru' => 'Самарканд, Узбекистан',
                    'tj' => 'Самарқанд, Ӯзбекистон',
                ],
            ],
            [
                'key' => 'social',
                'value' => [
                    'email' => [
                        'label' => 'asilbekabdunabiyev@gmail.com',
                        'link' => 'mailto:asilbekabdunabiyev@gmail.com',
                    ],
                    'phone' => [
                        'label' => '+998 (94) 616 66 63',
                        'link' => 'tel:+998946166663',
                    ],
                    'github' => [
                        'label' => 'GitHub',
                        'link' => 'https://github.com/AsilbekCodes',
                    ],
                    'linkedin' => [
                        'label' => 'LinkedIn',
                        'link' => 'https://www.linkedin.com/in/asilbek-abdunabiyev-0064a436a/',
                    ],
                    'telegram' => [
                        'label' => 'Telegram',
                        'link' => 'https://t.me/Asilbek_Abdunabiyev',
                    ],
                    'instagram' => [
                        'label' => 'Instagram',
                        'link' => 'https://instagram.com/asilbekdev',
                    ],
                ],
            ],
        ]);

 $this->insert('tech_stacks', [], [
    ['name' => 'HTML', 'icon' => 'SiHtml5', 'level' => 98, 'sort_order' => 0],
    ['name' => 'CSS', 'icon' => 'SiCss3', 'level' => 94, 'sort_order' => 1],
    ['name' => 'JavaScript', 'icon' => 'SiJavascript', 'level' => 92, 'sort_order' => 2],
    ['name' => 'TypeScript', 'icon' => 'SiTypescript', 'level' => 88, 'sort_order' => 3],
    ['name' => 'Bootstrap', 'icon' => 'SiBootstrap', 'level' => 80, 'sort_order' => 4],
    ['name' => 'Sass', 'icon' => 'SiSass', 'level' => 76, 'sort_order' => 5],
    ['name' => 'Tailwind CSS', 'icon' => 'SiTailwindcss', 'level' => 95, 'sort_order' => 6],
    ['name' => 'React', 'icon' => 'SiReact', 'level' => 91, 'sort_order' => 7],
    ['name' => 'Next.js', 'icon' => 'SiNextdotjs', 'level' => 85, 'sort_order' => 8],
    ['name' => 'Vite', 'icon' => 'SiVite', 'level' => 88, 'sort_order' => 9],
    ['name' => 'PHP', 'icon' => 'SiPhp', 'level' => 90, 'sort_order' => 10],
    ['name' => 'Python', 'icon' => 'SiPython', 'level' => 90, 'sort_order' => 11],
    ['name' => 'Node.js', 'icon' => 'SiNodedotjs', 'level' => 85, 'sort_order' => 12],
    ['name' => 'Laravel', 'icon' => 'SiLaravel', 'level' => 96, 'sort_order' => 13],
    ['name' => 'MySQL', 'icon' => 'SiMysql', 'level' => 88, 'sort_order' => 14],
    ['name' => 'REST API', 'icon' => 'Network', 'level' => 87, 'sort_order' => 15],
    ['name' => 'Redis', 'icon' => 'SiRedis', 'level' => 75, 'sort_order' => 16],
    ['name' => 'Git', 'icon' => 'SiGit', 'level' => 90, 'sort_order' => 17],
    ['name' => 'Docker', 'icon' => 'SiDocker', 'level' => 78, 'sort_order' => 18],
    ['name' => 'Postman', 'icon' => 'SiPostman', 'level' => 85, 'sort_order' => 19],
    ['name' => 'Figma', 'icon' => 'SiFigma', 'level' => 70, 'sort_order' => 20],
    ['name' => 'PostgreSQL', 'icon' => 'SiPostgresql', 'level' => 82, 'sort_order' => 21],
    ['name' => 'Supabase', 'icon' => 'SiSupabase', 'level' => 80, 'sort_order' => 22],
    ['name' => 'Telegram Bot API', 'icon' => 'SiTelegram', 'level' => 92, 'sort_order' => 23],
    ['name' => 'Alpine.js', 'icon' => 'SiAlpinedotjs', 'level' => 78, 'sort_order' => 24],
    ['name' => 'Nginx', 'icon' => 'SiNginx', 'level' => 72, 'sort_order' => 25],
    ['name' => 'Linux', 'icon' => 'SiLinux', 'level' => 78, 'sort_order' => 26],
    ['name' => 'Vercel', 'icon' => 'SiVercel', 'level' => 85, 'sort_order' => 27],
    ['name' => 'GitHub', 'icon' => 'SiGithub', 'level' => 90, 'sort_order' => 28],
    ['name' => 'Composer', 'icon' => 'SiComposer', 'level' => 85, 'sort_order' => 29],
]);

        $this->insert('stats', ['label'], [
            [
                'icon' => 'Star',
                'value' => '4+',
                'label' => [
                    'en' => 'Years of Experience',
                    'uz' => 'Tajriba yillari',
                    'ru' => 'Годы опыта',
                    'tj' => 'Солҳои таҷриба',
                ],
                'sort_order' => 0,
            ],
            [
                'icon' => 'Award',
                'value' => '1000+',
                'label' => [
                    'en' => 'Projects Completed',
                    'uz' => 'Tugallangan loyihalar',
                    'ru' => 'Завершённые проекты',
                    'tj' => 'Лоиҳаҳои ба анҷом расида',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'Users',
                'value' => '50+',
                'label' => [
                    'en' => 'Satisfied Clients',
                    'uz' => 'Hamkor kompaniyalar',
                    'ru' => 'Довольные клиенты',
                    'tj' => 'Мизоҷони қаноатманд',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'GraduationCap',
                'value' => '199+',
                'label' => [
                    'en' => 'Mentored Students',
                    'uz' => 'Mamnun mijozlar',
                    'ru' => 'Обученные ученики',
                    'tj' => 'Шогирдони омӯзонидашуда',
                ],
                'sort_order' => 3,
            ],
        ]);

$this->insert('projects', ['name', 'description', 'tech'], [
    [
        'name' => [
            'en' => 'TEMIRYO\'LKARGO Joint-Stock Company',
            'uz' => 'TEMIRYO\'LKARGO Aksiyadorlik jamiyati',
            'ru' => 'АО «TEMIRYO\'LKARGO»',
            'tj' => 'Ҷамъияти саҳомии «TEMIRYO\'LKARGO»',
        ],
        'description' => [
            'en' => 'From an idea to a national operator. Founded in 2023 by a team with years of experience in Uzbekistan\'s rail logistics, the company grew within three years from a small freight-forwarding business into a national multimodal operator. Today we have 17,000+ wagons, 4 wagon depots, 5 freight yards and 6 regional branches. We connect Uzbekistan with Russia, China, Europe, Iran and CIS countries.',
            'uz' => 'G\'oyadan milliy operatorgacha. 2023-yilda O\'zbekiston temir yo\'l logistikasida ko\'p yillik tajribaga ega jamoa tomonidan tashkil etilgan kompaniya uch yil ichida kichik ekspeditorlik kompaniyasidan milliy multimodal operatorga aylandi. Bugun bizda 17 000+ vagon, 4 ta vagon deposi, 5 ta yuk hovlisi va 6 ta hududiy filial bor. Biz O\'zbekistonni Rossiya, Xitoy, Yevropa, Eron va MDH davlatlari bilan bog\'laymiz.',
            'ru' => 'От идеи до национального оператора. Основанная в 2023 году командой с многолетним опытом в железнодорожной логистике Узбекистана, компания за три года выросла из небольшой экспедиторской фирмы в национального оператора мультимодальных перевозок. Сегодня у нас более 17 000 вагонов, 4 вагонных депо, 5 грузовых дворов и 6 региональных филиалов. Мы связываем Узбекистан с Россией, Китаем, Европой, Ираном и странами СНГ.',
            'tj' => 'Аз ғоя то оператори миллӣ. Ширкат соли 2023 аз ҷониби гурӯҳи дорои таҷрибаи бисёрсола дар логистикаи роҳи оҳани Ӯзбекистон таъсис ёфта, дар се сол аз ширкати хурди экспедитсионӣ ба оператори миллии мултимодалӣ табдил ёфт. Имрӯз мо 17 000+ вагон, 4 депои вагонӣ, 5 ҳавлии бор ва 6 филиали минтақавӣ дорем. Мо Ӯзбекистонро бо Русия, Хитой, Аврупо, Эрон ва кишварҳои ИДМ пайваст мекунем.',
        ],
        'image' => '/media/projects/utycarg.png',
        'tech' => ['Laravel', 'Node.js', 'Backend', 'Frontend'],
        'live_demo' => 'https://utycargo.uz/',
        'github' => null,
        'featured' => true,
        'category' => 'Full-Stack',
        'sort_order' => 0,
    ],
    [
        'name' => [
            'en' => 'buranconsulting.uz',
            'uz' => 'buranconsulting.uz',
            'ru' => 'buranconsulting.uz',
            'tj' => 'buranconsulting.uz',
        ],
        'description' => [
            'en' => 'Buran Consulting was founded in 2018 and works in partnership with universities in English-speaking countries. So far, we have helped around 500 people with university admission, tuition discounts and visa processing.',
            'uz' => 'Buran Consulting 2018-yilda tashkil topgan va ingliz tilli davlatlardagi universitetlar bilan hamkorlikda ishlaydi. Shu vaqtgacha biz 500 ga yaqin insonga universitetga qabul qilinishda, o\'qish narxidan chegirma olishda va viza rasmiylashtirishda yordam berdik.',
            'ru' => 'Buran Consulting основана в 2018 году и работает в партнёрстве с университетами англоязычных стран. За это время мы помогли около 500 человек с поступлением в университет, получением скидки на обучение и оформлением визы.',
            'tj' => 'Buran Consulting соли 2018 таъсис ёфтааст ва бо донишгоҳҳои кишварҳои англисзабон ҳамкорӣ мекунад. То имрӯз мо ба тақрибан 500 нафар дар қабул ба донишгоҳ, гирифтани тахфиф барои таҳсил ва расмиёти раводид кумак расондаем.',
        ],
        'image' => '/media/projects/buran.png',
        'tech' => ['Laravel', 'Node.js', 'Backend', 'Frontend'],
        'live_demo' => 'https://buranconsulting.uz/',
        'github' => null,
        'featured' => true,
        'category' => 'Full-Stack',
        'sort_order' => 1,
    ],
    [
        'name' => [
            'en' => '"Avto Hujjat" | Online Insurance',
            'uz' => '"Avto Hujjat" | Onlayn Sug\'urta',
            'ru' => '«Avto Hujjat» | Онлайн-страхование',
            'tj' => '«Avto Hujjat» | Суғуртаи онлайн',
        ],
        'description' => [
            'en' => 'A Telegram bot and online service center for drivers. All vehicle documents are processed quickly and conveniently: taxi licenses, auto insurance, power of attorney, technical inspection, gas permits, eco-stickers and more. The bot understands text, photo and voice messages.',
            'uz' => 'Haydovchilar uchun Telegram bot va onlayn xizmatlar markazi. Barcha avto hujjatlar tez va qulay rasmiylashtiriladi: taksi litsenziyasi, avtosug\'urta, ishonchnoma, texnik ko\'rik, gaz ruxsatnomasi, eko-stiker va boshqalar. Bot matn, rasm va ovozli xabarlarni tushunadi.',
            'ru' => 'Telegram-бот и онлайн-центр услуг для водителей. Все автодокументы оформляются быстро и удобно: лицензия такси, автострахование, доверенность, техосмотр, газовое разрешение, эко-стикер и другое. Бот понимает текстовые, фото- и голосовые сообщения.',
            'tj' => 'Боти Telegram ва маркази хизматрасонии онлайн барои ронандагон. Ҳамаи ҳуҷҷатҳои автомобилӣ зуд ва қулай расмӣ карда мешаванд: иҷозатномаи таксӣ, суғуртаи автомобил, ваколатнома, муоинаи техникӣ, иҷозатномаи газ, эко-стикер ва ғайра. Бот паёмҳои матнӣ, акс ва овозиро мефаҳмад.',
        ],
        'image' => '/media/projects/avto.png',
        'tech' => ['PHP', 'Telegram Bot API', 'MySQL'],
        'live_demo' => 'https://t.me/Davernostbot',
        'github' => null,
        'featured' => true,
        'category' => 'Full-Stack',
        'sort_order' => 2,
    ],
    [
        'name' => [
            'en' => 'asilmedia.org',
            'uz' => 'asilmedia.org',
            'ru' => 'asilmedia.org',
            'tj' => 'asilmedia.org',
        ],
        'description' => [
            'en' => 'AsilMedia.org is one of Uzbekistan\'s most popular movie sites, serving over 170,000 users every day. Translated movies are available with full Uzbek dubbing or subtitles. From new 2026 premieres to classics, everything is available in HD and 1080p. You can watch movies online in Uzbek or download them to your device for free.',
            'uz' => 'AsilMedia.org O\'zbekistonning eng mashhur kino saytlaridan biri bo\'lib, har kuni 170 mingdan ortiq foydalanuvchiga xizmat ko\'rsatadi. Saytda tarjima kinolar o\'zbek tilida to\'liq dublyaj yoki subtitr bilan taqdim etiladi. 2026-yilgi yangi premyeralardan tortib klassik asarlargacha — barchasi HD va 1080p sifatida mavjud. Kinolarni onlayn o\'zbek tilida tomosha qilishingiz yoki qurilmangizga bepul yuklab olishingiz mumkin.',
            'ru' => 'AsilMedia.org — один из самых популярных киносайтов Узбекистана, которым ежедневно пользуются более 170 тысяч человек. Переведённые фильмы представлены с полным дубляжом на узбекский язык или с субтитрами. От новинок 2026 года до классики — всё доступно в HD и 1080p. Вы можете смотреть фильмы онлайн на узбекском языке или бесплатно скачивать их на своё устройство.',
            'tj' => 'AsilMedia.org — яке аз маъруфтарин сомонаҳои филми Ӯзбекистон аст, ки ҳар рӯз зиёда аз 170 ҳазор корбарро хизмат мерасонад. Дар сомона филмҳои тарҷумашуда бо дубляжи пурраи ӯзбекӣ ё бо субтитр пешниҳод мешаванд. Аз премераҳои нави соли 2026 то асарҳои классикӣ — ҳама дар сифати HD ва 1080p дастрасанд. Шумо метавонед филмҳоро онлайн бо забони ӯзбекӣ тамошо кунед ё ройгон ба дастгоҳи худ зеркашӣ намоед.',
        ],
        'image' => '/media/projects/templatesuz.png',
        'tech' => ['PHP', 'MySQL', 'DataLife Engine CMS'],
        'live_demo' => 'https://asilmedia.org/',
        'github' => null,
        'featured' => true,
        'category' => 'Full-Stack',
        'sort_order' => 3,
    ],
    [
        'name' => [
            'en' => 'Ismlarga Niklar Videolar',
            'uz' => 'Ismlarga Niklar Videolar',
            'ru' => 'Ismlarga Niklar Videolar',
            'tj' => 'Ismlarga Niklar Videolar',
        ],
        'description' => [
            'en' => 'Turn your name, nickname, photo and logo into a beautiful animated video with @IsmgaNikVideoXBot. Bring your video to life with nickname effects, funny sounds and professional animations. Fast, high quality and in HD. Try it now: @IsmgaNikVideoXBot',
            'uz' => '@IsmgaNikVideoXBot orqali ism, nik, foto va logotipingizni chiroyli animatsion videoga aylantiring. Nik effektlari, kulgili ovozlar va professional animatsiyalar bilan videongizni jonlantiring. Tez, sifatli va HD formatda. Hoziroq sinab ko\'ring: @IsmgaNikVideoXBot',
            'ru' => 'Превратите своё имя, ник, фото и логотип в красивое анимированное видео с помощью @IsmgaNikVideoXBot. Оживите видео эффектами ника, смешными звуками и профессиональной анимацией. Быстро, качественно и в формате HD. Попробуйте прямо сейчас: @IsmgaNikVideoXBot',
            'tj' => 'Бо @IsmgaNikVideoXBot ном, ник, акс ва логотипи худро ба видеои зебои аниматсионӣ табдил диҳед. Видеои худро бо эффектҳои ник, садоҳои хандовар ва аниматсияҳои касбӣ зинда кунед. Зуд, босифат ва дар формати HD. Ҳозир санҷед: @IsmgaNikVideoXBot',
        ],
        'image' => '/media/projects/php-social-messenger.png',
        'tech' => ['PHP', 'MySQL'],
        'live_demo' => 'https://t.me/IsmgaNikVideoXBot',
        'github' => 'https://github.com/AsilbekCodes/IsmlargaNiklar',
        'featured' => false,
        'category' => 'Backend',
        'sort_order' => 4,
    ],
    [
        'name' => [
            'en' => 'User info bot',
            'uz' => 'User info bot',
            'ru' => 'User info bot',
            'tj' => 'User info bot',
        ],
        'description' => [
            'en' => 'usinfosbot finds the User ID, Group ID, Super Group ID, Channel ID, Private Channel ID, Bot ID and Premium user ID from a single username. Fast, reliable and completely free. Try it now: @usinfosbot',
            'uz' => 'usinfosbot bitta username orqali User ID, Group ID, Super Group ID, Channel ID, Private Channel ID, Bot ID va Premium foydalanuvchi ID\'sini aniqlab beradi. Tezkor, ishonchli va mutlaqo bepul. Hoziroq sinab ko\'ring: @usinfosbot',
            'ru' => 'usinfosbot определяет по одному username User ID, Group ID, Super Group ID, Channel ID, Private Channel ID, Bot ID и ID Premium-пользователя. Быстро, надёжно и совершенно бесплатно. Попробуйте прямо сейчас: @usinfosbot',
            'tj' => 'usinfosbot тавассути як username User ID, Group ID, Super Group ID, Channel ID, Private Channel ID, Bot ID ва ID-и корбари Premium-ро муайян мекунад. Зуд, боэътимод ва комилан ройгон. Ҳозир санҷед: @usinfosbot',
        ],
        'image' => '/media/projects/javascript-vocabulary-quiz.png',
        'tech' => ['Python'],
        'live_demo' => 'https://t.me/usinfobot',
        'github' => 'https://github.com/AsilbekCodes/userinfobot',
        'featured' => false,
        'category' => 'Backend',
        'sort_order' => 5,
    ],
    [
        'name' => [
            'en' => 'Java Calculator App',
            'uz' => 'Java Calculator App',
            'ru' => 'Java Calculator App',
            'tj' => 'Java Calculator App',
        ],
        'description' => [
            'en' => 'A simple desktop calculator built with Java and Swing. It supports basic arithmetic operations, a clean graphical interface, and error handling such as division by zero.',
            'uz' => 'Java va Swing yordamida yaratilgan oddiy desktop kalkulyator. Unda asosiy arifmetik amallar, sodda grafik interfeys va nolga bo\'lish kabi xatolarni qayta ishlash imkoniyati mavjud.',
            'ru' => 'Простой настольный калькулятор, созданный на Java с использованием Swing. Поддерживает базовые арифметические операции, понятный графический интерфейс и обработку ошибок, например деления на ноль.',
            'tj' => 'Калкулятори оддии desktop, ки бо Java ва Swing сохта шудааст. Он амалиётҳои асосии арифметикӣ, интерфейси графикии содда ва коркарди хатогиҳо, аз ҷумла тақсим ба сифрро дастгирӣ мекунад.',
        ],
        'image' => '/media/projects/java-calculator.png',
        'tech' => ['Java', 'Swing', 'OOP'],
        'live_demo' => null,
        'github' => 'https://github.com/AsilbekCodes/java-calculator-app',
        'featured' => false,
        'category' => 'Desktop',
        'sort_order' => 6,
    ],
    [
        'name' => [
            'en' => 'Java Test Platform',
            'uz' => 'Java Test Platform',
            'ru' => 'Java Test Platform',
            'tj' => 'Java Test Platform',
        ],
        'description' => [
            'en' => 'A test platform built on Java Swing, featuring timed questions, randomized answer options, a scoring system and a final results report.',
            'uz' => 'Java Swing asosida yaratilgan test platformasi bo\'lib, unda vaqt bilan cheklangan savollar, tasodifiy javob variantlari, ball tizimi va yakuniy natija hisoboti mavjud.',
            'ru' => 'Платформа для тестирования на основе Java Swing: вопросы с ограничением по времени, случайный порядок вариантов ответа, система баллов и итоговый отчёт о результатах.',
            'tj' => 'Платформаи тестӣ дар асоси Java Swing, ки дорои саволҳои бо вақт маҳдуд, вариантҳои ҷавоби тасодуфӣ, низоми холгузорӣ ва ҳисоботи натиҷаи ниҳоӣ мебошад.',
        ],
        'image' => '/media/projects/java-test-platform.png',
        'tech' => ['Java', 'Swing', 'AWT', 'OOP'],
        'live_demo' => null,
        'github' => 'https://github.com/AsilbekCodes/java-test-platform',
        'featured' => false,
        'category' => 'Desktop',
        'sort_order' => 7,
    ],
    [
        'name' => [
            'en' => 'Java To-Do List',
            'uz' => 'Java To-Do List',
            'ru' => 'Java To-Do List',
            'tj' => 'Java To-Do List',
        ],
        'description' => [
            'en' => 'A simple task management desktop application built with Java Swing. It lets users add, edit and delete tasks and mark them as completed.',
            'uz' => 'Java Swing yordamida yaratilgan oddiy vazifalar boshqaruvi desktop ilovasi. Unda vazifalarni qo\'shish, tahrirlash, o\'chirish va bajarilgan deb belgilash imkoniyati mavjud.',
            'ru' => 'Простое настольное приложение для управления задачами, созданное на Java Swing. Позволяет добавлять, редактировать и удалять задачи, а также отмечать их как выполненные.',
            'tj' => 'Барномаи оддии desktop барои идоракунии вазифаҳо, ки бо Java Swing сохта шудааст. Он имкон медиҳад, ки вазифаҳо илова, таҳрир ва нест карда шаванд ва ҳамчун анҷомёфта қайд гарданд.',
        ],
        'image' => '/media/projects/java-todo-list.png',
        'tech' => ['Java', 'Swing', 'OOP'],
        'live_demo' => null,
        'github' => 'https://github.com/AsilbekCodes/java-todo-list',
        'featured' => false,
        'category' => 'Desktop',
        'sort_order' => 8,
    ],
    [
        'name' => [
            'en' => 'Java Android Messenger',
            'uz' => 'Java Android Messenger',
            'ru' => 'Java Android Messenger',
            'tj' => 'Java Android Messenger',
        ],
        'description' => [
            'en' => 'An AI-powered Android chat application built with Java and Room Database. It uses the Google Gemini API to generate responses in real time and stores messages locally via SQLite.',
            'uz' => 'Java va Room Database asosida yaratilgan sun\'iy intellektli Android chat ilovasi. Google Gemini API orqali real vaqt rejimida javoblar yaratadi va xabarlarni SQLite orqali lokal saqlaydi.',
            'ru' => 'Android-чат с искусственным интеллектом, созданный на Java и Room Database. С помощью Google Gemini API генерирует ответы в реальном времени и хранит сообщения локально в SQLite.',
            'tj' => 'Барномаи чати Android бо зеҳни сунъӣ, ки бо Java ва Room Database сохта шудааст. Он тавассути Google Gemini API ҷавобҳоро дар вақти воқеӣ эҷод мекунад ва паёмҳоро тавассути SQLite дар дастгоҳ нигоҳ медорад.',
        ],
        'image' => '/media/projects/java-android-messenger.png',
        'tech' => ['Java', 'Android', 'Room DB', 'SQLite', 'Gemini API'],
        'live_demo' => null,
        'github' => 'https://github.com/AsilbekCodes/java-android-messenger',
        'featured' => false,
        'category' => 'Mobile',
        'sort_order' => 9,
    ],
    [
        'name' => [
            'en' => 'Mantiqli savollar bot',
            'uz' => 'Mantiqli savollar bot',
            'ru' => 'Mantiqli savollar bot',
            'tj' => 'Mantiqli savollar bot',
        ],
        'description' => [
            'en' => 'A Telegram channel and bot system that develops logical thinking. Users are given a variety of logic and IQ questions aimed at improving their reasoning. The system includes a leaderboard, a base of 500+ questions, user statistics and a scoring mechanism.',
            'uz' => 'Mantiqiy fikrlashni rivojlantiruvchi Telegram kanal va bot tizimi. Foydalanuvchilarga turli mantiqiy va IQ savollari taqdim etiladi, ular orqali fikrlash qobiliyatini oshirish maqsad qilingan. Tizimda reyting jadvali, 500 dan ortiq savollar bazasi, foydalanuvchi statistikasi va ballarni hisoblash mexanizmi mavjud.',
            'ru' => 'Система из Telegram-канала и бота для развития логического мышления. Пользователям предлагаются разнообразные логические вопросы и IQ-задачи, направленные на улучшение мышления. В системе есть таблица рейтинга, база из более чем 500 вопросов, статистика пользователей и механизм подсчёта баллов.',
            'tj' => 'Низоми канал ва боти Telegram барои рушди тафаккури мантиқӣ. Ба корбарон саволҳои гуногуни мантиқӣ ва IQ пешниҳод мешаванд, ки барои баланд бардоштани қобилияти андешидан пешбинӣ шудаанд. Дар низом ҷадвали рейтинг, пойгоҳи зиёда аз 500 савол, омори корбарон ва механизми ҳисобкунии холҳо мавҷуд аст.',
        ],
        'image' => '/media/projects/php-authentication-system.png',
        'tech' => ['PHP', 'MySQL', 'Sessions', 'Security'],
        'live_demo' => 'https://t.me/Mantiqlisavollar_uzbbot',
        'github' => 'https://github.com/AsilbekCodes/Mantiqli-savollar-bot',
        'featured' => false,
        'category' => 'Backend',
        'sort_order' => 10,
    ],
    [
        'name' => [
            'en' => 'Book Library',
            'uz' => 'Book Library',
            'ru' => 'Book Library',
            'tj' => 'Book Library',
        ],
        'description' => [
            'en' => 'A digital book library platform inspired by Open Library, a project of the Internet Archive. It lets users search, browse and explore books through a simple, well-organized web interface.',
            'uz' => 'Internet Archive tashkilotining Open Library loyihasidan ilhomlangan raqamli kitoblar kutubxonasi. Foydalanuvchilarga kitoblarni qidirish, ko\'rib chiqish va oddiy hamda tartibli veb-interfeys orqali o\'rganish imkonini beradi.',
            'ru' => 'Платформа цифровой библиотеки, вдохновлённая проектом Open Library организации Internet Archive. Позволяет искать, просматривать и изучать книги через простой и удобный веб-интерфейс.',
            'tj' => 'Платформаи китобхонаи рақамӣ, ки аз лоиҳаи Open Library-и ташкилоти Internet Archive илҳом гирифтааст. Он ба корбарон имкон медиҳад, ки китобҳоро тавассути интерфейси веби сода ва мураттаб ҷустуҷӯ кунанд, аз назар гузаронанд ва омӯзанд.',
        ],
        'image' => '/media/projects/book.png',
        'tech' => ['PHP', 'Laravel', 'MySQL', 'Bootstrap'],
        'live_demo' => 'https://openlibrary.org/',
        'github' => 'https://github.com/AsilbekCodes/book_library',
        'featured' => false,
        'category' => 'Full-Stack',
        'sort_order' => 11,
    ],
    [
        'name' => [
            'en' => 'MaqolachiX [BOT]',
            'uz' => 'MaqolachiX [BOT]',
            'ru' => 'MaqolachiX [BOT]',
            'tj' => 'MaqolachiX [BOT]',
        ],
        'description' => [
            'en' => 'A note-taking Telegram bot built with PHP. It automatically turns the text sent by the user into a nicely formatted A4 sheet, making it easier for pupils and students to prepare study notes.',
            'uz' => 'PHP asosida ishlab chiqilgan konspekt yozuvchi Telegram bot. Foydalanuvchi yuborgan matnni avtomatik ravishda chiroyli formatlangan varaq (A4 format) ko\'rinishiga aylantirib beradi, o\'quvchi va talabalar uchun konspekt tayyorlashni osonlashtiradi.',
            'ru' => 'Telegram-бот для составления конспектов, разработанный на PHP. Автоматически превращает отправленный пользователем текст в красиво оформленный лист формата A4, облегчая школьникам и студентам подготовку конспектов.',
            'tj' => 'Боти Telegram барои навиштани конспект, ки бо PHP сохта шудааст. Он матни аз ҷониби корбар фиристодашударо худкор ба варақаи зебо ороишёфта (формати A4) табдил медиҳад ва тайёр кардани конспектро барои хонандагон ва донишҷӯён осон мекунад.',
        ],
        'image' => '/media/projects/php-click-payment.png',
        'tech' => ['PHP', 'MySQL', 'Click API', 'Payment Integration'],
        'live_demo' => 'https://t.me/MaqolachiXBot',
        'github' => 'https://github.com/AsilbekCodes/php-click-payment',
        'featured' => false,
        'category' => 'Backend',
        'sort_order' => 12,
    ],
    [
        'name' => [
            'en' => 'PremiumHub Premium Bot',
            'uz' => 'PremiumHub Premium Bot',
            'ru' => 'PremiumHub Premium Bot',
            'tj' => 'PremiumHub Premium Bot',
        ],
        'description' => [
            'en' => 'A Telegram Stars/Premium purchasing bot built with Python and MySQL. The Click and Fragment payment systems are integrated, $10,000+ in transactions is processed per month, and user engagement is boosted through Top Rating, a personal account and a referral program.',
            'uz' => 'Python va MySQL yordamida ishlab chiqilgan Telegram Stars/Premium sotib olish boti. Click va Fragment to\'lov tizimlari integratsiya qilingan, oyiga $10,000+ tranzaksiya qayta ishlanadi, Top Rating, shaxsiy kabinet va referal dasturi orqali foydalanuvchi faolligi oshirilgan.',
            'ru' => 'Бот для покупки Telegram Stars/Premium, разработанный на Python и MySQL. Интегрированы платёжные системы Click и Fragment, ежемесячно обрабатывается более $10,000 в транзакциях, а вовлечённость пользователей повышена за счёт рейтинга Top, личного кабинета и реферальной программы.',
            'tj' => 'Боти харидани Telegram Stars/Premium, ки бо Python ва MySQL сохта шудааст. Низомҳои пардохти Click ва Fragment ворид карда шудаанд, дар як моҳ зиёда аз $10,000 муомилот коркард мешавад ва фаъолияти корбарон тавассути Top Rating, кабинети шахсӣ ва барномаи реферал афзоиш дода шудааст.',
        ],
        'image' => '/media/projects/php-user-role-manager.png',
        'tech' => ['Python', 'Django', 'Node.js'],
        'live_demo' => 'https://t.me/HubPremiyumBot',
        'github' => null,
        'featured' => false,
        'category' => 'Backend',
        'sort_order' => 13,
    ],
    [
        'name' => [
            'en' => 'JavaScript Test Platform',
            'uz' => 'JavaScript Test Platform',
            'ru' => 'JavaScript Test Platform',
            'tj' => 'JavaScript Test Platform',
        ],
        'description' => [
            'en' => 'An interactive test platform built with JavaScript. It features dynamic questions for testing knowledge of HTML, CSS and JavaScript, SweetAlert2 notifications and a real-time timer.',
            'uz' => 'JavaScript yordamida yaratilgan interaktiv test platformasi. Unda HTML, CSS va JavaScript bo\'yicha bilimlarni tekshirish uchun dinamik savollar, SweetAlert2 bildirishnomalari va real vaqt taymeri mavjud.',
            'ru' => 'Интерактивная платформа тестирования, созданная на JavaScript. В ней есть динамические вопросы для проверки знаний по HTML, CSS и JavaScript, уведомления SweetAlert2 и таймер в реальном времени.',
            'tj' => 'Платформаи интерактивии тестӣ, ки бо JavaScript сохта шудааст. Дар он саволҳои динамикӣ барои санҷиши донишҳо оид ба HTML, CSS ва JavaScript, огоҳиномаҳои SweetAlert2 ва таймери вақти воқеӣ мавҷуд аст.',
        ],
        'image' => '/media/projects/javascript-test-platform.png',
        'tech' => ['JavaScript', 'AJAX', 'JSON', 'SweetAlert2', 'Bootstrap'],
        'live_demo' => null,
        'github' => 'https://github.com/AsilbekCodes/javascript-test-platform',
        'featured' => false,
        'category' => 'Frontend',
        'sort_order' => 14,
    ],
    [
        'name' => [
            'en' => 'JavaScript Dynamic Slider',
            'uz' => 'JavaScript Dynamic Slider',
            'ru' => 'JavaScript Dynamic Slider',
            'tj' => 'JavaScript Dynamic Slider',
        ],
        'description' => [
            'en' => 'A responsive image slider built with HTML, CSS and JavaScript. It features smooth animations, navigation buttons and an auto-play function.',
            'uz' => 'HTML, CSS va JavaScript yordamida yaratilgan responsiv rasm slayderi. Unda silliq animatsiyalar, navigatsiya tugmalari va avtomatik aylanish funksiyasi mavjud.',
            'ru' => 'Адаптивный слайдер изображений, созданный на HTML, CSS и JavaScript. Включает плавные анимации, кнопки навигации и функцию автопрокрутки.',
            'tj' => 'Слайдери аксҳои мутобиқшаванда, ки бо HTML, CSS ва JavaScript сохта шудааст. Он дорои аниматсияҳои ҳамвор, тугмаҳои навигатсия ва функсияи гардиши худкор мебошад.',
        ],
        'image' => '/media/projects/javascript-dynamic-slider.png',
        'tech' => ['JavaScript', 'HTML', 'CSS', 'Responsive Design'],
        'live_demo' => null,
        'github' => 'https://github.com/AsilbekCodes/javascript-dynamic-slider',
        'featured' => false,
        'category' => 'Frontend',
        'sort_order' => 15,
    ],
    [
        'name' => [
            'en' => 'JavaScript Text Encryption',
            'uz' => 'JavaScript Text Encryption',
            'ru' => 'JavaScript Text Encryption',
            'tj' => 'JavaScript Text Encryption',
        ],
        'description' => [
            'en' => 'A simple web application that lets users encrypt and decrypt text using AES encryption. Built with HTML, CSS and JavaScript.',
            'uz' => 'AES shifrlash yordamida matnni shifrlash va qayta ochish imkonini beruvchi oddiy veb-ilova. HTML, CSS va JavaScript yordamida yaratilgan.',
            'ru' => 'Простое веб-приложение для шифрования и расшифровки текста с использованием AES. Создано на HTML, CSS и JavaScript.',
            'tj' => 'Барномаи оддии веб барои рамзгузорӣ ва рамзкушоии матн бо истифода аз AES. Бо HTML, CSS ва JavaScript сохта шудааст.',
        ],
        'image' => '/media/projects/javascript-text-encryption.png',
        'tech' => ['JavaScript', 'AES Encryption', 'HTML', 'CSS'],
        'live_demo' => null,
        'github' => 'https://github.com/AsilbekCodes/javascript-text-encryption-main',
        'featured' => false,
        'category' => 'Frontend',
        'sort_order' => 16,
    ],
    [
        'name' => [
            'en' => 'Kuy Navo Bot | Shazam',
            'uz' => 'Kuy Navo Bot | Shazam',
            'ru' => 'Kuy Navo Bot | Shazam',
            'tj' => 'Kuy Navo Bot | Shazam',
        ],
        'description' => [
            'en' => 'A multi-function Telegram bot that downloads video/audio from social networks. It can download watermark-free content from Instagram, TikTok, YouTube, Snapchat, Likee, Pinterest and Threads, and identify song names via Shazam. The bot also works in groups.',
            'uz' => 'Ijtimoiy tarmoqlardan video/audio yuklab oluvchi ko\'p funksiyali Telegram bot. Instagram, TikTok, YouTube, Snapchat, Likee, Pinterest va Threads\'dan suv belgisiz kontent yuklab olish, shuningdek Shazam orqali qo\'shiq nomini aniqlash funksiyasi mavjud. Bot guruhlarda ham ishlay oladi.',
            'ru' => 'Многофункциональный Telegram-бот для скачивания видео и аудио из социальных сетей. Умеет скачивать контент без водяных знаков из Instagram, TikTok, YouTube, Snapchat, Likee, Pinterest и Threads, а также определять название песни через Shazam. Бот работает и в группах.',
            'tj' => 'Боти бисёрфунксияи Telegram барои зеркашии видео ва аудио аз шабакаҳои иҷтимоӣ. Он метавонад мундариҷаро бе нишони обӣ аз Instagram, TikTok, YouTube, Snapchat, Likee, Pinterest ва Threads зеркашӣ кунад ва номи сурудро тавассути Shazam муайян намояд. Бот дар гурӯҳҳо ҳам кор мекунад.',
        ],
        'image' => '/media/projects/php-auth-master.png',
        'tech' => ['Python', 'Django', 'Node.js', 'MySQL', 'Security'],
        'live_demo' => 'https://t.me/kuynavobot',
        'github' => null,
        'featured' => false,
        'category' => 'Full-Stack',
        'sort_order' => 17,
    ],
    [
        'name' => [
            'en' => 'Guruh Nazoratchi',
            'uz' => 'Guruh Nazoratchi',
            'ru' => 'Guruh Nazoratchi',
            'tj' => 'Guruh Nazoratchi',
        ],
        'description' => [
            'en' => 'A Telegram group management bot built with PHP. It includes admin assignment, a warning/ban system, message deletion and pinning, member statistics and a leaderboard, and mandatory channel membership.',
            'uz' => 'PHP asosida ishlab chiqilgan Telegram guruh boshqaruv boti. Admin tayinlash, ogohlantirish/ban tizimi, xabarlarni o\'chirish va pin qilish, a\'zolar statistikasi va reyting jadvali, kanalga majburiy a\'zolik kabi funksiyalarni o\'z ichiga oladi.',
            'ru' => 'Telegram-бот для управления группами, разработанный на PHP. Включает назначение администраторов, систему предупреждений и банов, удаление и закрепление сообщений, статистику участников и рейтинг, а также обязательную подписку на канал.',
            'tj' => 'Боти идоракунии гурӯҳи Telegram, ки бо PHP сохта шудааст. Он таъини админ, низоми огоҳӣ ва бан, нест кардан ва пин кардани паёмҳо, омори аъзоён ва ҷадвали рейтинг, инчунин аъзогии ҳатмии каналро дар бар мегирад.',
        ],
        'image' => '/media/projects/php-english-platform.png',
        'tech' => ['Python', 'PDF Export', 'Education System'],
        'live_demo' => 'https://t.me/GuruhNazorati_Bot',
        'github' => null,
        'featured' => false,
        'category' => 'Full-Stack',
        'sort_order' => 18,
    ],
    [
        'name' => [
            'en' => 'SamSU Artificial Intelligence Laboratory Website',
            'uz' => 'SamDU Sun\'iy Intellekt Laboratoriyasi Sayti',
            'ru' => 'Сайт лаборатории искусственного интеллекта СамГУ',
            'tj' => 'Сомонаи лабораторияи зеҳни сунъии СамДУ',
        ],
        'description' => [
            'en' => 'An official website built with Laravel for the Artificial Intelligence Laboratory of Samarkand State University. It provides information about research, projects, news and laboratory members.',
            'uz' => 'Samarqand davlat universiteti Sun\'iy intellekt laboratoriyasi uchun Laravel asosida yaratilgan rasmiy veb-sayt. Unda tadqiqotlar, loyihalar, yangiliklar va laboratoriya a\'zolari haqida ma\'lumotlar mavjud.',
            'ru' => 'Официальный веб-сайт лаборатории искусственного интеллекта Самаркандского государственного университета, созданный на Laravel. Содержит информацию об исследованиях, проектах, новостях и участниках лаборатории.',
            'tj' => 'Сомонаи расмии лабораторияи зеҳни сунъии Донишгоҳи давлатии Самарқанд, ки бо Laravel сохта шудааст. Дар он маълумот дар бораи тадқиқотҳо, лоиҳаҳо, хабарҳо ва аъзои лаборатория мавҷуд аст.',
        ],
        'image' => '/media/projects/samsu-ai-lab.png',
        'tech' => ['Laravel', 'PHP', 'Blade', 'Vite', 'MySQL'],
        'live_demo' => 'https://ai-lab.sampc.uz/',
        'github' => null,
        'featured' => false,
        'category' => 'Full-Stack',
        'sort_order' => 19,
    ],
    [
        'name' => [
            'en' => 'Asilbek Personal Website',
            'uz' => 'Asilbek Shaxsiy Veb-sayti',
            'ru' => 'Персональный сайт Асилбека',
            'tj' => 'Сомонаи шахсии Асилбек',
        ],
        'description' => [
            'en' => 'A personal portfolio website created to showcase my skills, experience and projects as a Full-Stack Developer.',
            'uz' => 'Full-Stack Developer sifatidagi ko\'nikmalarim, tajribam va loyihalarimni ko\'rsatish uchun yaratilgan shaxsiy portfolio veb-sayt.',
            'ru' => 'Персональный сайт-портфолио, созданный для демонстрации моих навыков, опыта и проектов как Full-Stack разработчика.',
            'tj' => 'Сомонаи шахсии портфолио, ки барои нишон додани малакаҳо, таҷриба ва лоиҳаҳои ман ҳамчун Full-Stack developer сохта шудааст.',
        ],
        'image' => '/media/projects/asilbek-portfolio.png',
        'tech' => ['React', 'TypeScript', 'Vite', 'TailwindCSS'],
        'live_demo' => 'https://asilbekdev.uz',
        'github' => 'https://github.com/AsilbekCodes/Portfolio',
        'featured' => false,
        'category' => 'Frontend',
        'sort_order' => 20,
    ],
    [
        'name' => [
            'en' => 'JavaScript XO Game',
            'uz' => 'JavaScript XO O\'yini',
            'ru' => 'Игра «Крестики-нолики» на JavaScript',
            'tj' => 'Бозии XO бо JavaScript',
        ],
        'description' => [
            'en' => 'A classic XO (Tic-Tac-Toe) game built with HTML, CSS and JavaScript. It features winner detection, draw display and a game restart function.',
            'uz' => 'HTML, CSS va JavaScript yordamida yaratilgan klassik XO (Tic-Tac-Toe) o\'yini. Unda g\'olibni aniqlash, durangni ko\'rsatish va o\'yinni qayta boshlash funksiyalari mavjud.',
            'ru' => 'Классическая игра «Крестики-нолики» (XO), созданная на HTML, CSS и JavaScript. Есть определение победителя, отображение ничьей и возможность перезапуска игры.',
            'tj' => 'Бозии классикии XO (Tic-Tac-Toe), ки бо HTML, CSS ва JavaScript сохта шудааст. Дар он муайян кардани ғолиб, нишон додани баробарӣ ва аз нав оғоз кардани бозӣ мавҷуд аст.',
        ],
        'image' => '/media/projects/javascript-xo-game.png',
        'tech' => ['JavaScript', 'HTML', 'CSS'],
        'live_demo' => null,
        'github' => 'https://github.com/AsilbekCodes/javascript-xo-game',
        'featured' => false,
        'category' => 'Frontend',
        'sort_order' => 21,
    ],
    [
        'name' => [
            'en' => 'JavaScript Calculator Website',
            'uz' => 'JavaScript Kalkulyator Veb-sayti',
            'ru' => 'Веб-калькулятор на JavaScript',
            'tj' => 'Калкулятори веб бо JavaScript',
        ],
        'description' => [
            'en' => 'A responsive calculator web application built with HTML, CSS and JavaScript. It features basic arithmetic operations and a convenient user interface.',
            'uz' => 'HTML, CSS va JavaScript yordamida yaratilgan responsiv kalkulyator veb-ilovasi. Unda asosiy arifmetik amallar va qulay foydalanuvchi interfeysi mavjud.',
            'ru' => 'Адаптивное веб-приложение калькулятора, созданное на HTML, CSS и JavaScript. Поддерживает основные арифметические операции и имеет удобный пользовательский интерфейс.',
            'tj' => 'Барномаи веби калкулятори мутобиқшаванда, ки бо HTML, CSS ва JavaScript сохта шудааст. Дар он амалиётҳои асосии арифметикӣ ва интерфейси қулайи корбар мавҷуд аст.',
        ],
        'image' => '/media/projects/javascript-calculator-website.png',
        'tech' => ['JavaScript', 'HTML', 'CSS'],
        'live_demo' => null,
        'github' => 'https://github.com/AsilbekCodes/javascript-calculator-website',
        'featured' => false,
        'category' => 'Frontend',
        'sort_order' => 22,
    ],
    [
        'name' => [
            'en' => 'milli.ai',
            'uz' => 'milli.ai',
            'ru' => 'milli.ai',
            'tj' => 'milli.ai',
        ],
        'description' => [
            'en' => 'An AI-based website built with HTML, CSS, JavaScript and Bootstrap that works through an AI API. Its multilingual system, built with vanilla JavaScript, switches the site language dynamically via JSON files and stores the user\'s chosen language in localStorage.',
            'uz' => 'Sun\'iy intellekt asosidagi veb-sayt. HTML, CSS, JavaScript va Bootstrap bilan yaratilgan, AI API orqali ishlaydi. Vanilla JavaScript yordamida qurilgan ko\'p tilli tizim JSON fayllar orqali sayt tilini dinamik almashtiradi va foydalanuvchi tanlagan tilni localStorage\'da saqlaydi.',
            'ru' => 'Веб-сайт на основе искусственного интеллекта, созданный на HTML, CSS, JavaScript и Bootstrap и работающий через AI API. Мультиязычная система на чистом JavaScript динамически переключает язык сайта через JSON-файлы и сохраняет выбранный пользователем язык в localStorage.',
            'tj' => 'Сомонаи бар асоси зеҳни сунъӣ, ки бо HTML, CSS, JavaScript ва Bootstrap сохта шудааст ва тавассути AI API кор мекунад. Низоми бисёрзабона, ки бо Vanilla JavaScript сохта шудааст, забони сомонаро тавассути файлҳои JSON ба таври динамикӣ иваз мекунад ва забони интихобкардаи корбарро дар localStorage нигоҳ медорад.',
        ],
        'image' => '/media/projects/javascript-language-switcher.png',
        'tech' => ['HTML', 'CSS', 'JavaScript', 'Bootstrap'],
        'live_demo' => null,
        'github' => 'https://github.com/AsilbekCodes/milliai',
        'featured' => false,
        'category' => 'Frontend',
        'sort_order' => 23,
    ],
    [
        'name' => [
            'en' => 'Samarkand Travel Guide',
            'uz' => 'Samarqand Sayohat Qo\'llanmasi',
            'ru' => 'Путеводитель по Самарканду',
            'tj' => 'Роҳнамои саёҳат ба Самарқанд',
        ],
        'description' => [
            'en' => 'A tourism website providing detailed information about the city of Samarkand. It includes information about historical monuments, museums, travel destinations and the city\'s history.',
            'uz' => 'Samarqand shahri haqida batafsil ma\'lumot beruvchi turistik veb-sayt. Unda tarixiy obidalar, muzeylar, sayohat joylari va shahar tarixi haqida ma\'lumotlar mavjud.',
            'ru' => 'Туристический сайт с подробной информацией о городе Самарканд. Содержит сведения об исторических памятниках, музеях, местах для путешествий и истории города.',
            'tj' => 'Сомонаи туристӣ, ки дар бораи шаҳри Самарқанд маълумоти муфассал пешниҳод мекунад. Дар он маълумот дар бораи ёдгориҳои таърихӣ, музейҳо, ҷойҳои саёҳат ва таърихи шаҳр мавҷуд аст.',
        ],
        'image' => '/media/projects/samarkand-travel-guide.png',
        'tech' => ['HTML', 'CSS', 'JavaScript', 'Responsive Design'],
        'live_demo' => null,
        'github' => 'https://github.com/AsilbekCodes/samarkand-travel-website',
        'featured' => false,
        'category' => 'Frontend',
        'sort_order' => 24,
    ],
    [
        'name' => [
            'en' => 'JavaScript Digital Clock',
            'uz' => 'JavaScript Raqamli Soat',
            'ru' => 'Цифровые часы на JavaScript',
            'tj' => 'Соати рақамӣ бо JavaScript',
        ],
        'description' => [
            'en' => 'A simple digital clock built with HTML, CSS and JavaScript. It shows the current time and updates automatically every second.',
            'uz' => 'HTML, CSS va JavaScript yordamida yaratilgan oddiy raqamli soat. U real vaqtni ko\'rsatadi va har soniyada avtomatik yangilanadi.',
            'ru' => 'Простые цифровые часы, созданные на HTML, CSS и JavaScript. Показывают текущее время и автоматически обновляются каждую секунду.',
            'tj' => 'Соати оддии рақамӣ, ки бо HTML, CSS ва JavaScript сохта шудааст. Он вақти ҷориро нишон медиҳад ва ҳар сония худкор нав мешавад.',
        ],
        'image' => '/media/projects/javascript-digital-clock.png',
        'tech' => ['JavaScript', 'HTML', 'CSS'],
        'live_demo' => null,
        'github' => 'https://github.com/AsilbekCodes/javascript-digital-clock',
        'featured' => false,
        'category' => 'Frontend',
        'sort_order' => 25,
    ],
    [
        'name' => [
            'en' => 'JavaScript Countdown Timer',
            'uz' => 'JavaScript Taymer',
            'ru' => 'Таймер обратного отсчёта на JavaScript',
            'tj' => 'Таймери ҳисобкунии баръакс бо JavaScript',
        ],
        'description' => [
            'en' => 'A timer built with HTML, CSS and JavaScript. It features a countdown function, play/pause controls and an alert when time runs out.',
            'uz' => 'HTML, CSS va JavaScript yordamida yaratilgan taymer. Unda teskari sanash (countdown) funksiyasi, play/pause boshqaruvi va vaqt tugaganda ogohlantirish mavjud.',
            'ru' => 'Таймер, созданный на HTML, CSS и JavaScript. Есть функция обратного отсчёта, управление паузой и запуском и уведомление по окончании времени.',
            'tj' => 'Таймер, ки бо HTML, CSS ва JavaScript сохта шудааст. Дар он функсияи ҳисобкунии баръакс, идоракунии play/pause ва огоҳӣ ҳангоми анҷоми вақт мавҷуд аст.',
        ],
        'image' => '/media/projects/javascript-timer.png',
        'tech' => ['JavaScript', 'HTML', 'CSS'],
        'live_demo' => null,
        'github' => 'https://github.com/AsilbekCodes/javascript-countdown-timer',
        'featured' => false,
        'category' => 'Frontend',
        'sort_order' => 26,
    ],
    [
        'name' => [
            'en' => 'HTML CSS Login Form',
            'uz' => 'HTML CSS Login Forma',
            'ru' => 'Форма входа HTML CSS',
            'tj' => 'Формаи воридшавӣ HTML CSS',
        ],
        'description' => [
            'en' => 'A modern login form built with HTML and CSS. It features a responsive design, animations and clean UI elements.',
            'uz' => 'HTML va CSS yordamida yaratilgan zamonaviy login forma. Unda responsiv dizayn, animatsiyalar va toza UI elementlari mavjud.',
            'ru' => 'Современная форма входа, созданная на HTML и CSS. Имеет адаптивный дизайн, анимации и аккуратные элементы интерфейса.',
            'tj' => 'Формаи замонавии воридшавӣ, ки бо HTML ва CSS сохта шудааст. Дар он тарҳи мутобиқшаванда, аниматсияҳо ва унсурҳои тозаи UI мавҷуданд.',
        ],
        'image' => '/media/projects/html-css-login-form.png',
        'tech' => ['HTML', 'CSS', 'Responsive Design', 'UI Animation'],
        'live_demo' => null,
        'github' => 'https://github.com/AsilbekCodes/html-css-form',
        'featured' => false,
        'category' => 'Frontend',
        'sort_order' => 27,
    ],
    [
        'name' => [
            'en' => 'Avto Sug\'urta Online | Onlayn',
            'uz' => 'Avto Sug\'urta Online | Onlayn',
            'ru' => 'Avto Sug\'urta Online | Onlayn',
            'tj' => 'Avto Sug\'urta Online | Onlayn',
        ],
        'description' => [
            'en' => 'A Telegram bot for car and insurance services built with PHP. It offers OSAGO/KASKO insurance, taxi licenses, powers of attorney and other vehicle document services. Prices can be viewed and an operator contacted through the bot, which works 24/7.',
            'uz' => 'PHP asosida ishlab chiqilgan avtomobil va sug\'urta xizmatlari uchun Telegram bot. OSAGO/KASKO sug\'urta, taksi litsenziyasi, ishonchnoma va boshqa avtomobil hujjatlarini rasmiylashtirish xizmatlarini taqdim etadi. Bot orqali narxlarni ko\'rish va operator bilan bog\'lanish imkoniyati mavjud, 24/7 rejimida ishlaydi.',
            'ru' => 'Telegram-бот для автомобильных и страховых услуг, разработанный на PHP. Предоставляет услуги по оформлению страхования ОСАГО/КАСКО, лицензий такси, доверенностей и других автомобильных документов. Через бота можно узнать цены и связаться с оператором; работает в режиме 24/7.',
            'tj' => 'Боти Telegram барои хизматрасониҳои автомобилӣ ва суғурта, ки бо PHP сохта шудааст. Он хизматҳои расмикунии суғуртаи ОСАГО/КАСКО, иҷозатномаи таксӣ, ваколатнома ва дигар ҳуҷҷатҳои автомобилиро пешниҳод мекунад. Тавассути бот нархҳоро дидан ва бо оператор тамос гирифтан мумкин аст; дар режими 24/7 кор мекунад.',
        ],
        'image' => '/media/projects/php-send-mail.png',
        'tech' => ['PHP', 'MySQL'],
        'live_demo' => 'https://t.me/Sugurta_olish_bot',
        'github' => null,
        'featured' => false,
        'category' => 'Backend',
        'sort_order' => 28,
    ],
    [
        'name' => [
            'en' => 'MegaDrive PDF Bot',
            'uz' => 'MegaDrive PDF Bot',
            'ru' => 'MegaDrive PDF Bot',
            'tj' => 'MegaDrive PDF Bot',
        ],
        'description' => [
            'en' => 'A Telegram bot that converts photos into PDF files. It has a built-in MegaDrive file manager for storing and managing uploaded files. Commands let you switch conveniently between upload and conversion modes.',
            'uz' => 'Rasmlarni PDF faylga aylantiruvchi Telegram bot. Yuklangan fayllarni saqlash va boshqarish uchun o\'rnatilgan MegaDrive fayl menejeriga ega. Buyruqlar orqali yuklash va konvertatsiya rejimlari o\'rtasida qulay almashtirish imkonini beradi.',
            'ru' => 'Telegram-бот для преобразования фотографий в PDF-файлы. Имеет встроенный файловый менеджер MegaDrive для хранения загруженных файлов и управления ими. С помощью команд можно удобно переключаться между режимами загрузки и конвертации.',
            'tj' => 'Боти Telegram барои табдил додани аксҳо ба файли PDF. Он дорои менеҷери файлии дарунсохти MegaDrive барои нигоҳдорӣ ва идоракунии файлҳои боркардашуда мебошад. Тавассути фармонҳо байни ҳолатҳои боркунӣ ва табдилдиҳӣ ба таври қулай иваз кардан мумкин аст.',
        ],
        'image' => '/media/projects/megadrive-pdf-bot.png',
        'tech' => ['Python'],
        'live_demo' => 'https://t.me/MegaDrivePdf_bot',
        'github' => null,
        'featured' => false,
        'category' => 'Backend',
        'sort_order' => 29,
    ],
    [
        'name' => [
            'en' => 'PHP Ninja Multiplayer Game',
            'uz' => 'PHP Ninja Multiplayer O\'yini',
            'ru' => 'Мультиплеерная игра Ninja на PHP',
            'tj' => 'Бозии multiplayer Ninja бо PHP',
        ],
        'description' => [
            'en' => 'A multiplayer browser game built with PHP. Users can create a special game link, invite others and play at the same time. The system includes login, a leaderboard and game management.',
            'uz' => 'PHP yordamida yaratilgan multiplayer brauzer o\'yini. Foydalanuvchilar maxsus o\'yin linkini yaratib, boshqalarni taklif qilishi va bir vaqtning o\'zida o\'ynashi mumkin. Tizimda login, leaderboard va o\'yin boshqaruvi mavjud.',
            'ru' => 'Мультиплеерная браузерная игра на PHP. Пользователи могут создать специальную ссылку на игру, пригласить других и играть одновременно. В системе есть вход в аккаунт, таблица лидеров и управление игрой.',
            'tj' => 'Бозии multiplayer дар браузер, ки бо PHP сохта шудааст. Корбарон метавонанд линки махсуси бозӣ эҷод карда, дигаронро даъват намоянд ва дар як вақт бозӣ кунанд. Дар низом воридшавӣ (login), ҷадвали пешсафон ва идоракунии бозӣ мавҷуд аст.',
        ],
        'image' => '/media/projects/php-ninja-game.png',
        'tech' => ['PHP', 'JavaScript', 'MySQL', 'Multiplayer', 'Game Logic'],
        'live_demo' => null,
        'github' => 'https://github.com/AsilbekCodes/php-ninja-game',
        'featured' => false,
        'category' => 'Full-Stack',
        'sort_order' => 30,
    ],
    [
        'name' => [
            'en' => 'Group Help Bot',
            'uz' => 'Group Help Bot',
            'ru' => 'Group Help Bot',
            'tj' => 'Group Help Bot',
        ],
        'description' => [
            'en' => 'An advanced Telegram bot designed for managing your groups easily and securely. Once the bot is added to a group as an admin, admins get a wide range of moderation and management commands to keep the group organized and safe.',
            'uz' => 'Guruhlaringizni oson va xavfsiz boshqarish uchun mo\'ljallangan ilg\'or Telegram bot. Botni guruhga admin sifatida qo\'shgach, adminlarga guruhni tartibli va xavfsiz saqlash uchun keng qamrovli moderatsiya va boshqaruv buyruqlari taqdim etiladi.',
            'ru' => 'Продвинутый Telegram-бот для лёгкого и безопасного управления группами. После добавления бота в группу в качестве администратора админам становится доступен широкий набор команд модерации и управления, помогающих поддерживать в группе порядок и безопасность.',
            'tj' => 'Боти пешрафтаи Telegram барои идоракунии осон ва бехатари гурӯҳҳои шумо. Пас аз ба гурӯҳ ҳамчун админ илова кардани бот, ба админҳо маҷмӯи васеи фармонҳои модератсия ва идоракунӣ пешниҳод мешавад, ки барои нигоҳ доштани тартиб ва бехатарии гурӯҳ кумак мекунад.',
        ],
        'image' => '/media/projects/grouphelpbot.png',
        'tech' => ['Python'],
        'live_demo' => 'https://t.me/GHelpUzorgBot',
        'github' => null,
        'featured' => false,
        'category' => 'Backend',
        'sort_order' => 31,
    ],
    [
        'name' => [
            'en' => 'templates.uz',
            'uz' => 'templates.uz',
            'ru' => 'templates.uz',
            'tj' => 'templates.uz',
        ],
        'description' => [
            'en' => 'A SaaS platform for building professional websites with drag & drop tools, built with a Laravel backend and a React frontend.',
            'uz' => 'Laravel backend va React frontend yordamida drag & drop vositalari orqali professional saytlar yaratish uchun SaaS platformasi.',
            'ru' => 'SaaS-платформа для создания профессиональных сайтов с помощью инструментов drag & drop на базе backend Laravel и frontend React.',
            'tj' => 'Платформаи SaaS барои сохтани сомонаҳои касбӣ тавассути абзорҳои drag & drop, ки бо backend-и Laravel ва frontend-и React сохта шудааст.',
        ],
        'image' => '/media/projects/templatesuz.png',
        'tech' => ['Laravel', 'React', 'Vite', 'MySQL'],
        'live_demo' => 'https://templates.uz/',
        'github' => null,
        'featured' => false,
        'category' => 'Full-Stack',
        'sort_order' => 32,
    ],
    [
        'name' => [
            'en' => 'algor.uz',
            'uz' => 'algor.uz',
            'ru' => 'algor.uz',
            'tj' => 'algor.uz',
        ],
        'description' => [
            'en' => 'An online judge for students and olympiad contestants: write a solution in C++, Python or JavaScript and get the result on hidden tests within seconds. Includes topics, a leaderboard and profiles.',
            'uz' => 'O\'quvchilar va olimpiadachilar uchun onlayn judge: yechimni C++, Python yoki JavaScript\'da yozing va yashirin testlardagi natijani soniyalarda oling; mavzular, reyting va profillar bilan.',
            'ru' => 'Онлайн-judge для школьников и олимпиадников: напишите решение на C++, Python или JavaScript и получите результат на скрытых тестах за считаные секунды. Есть темы, рейтинг и профили.',
            'tj' => 'Онлайн-judge барои хонандагон ва иштирокчиёни олимпиадаҳо: ҳалро бо C++, Python ё JavaScript нависед ва натиҷаи тестҳои пинҳониро дар чанд сония гиред; бо мавзӯъҳо, рейтинг ва профилҳо.',
        ],
        'image' => '/media/projects/algor.webp',
        'tech' => ['Laravel', 'Judge0', 'CodeMirror', 'Tailwind CSS', 'MySQL'],
        'live_demo' => 'https://algor.uz/',
        'github' => null,
        'featured' => false,
        'category' => 'Full-Stack',
        'sort_order' => 33,
    ],
]);


$this->insert('highlights', ['text'], [
    [
        'icon' => 'Award',
        'text' => [
            'en' => 'Four or more years of hands-on programming experience',
            'uz' => 'To\'rt yoki undan ortiq yillik amaliy dasturlash tajribasi',
            'ru' => 'Четыре года и более практического опыта в программировании',
            'tj' => 'Чор сол ва зиёда таҷрибаи амалии барномасозӣ',
        ],
        'sort_order' => 0,
    ],
    [
        'icon' => 'Compass',
        'text' => [
            'en' => 'A purpose-driven, values-based approach',
            'uz' => 'Maqsad bilan yo\'naltirilgan va qadriyatlarga asoslangan yondashuv',
            'ru' => 'Целеустремлённый подход, основанный на ценностях',
            'tj' => 'Равише, ки ба мақсад нигаронида шуда ва ба арзишҳо асос ёфтааст',
        ],
        'sort_order' => 1,
    ],
    [
        'icon' => 'Lightbulb',
        'text' => [
            'en' => 'Turning complex ideas into clean, efficient code',
            'uz' => 'Murakkab g\'oyalarni toza va samarali kodga aylantirish',
            'ru' => 'Превращение сложных идей в чистый и эффективный код',
            'tj' => 'Табдили ғояҳои мураккаб ба коди тоза ва самаранок',
        ],
        'sort_order' => 2,
    ],
    [
        'icon' => 'HeartHandshake',
        'text' => [
            'en' => 'Mentoring with sincerity and growing through meaningful impact',
            'uz' => 'Samimiylik bilan mentorlik qilish va mazmunli ta\'sir orqali o\'sish',
            'ru' => 'Искреннее наставничество и рост благодаря значимому влиянию',
            'tj' => 'Менторинги самимона ва рушд тавассути таъсири пурмазмун',
        ],
        'sort_order' => 3,
    ],
    [
        'icon' => 'ShieldCheck',
        'text' => [
            'en' => 'Commitment to ethical principles and secure technology practices',
            'uz' => 'Axloqiy tamoyillarga va xavfsiz texnologik amaliyotlarga sodiqlik',
            'ru' => 'Приверженность этическим принципам и безопасным технологическим практикам',
            'tj' => 'Садоқат ба принсипҳои ахлоқӣ ва таҷрибаҳои бехатари технологӣ',
        ],
        'sort_order' => 4,
    ],
    [
        'icon' => 'Rocket',
        'text' => [
            'en' => 'Founder of asilmedia.org, a Software-as-a-Service (SaaS) platform',
            'uz' => 'asilmedia.org SaaS (Software-as-a-Service) platformasi asoschisi',
            'ru' => 'Основатель SaaS-платформы (Software-as-a-Service) asilmedia.org',
            'tj' => 'Муассиси платформаи SaaS (Software-as-a-Service) asilmedia.org',
        ],
        'sort_order' => 5,
    ],
]);

$this->insert('journeys', ['title', 'description'], [
    [
        'year' => '2022',
        'title' => [
            'en' => 'Started Learning Programming on Mohir Dev',
            'uz' => 'Dasturlashni Mohir Dev platformasida o\'rganishni boshladim',
            'ru' => 'Начал изучать программирование на платформе Mohir Dev',
            'tj' => 'Омӯзиши барномасозиро дар платформаи Mohir Dev оғоз кардам',
        ],
        'description' => [
            'en' => 'Began studying Software Engineering and, at the same time, started learning programming on the Mohir Dev platform',
            'uz' => 'Dasturiy injiniring yo\'nalishida o\'qishni boshladim, shu bilan birga Mohir Dev platformasida dasturlashni ham o\'rgana boshladim',
            'ru' => 'Начал обучение по направлению «Программная инженерия» и одновременно начал изучать программирование на платформе Mohir Dev',
            'tj' => 'Таҳсил дар самти муҳандисии нармафзорро оғоз кардам ва ҳамзамон омӯзиши барномасозиро дар платформаи Mohir Dev шурӯъ намудам',
        ],
        'sort_order' => 0,
    ],
    [
        'year' => '2022',
        'title' => [
            'en' => 'Frontend Foundations',
            'uz' => 'Frontend asoslari',
            'ru' => 'Основы Frontend',
            'tj' => 'Асосҳои Frontend',
        ],
        'description' => [
            'en' => 'Started learning HTML, CSS, JavaScript and React — my first step into the world of frontend',
            'uz' => 'HTML, CSS, JavaScript va Reactni o\'rganishni boshladim — bu mening frontend dunyosiga birinchi qadamim edi',
            'ru' => 'Начал изучать HTML, CSS, JavaScript и React — это был мой первый шаг в мир фронтенда',
            'tj' => 'Омӯзиши HTML, CSS, JavaScript ва React-ро оғоз кардам — ин аввалин қадами ман ба ҷаҳони frontend буд',
        ],
        'sort_order' => 1,
    ],
    [
        'year' => '2023',
        'title' => [
            'en' => 'Growth in Backend',
            'uz' => 'Backend rivojlanishi',
            'ru' => 'Развитие в Backend',
            'tj' => 'Рушд дар Backend',
        ],
        'description' => [
            'en' => 'Dived deep into Laravel and REST APIs and fell in love with backend development',
            'uz' => 'Laravel va REST API-larni chuqur o\'rgandim va backend dasturlashga mehrim tushdi',
            'ru' => 'Глубоко изучил Laravel и REST API и влюбился в backend-разработку',
            'tj' => 'Laravel ва REST API-ро амиқ омӯхтам ва ба барномасозии backend дил бастам',
        ],
        'sort_order' => 2,
    ],
    [
        'year' => '2023',
        'title' => [
            'en' => 'First Real Freelance Project',
            'uz' => 'Birinchi haqiqiy frilans loyiha',
            'ru' => 'Первый реальный фриланс-проект',
            'tj' => 'Аввалин лоиҳаи воқеии фриланс',
        ],
        'description' => [
            'en' => 'Completed a full-stack project for a client from scratch using Laravel and React',
            'uz' => 'Laravel va React yordamida mijoz uchun to\'liq (full-stack) loyihani noldan yakunladim',
            'ru' => 'С нуля выполнил full-stack проект для клиента с использованием Laravel и React',
            'tj' => 'Бо истифода аз Laravel ва React лоиҳаи пурраи full-stack-ро барои муштарӣ аз сифр анҷом додам',
        ],
        'sort_order' => 3,
    ],
    [
        'year' => '2024',
        'title' => [
            'en' => 'Contribution to Open Source',
            'uz' => 'Open Source\'ga hissa',
            'ru' => 'Вклад в Open Source',
            'tj' => 'Саҳм дар Open Source',
        ],
        'description' => [
            'en' => 'Published several public repositories and joined global developer communities',
            'uz' => 'Bir nechta ochiq repozitoriylarni nashr qildim va global dasturchilar hamjamiyatlariga qo\'shildim',
            'ru' => 'Опубликовал несколько открытых репозиториев и присоединился к мировым сообществам разработчиков',
            'tj' => 'Якчанд репозиторийҳои оммавиро нашр кардам ва ба ҷомеаҳои глобалии барномасозон пайвастам',
        ],
        'sort_order' => 4,
    ],
    [
        'year' => '2024',
        'title' => [
            'en' => 'Portfolio and Personal Website',
            'uz' => 'Portfolio va shaxsiy veb-sayt',
            'ru' => 'Портфолио и личный сайт',
            'tj' => 'Портфолио ва сомонаи шахсӣ',
        ],
        'description' => [
            'en' => 'Launched asilbekdev.uz to showcase my work, applications and skills',
            'uz' => 'O\'z ishlarim, ilovalarim va ko\'nikmalarimni namoyish etish uchun asilbekdev.uz saytini ishga tushirdim',
            'ru' => 'Запустил сайт asilbekdev.uz для демонстрации своих работ, приложений и навыков',
            'tj' => 'Барои намоиш додани корҳо, барномаҳо ва малакаҳои худ сомонаи asilbekdev.uz-ро ба кор андохтам',
        ],
        'sort_order' => 5,
    ],
    [
        'year' => '2025',
        'title' => [
            'en' => 'Junior Web Developer',
            'uz' => 'Junior Web Dasturchi',
            'ru' => 'Junior веб-разработчик',
            'tj' => 'Junior веб-барномасоз',
        ],
        'description' => [
            'en' => 'Worked on various web projects, mainly focusing on the frontend',
            'uz' => 'Turli veb-loyihalarda ishladim, asosan frontend qismiga e\'tibor qaratdim',
            'ru' => 'Работал над различными веб-проектами, в основном уделял внимание фронтенду',
            'tj' => 'Дар лоиҳаҳои гуногуни веб кор кардам ва асосан ба қисми frontend диққат додам',
        ],
        'sort_order' => 6,
    ],
    [
        'year' => '2025',
        'title' => [
            'en' => '1000+ Public Projects',
            'uz' => '1000+ Ochiq loyihalar',
            'ru' => '1000+ Открытых проектов',
            'tj' => '1000+ лоиҳаҳои оммавӣ',
        ],
        'description' => [
            'en' => 'Published over 50 open-source/public projects on GitHub and other platforms',
            'uz' => 'GitHub va boshqa platformalarda 50 dan ortiq ochiq manbali/ommaviy loyihalarni e\'lon qildim',
            'ru' => 'Опубликовал более 50 открытых (open-source) проектов на GitHub и других платформах',
            'tj' => 'Дар GitHub ва дигар платформаҳо зиёда аз 50 лоиҳаи оммавӣ (open-source) нашр кардам',
        ],
        'sort_order' => 7,
    ],
    [
        'year' => '2025',
        'title' => [
            'en' => 'Educational Content Creator',
            'uz' => 'Ta\'limiy kontent yaratuvchisi',
            'ru' => 'Создатель образовательного контента',
            'tj' => 'Эҷодкори мундариҷаи таълимӣ',
        ],
        'description' => [
            'en' => 'Started sharing free programming tutorials on Instagram and YouTube',
            'uz' => 'Instagram va YouTube\'da bepul dasturlash darsliklarini ulashishni boshladim',
            'ru' => 'Начал публиковать бесплатные уроки по программированию в Instagram и YouTube',
            'tj' => 'Мубодилаи дарсҳои ройгони барномасозиро дар Instagram ва YouTube оғоз кардам',
        ],
        'sort_order' => 8,
    ],
    [
        'year' => '2025',
        'title' => [
            'en' => 'Career Growth in Freelancing',
            'uz' => 'Frilansdagi karyera o\'sishi',
            'ru' => 'Карьерный рост во фрилансе',
            'tj' => 'Рушди касбӣ дар фриланс',
        ],
        'description' => [
            'en' => 'Worked with many clients to create real digital solutions',
            'uz' => 'Haqiqiy raqamli yechimlarni yaratish bo\'yicha ko\'plab mijozlar bilan ishladim',
            'ru' => 'Работал со множеством клиентов над созданием реальных цифровых решений',
            'tj' => 'Бо муштариёни сершумор оид ба эҷоди роҳҳалҳои воқеии рақамӣ кор кардам',
        ],
        'sort_order' => 9,
    ],
    [
        'year' => '2026',
        'title' => [
            'en' => 'AsilMedia.org',
            'uz' => 'AsilMedia.org',
            'ru' => 'AsilMedia.org',
            'tj' => 'AsilMedia.org',
        ],
        'description' => [
            'en' => 'AsilMedia.org — a modern website for watching online or downloading Uzbek-translated movies, series and cartoons for free in HD quality',
            'uz' => 'AsilMedia.org — o\'zbek tilidagi tarjima kinolar, seriallar va multfilmlarni bepul, HD sifatda onlayn tomosha qilish yoki yuklab olish imkonini beruvchi zamonaviy sayt',
            'ru' => 'AsilMedia.org — современный сайт, где можно бесплатно смотреть онлайн или скачивать фильмы, сериалы и мультфильмы с узбекским переводом в HD-качестве',
            'tj' => 'AsilMedia.org — сомонаи муосир, ки имкони ройгон ва бо сифати HD онлайн тамошо кардан ё зеркашӣ намудани филмҳо, сериалҳо ва мултфилмҳои бо забони ӯзбекӣ тарҷумашударо медиҳад',
        ],
        'sort_order' => 10,
    ],
]);

       $this->insert('beyonds', ['title', 'description'], [
    [
        'icon' => 'GraduationCap',
        'title' => [
            'en' => 'Mentoring',
            'uz' => 'Ustozlik',
            'ru' => 'Наставничество',
            'tj' => 'Менторинг',
        ],
        'description' => [
            'en' => 'Teaching C++, frontend and backend from scratch to more than 160 students at IT Markaz in Samarkand through structured lessons, real projects and practical support.',
            'uz' => 'Samarqanddagi IT Markazda 160 dan ortiq o\'quvchiga tizimli darslar, haqiqiy loyihalar va amaliy ko\'mak orqali C++, frontend va backendni noldan o\'rgatyapman.',
            'ru' => 'Обучаю более 160 учеников в IT Markaz (Самарканд) C++, фронтенду и бэкенду с нуля через структурированные уроки, реальные проекты и практическую поддержку.',
            'tj' => 'Дар IT Markaz-и Самарқанд ба зиёда аз 160 хонанда C++, frontend ва backend-ро аз сифр тавассути дарсҳои муназзам, лоиҳаҳои воқеӣ ва дастгирии амалӣ меомӯзонам.',
        ],
        'sort_order' => 0,
    ],
    [
        'icon' => 'Code2',
        'title' => [
            'en' => 'Open Source Contributions',
            'uz' => 'Ochiq kodli dasturlarga hissa',
            'ru' => 'Вклад в Open Source',
            'tj' => 'Саҳм дар Open Source',
        ],
        'description' => [
            'en' => 'I actively contribute to GitHub by sharing open repositories, reusable code, templates and development tools.',
            'uz' => 'Ochiq repozitoriylar, qayta ishlatiladigan kodlar, shablonlar va dasturlash asboblarini baham ko\'rish orqali GitHub\'ga faol hissa qo\'shaman.',
            'ru' => 'Активно вношу вклад в GitHub, делясь открытыми репозиториями, многократно используемым кодом, шаблонами и инструментами разработки.',
            'tj' => 'Тавассути мубодилаи репозиторийҳои кушода, коди бор-бор истифодашаванда, қолабҳо ва абзорҳои барномасозӣ дар GitHub фаъолона саҳм мегузорам.',
        ],
        'sort_order' => 1,
    ],
    [
        'icon' => 'HeartHandshake',
        'title' => [
            'en' => 'Ethical Technology',
            'uz' => 'Axloqiy texnologiya',
            'ru' => 'Этичные технологии',
            'tj' => 'Технологияи ахлоқӣ',
        ],
        'description' => [
            'en' => 'I create software that protects user privacy, upholds ethical values and helps solve social problems with good intentions.',
            'uz' => 'Foydalanuvchi maxfiyligini himoya qiluvchi, axloqiy qadriyatlarni qo\'llab-quvvatlovchi va ezgu niyatlar bilan ijtimoiy muammolarni hal qilishga yordam beruvchi dasturlar yarataman.',
            'ru' => 'Создаю программы, которые защищают конфиденциальность пользователей, поддерживают этические ценности и с добрыми намерениями помогают решать социальные проблемы.',
            'tj' => 'Нармафзореро месозам, ки махфияти корбаронро ҳифз мекунад, арзишҳои ахлоқиро дастгирӣ менамояд ва бо ниятҳои нек ба ҳалли мушкилоти иҷтимоӣ кумак мекунад.',
        ],
        'sort_order' => 2,
    ],
    [
        'icon' => 'MessageCircle',
        'title' => [
            'en' => 'Community Engagement',
            'uz' => 'Hamjamiyat bilan ishlash',
            'ru' => 'Работа с сообществом',
            'tj' => 'Кор бо ҷомеа',
        ],
        'description' => [
            'en' => 'I regularly publish tutorials, programming tips and content about a developer\'s life on Instagram and YouTube to teach and inspire others.',
            'uz' => 'Boshqalarga o\'rgatish va ilhomlantirish uchun Instagram va YouTube\'da muntazam darsliklar, dasturlash maslahatlari va dasturchi hayoti haqida kontent nashr etaman.',
            'ru' => 'Регулярно публикую в Instagram и YouTube уроки, советы по программированию и контент о жизни разработчика, чтобы обучать и вдохновлять других.',
            'tj' => 'Барои омӯзонидан ва илҳом бахшидан ба дигарон дар Instagram ва YouTube мунтазам дарсҳо, маслиҳатҳои барномасозӣ ва мундариҷа дар бораи ҳаёти барномасоз нашр мекунам.',
        ],
        'sort_order' => 3,
    ],
    [
        'icon' => 'BookOpenCheck',
        'title' => [
            'en' => 'Lifelong Learning',
            'uz' => 'Uzluksiz ta\'lim',
            'ru' => 'Непрерывное обучение',
            'tj' => 'Омӯзиши муттасил',
        ],
        'description' => [
            'en' => 'I constantly set aside time for learning — from upgrading Laravel to mastering TypeScript — focusing on daily improvement and professional growth.',
            'uz' => 'Laravel\'ni yangilashdan tortib TypeScript\'ni mukammal o\'zlashtirishgacha o\'rganishga doimiy vaqt ajrataman — kunlik rivojlanish va kasbiy o\'sishga e\'tibor qarataman.',
            'ru' => 'Постоянно выделяю время на обучение — от обновления Laravel до глубокого освоения TypeScript — уделяя внимание ежедневному развитию и профессиональному росту.',
            'tj' => 'Ман доимо барои омӯзиш вақт ҷудо мекунам — аз навсозии Laravel то азхуд кардани комили TypeScript — ва ба рушди ҳаррӯза ва касбӣ таваҷҷӯҳ дорам.',
        ],
        'sort_order' => 4,
    ],
]);

$this->insert('services', ['title', 'description', 'tech', 'features'], [
    [
        'category' => 'frontend',
        'icon' => 'Palette',
        'price' => '1 200 000+ UZS',
        'title' => [
            'en' => 'UI/UX Design',
            'uz' => 'UI/UX Dizayn',
            'ru' => 'UI/UX дизайн',
            'tj' => 'Тарроҳии UI/UX',
        ],
        'description' => [
            'en' => 'Clean, modern, pixel-perfect interfaces built with Tailwind CSS and Figma.',
            'uz' => 'Tailwind CSS va Figma yordamida toza, zamonaviy va piksel darajasida aniq interfeyslar.',
            'ru' => 'Чистые, современные и выверенные до пикселя интерфейсы на Tailwind CSS и Figma.',
            'tj' => 'Интерфейсҳои тоза, муосир ва дар сатҳи пиксел дақиқ бо истифода аз Tailwind CSS ва Figma.',
        ],
        'tech' => ['Frontend', 'Figma', 'Tailwind'],
        'features' => [
            'en' => ['Figma to Code', 'Mobile-friendly', 'Tailwind CSS', 'Modern Aesthetic'],
            'uz' => ['Figma\'dan kodga', 'Mobil qurilmalar uchun mos', 'Tailwind CSS', 'Zamonaviy estetika'],
            'ru' => ['Из Figma в код', 'Удобно на мобильных устройствах', 'Tailwind CSS', 'Современная эстетика'],
            'tj' => ['Аз Figma ба код', 'Мувофиқ ба дастгоҳҳои мобилӣ', 'Tailwind CSS', 'Эстетикаи муосир'],
        ],
        'sort_order' => 0,
    ],
    [
        'category' => 'backend',
        'icon' => 'Network',
        'price' => '1 800 000+ UZS',
        'title' => [
            'en' => 'Custom API Services',
            'uz' => 'Maxsus API xizmatlari',
            'ru' => 'Индивидуальные API-сервисы',
            'tj' => 'Хизматрасониҳои API-и махсус',
        ],
        'description' => [
            'en' => 'Secure and scalable RESTful APIs for mobile and web applications.',
            'uz' => 'Mobil va veb ilovalar uchun xavfsiz va kengaytiriladigan RESTful API-lar.',
            'ru' => 'Безопасные и масштабируемые RESTful API для мобильных и веб-приложений.',
            'tj' => 'API-ҳои бехатар ва васеъшавандаи RESTful барои барномаҳои мобилӣ ва веб.',
        ],
        'tech' => [],
        'features' => [
            'en' => ['Custom Routes', 'JWT', 'Secure Tokens', 'Error Handling'],
            'uz' => ['Maxsus marshrutlar', 'JWT', 'Xavfsiz tokenlar', 'Xatoliklarni boshqarish'],
            'ru' => ['Собственные маршруты', 'JWT', 'Безопасные токены', 'Обработка ошибок'],
            'tj' => ['Масирҳои махсус', 'JWT', 'Токенҳои бехатар', 'Коркарди хатогиҳо'],
        ],
        'sort_order' => 1,
    ],
    [
        'category' => 'backend',
        'icon' => 'ShieldCheck',
        'price' => '2 500 000+ UZS',
        'title' => [
            'en' => 'Security Optimization',
            'uz' => 'Xavfsizlikni optimallashtirish',
            'ru' => 'Оптимизация безопасности',
            'tj' => 'Оптимизатсияи амният',
        ],
        'description' => [
            'en' => 'Hardening web applications with secure headers, validation and protection against attacks.',
            'uz' => 'Xavfsiz sarlavhalar, tekshiruvlar va hujumlardan himoya qilish bilan veb-ilovalarni kuchaytirish.',
            'ru' => 'Усиление защиты веб-приложений с помощью безопасных заголовков, проверок (валидации) и защиты от атак.',
            'tj' => 'Мустаҳкам кардани барномаҳои веб бо сарлавҳаҳои бехатар, санҷишҳо (валидатсия) ва ҳимоя аз ҳамлаҳо.',
        ],
        'tech' => [],
        'features' => [
            'en' => ['Validation', 'Rate Limiting', 'Secure Headers', 'CSRF/XSS Protection'],
            'uz' => ['Validatsiya', 'So\'rovlar cheklovi', 'Xavfsiz sarlavhalar', 'CSRF/XSS himoyasi'],
            'ru' => ['Валидация', 'Ограничение частоты запросов', 'Безопасные заголовки', 'Защита от CSRF/XSS'],
            'tj' => ['Валидатсия', 'Маҳдуд кардани дархостҳо', 'Сарлавҳаҳои бехатар', 'Ҳимоя аз CSRF/XSS'],
        ],
        'sort_order' => 2,
    ],
    [
        'category' => 'frontend',
        'icon' => 'Monitor',
        'price' => '2 500 000+ UZS',
        'title' => [
            'en' => 'Basic Frontend Website',
            'uz' => 'Oddiy Frontend sayt',
            'ru' => 'Базовый Frontend-сайт',
            'tj' => 'Сомонаи оддии Frontend',
        ],
        'description' => [
            'en' => 'A responsive 3-page static website, perfect for portfolios and personal brands.',
            'uz' => 'Portfoliolar va shaxsiy brendlar uchun mukammal bo\'lgan moslashuvchan (responsive) 3 sahifali statik veb-sayt.',
            'ru' => 'Адаптивный статический сайт из 3 страниц — идеальный вариант для портфолио и личных брендов.',
            'tj' => 'Сомонаи статикии мутобиқшаванда аз 3 саҳифа, ки барои портфолио ва брендҳои шахсӣ комилан мувофиқ аст.',
        ],
        'tech' => ['Frontend', 'HTML', 'CSS', 'JavaScript'],
        'features' => [
            'en' => ['3 Pages', 'Responsive Design', 'SEO-friendly', 'Speed Optimized'],
            'uz' => ['3 ta sahifa', 'Moslashuvchan dizayn', 'SEO uchun qulay', 'Tezlik bo\'yicha optimallashtirilgan'],
            'ru' => ['3 страницы', 'Адаптивный дизайн', 'Удобно для SEO', 'Оптимизация по скорости'],
            'tj' => ['3 саҳифа', 'Тарроҳии мутобиқшаванда', 'Мувофиқ ба SEO', 'Оптимизатсияшуда аз рӯи суръат'],
        ],
        'sort_order' => 3,
    ],
    [
        'category' => 'special',
        'icon' => 'Bot',
        'price' => '3 500 000+ UZS',
        'title' => [
            'en' => 'Chatbot Development',
            'uz' => 'Chatbot yaratish',
            'ru' => 'Разработка чат-ботов',
            'tj' => 'Таҳияи чатботҳо',
        ],
        'description' => [
            'en' => 'Telegram or web chatbots for automating support, orders and interaction.',
            'uz' => 'Qo\'llab-quvvatlash, buyurtmalar va o\'zaro aloqani avtomatlashtirish uchun Telegram yoki veb chatbotlar.',
            'ru' => 'Telegram- или веб-чат-боты для автоматизации поддержки, заказов и взаимодействия.',
            'tj' => 'Чатботҳои Telegram ё веб барои автоматикунонии дастгирӣ, фармоишҳо ва муошират.',
        ],
        'tech' => [],
        'features' => [
            'en' => ['Telegram Bot', 'Web Chatbot', 'Webhook', 'AI Logic'],
            'uz' => ['Telegram bot', 'Veb Chatbot', 'Webhook', 'AI mantiq'],
            'ru' => ['Telegram-бот', 'Веб-чатбот', 'Webhook', 'ИИ-логика'],
            'tj' => ['Боти Telegram', 'Чатботи веб', 'Webhook', 'Мантиқи AI'],
        ],
        'sort_order' => 4,
    ],
    [
        'category' => 'frontend',
        'icon' => 'Layout',
        'price' => '5 000 000+ UZS',
        'title' => [
            'en' => 'Advanced Frontend Website',
            'uz' => 'Kengaytirilgan Frontend sayt',
            'ru' => 'Продвинутый Frontend-сайт',
            'tj' => 'Сомонаи пешрафтаи Frontend',
        ],
        'description' => [
            'en' => 'A multi-page frontend website with animations, effects and premium design.',
            'uz' => 'Animatsiyalar, effektlar va premium dizaynga ega ko\'p sahifali frontend sayt.',
            'ru' => 'Многостраничный frontend-сайт с анимациями, эффектами и премиальным дизайном.',
            'tj' => 'Сомонаи бисёрсаҳифагии frontend бо аниматсияҳо, эффектҳо ва тарҳи премиум.',
        ],
        'tech' => ['Frontend', 'React', 'Framer Motion'],
        'features' => [
            'en' => ['Animations', 'Custom Layouts', 'Scroll Effects', 'Multi-page'],
            'uz' => ['Animatsiyalar', 'Maxsus maketlar', 'Scroll effektlari', 'Ko\'p sahifali'],
            'ru' => ['Анимации', 'Индивидуальные макеты', 'Эффекты прокрутки', 'Многостраничность'],
            'tj' => ['Аниматсияҳо', 'Тарҳбандии махсус', 'Эффектҳои скролл', 'Бисёрсаҳифагӣ'],
        ],
        'sort_order' => 5,
    ],
    [
        'category' => 'fullstack',
        'icon' => 'Server',
        'price' => '6 000 000+ UZS',
        'title' => [
            'en' => 'Dynamic Website',
            'uz' => 'Dinamik veb-sayt',
            'ru' => 'Динамический сайт',
            'tj' => 'Сомонаи динамикӣ',
        ],
        'description' => [
            'en' => 'A fully dynamic website built with Laravel and React for an interactive experience.',
            'uz' => 'Interaktiv tajriba uchun Laravel va React yordamida to\'liq dinamik veb-sayt.',
            'ru' => 'Полностью динамический сайт на Laravel и React для интерактивного взаимодействия.',
            'tj' => 'Сомонаи комилан динамикӣ бо Laravel ва React барои таҷрибаи интерактивӣ.',
        ],
        'tech' => ['FullStack', 'Laravel', 'React'],
        'features' => [
            'en' => ['Laravel + React', 'Interactive UI', 'Form Handling', 'Database-Connected'],
            'uz' => ['Laravel + React', 'Interaktiv UI', 'Formalarni qayta ishlash', 'Ma\'lumotlar bazasiga ulangan'],
            'ru' => ['Laravel + React', 'Интерактивный UI', 'Обработка форм', 'Подключение к БД'],
            'tj' => ['Laravel + React', 'UI-и интерактивӣ', 'Коркарди формаҳо', 'Пайваст ба пойгоҳи додаҳо'],
        ],
        'sort_order' => 6,
    ],
    [
        'category' => 'backend',
        'icon' => 'Database',
        'price' => '7 500 000+ UZS',
        'title' => [
            'en' => 'Backend + Admin Panel',
            'uz' => 'Backend + Admin panel',
            'ru' => 'Backend + админ-панель',
            'tj' => 'Backend + панели админ',
        ],
        'description' => [
            'en' => 'A custom backend system with an admin dashboard, user management and a secure API.',
            'uz' => 'Boshqaruv paneli, foydalanuvchilarni boshqarish va xavfsiz API bilan maxsus backend tizimi.',
            'ru' => 'Индивидуальная backend-система с панелью управления, управлением пользователями и безопасным API.',
            'tj' => 'Системаи махсуси backend бо панели идоракунӣ, идоракунии корбарон ва API-и бехатар.',
        ],
        'tech' => [],
        'features' => [
            'en' => ['Admin Panel', 'User Management', 'JWT Authorization', 'REST API'],
            'uz' => ['Admin panel', 'Foydalanuvchilarni boshqarish', 'JWT avtorizatsiya', 'REST API'],
            'ru' => ['Админ-панель', 'Управление пользователями', 'JWT-авторизация', 'REST API'],
            'tj' => ['Панели админ', 'Идоракунии корбарон', 'Авторизатсияи JWT', 'REST API'],
        ],
        'sort_order' => 7,
    ],
    [
        'category' => 'fullstack',
        'icon' => 'Code',
        'price' => '11 000 000+ UZS',
        'title' => [
            'en' => 'Full-Stack Application',
            'uz' => 'Full-Stack ilova',
            'ru' => 'Full-Stack приложение',
            'tj' => 'Барномаи Full-Stack',
        ],
        'description' => [
            'en' => 'A comprehensive application with complete frontend and backend logic — ideal for startups.',
            'uz' => 'To\'liq frontend va backend mantig\'iga ega keng qamrovli ilova — startaplar uchun ideal.',
            'ru' => 'Комплексное приложение с полной frontend- и backend-логикой — идеально для стартапов.',
            'tj' => 'Барномаи фарогир бо мантиқи пурраи frontend ва backend — барои стартапҳо идеалӣ.',
        ],
        'tech' => [],
        'features' => [
            'en' => ['Complete Workflow', 'Laravel + React', 'Advanced Authorization', 'Scalable Database'],
            'uz' => ['To\'liq oqim', 'Laravel + React', 'Murakkab avtorizatsiya', 'Kengaytiriladigan ma\'lumotlar bazasi'],
            'ru' => ['Полный цикл', 'Laravel + React', 'Продвинутая авторизация', 'Масштабируемая БД'],
            'tj' => ['Ҷараёни пурра', 'Laravel + React', 'Авторизатсияи пешрафта', 'Пойгоҳи додаи васеъшаванда'],
        ],
        'sort_order' => 8,
    ],
]);

$this->insert('process_steps', ['title', 'description'], [
    [
        'step' => '01',
        'title' => [
            'en' => 'Discovery',
            'uz' => 'O\'rganish',
            'ru' => 'Изучение',
            'tj' => 'Омӯзиш',
        ],
        'description' => [
            'en' => 'Understanding your requirements, goals and target audience',
            'uz' => 'Sizning talablaringiz, maqsadlaringiz va maqsadli auditoriyangizni tushunish',
            'ru' => 'Понимание ваших требований, целей и целевой аудитории',
            'tj' => 'Фаҳмидани талабот, ҳадафҳо ва аудиторияи мақсадноки шумо',
        ],
        'sort_order' => 0,
    ],
    [
        'step' => '02',
        'title' => [
            'en' => 'Planning',
            'uz' => 'Rejalashtirish',
            'ru' => 'Планирование',
            'tj' => 'Банақшагирӣ',
        ],
        'description' => [
            'en' => 'Creating a detailed project roadmap and technical architecture',
            'uz' => 'Batafsil loyiha xaritasi va texnik arxitekturani yaratish',
            'ru' => 'Создание подробной дорожной карты проекта и технической архитектуры',
            'tj' => 'Таҳияи харитаи роҳи муфассали лоиҳа ва меъмории техникӣ',
        ],
        'sort_order' => 1,
    ],
    [
        'step' => '03',
        'title' => [
            'en' => 'Development',
            'uz' => 'Ishlab chiqish',
            'ru' => 'Разработка',
            'tj' => 'Таҳия',
        ],
        'description' => [
            'en' => 'Building your solution with clean, scalable and easily maintainable code',
            'uz' => 'Toza, kengaytiriladigan va oson qo\'llab-quvvatlanadigan kod bilan yechimingizni yaratish',
            'ru' => 'Создание вашего решения на основе чистого, масштабируемого и легко поддерживаемого кода',
            'tj' => 'Сохтани ҳалли шумо бо коди тоза, васеъшаванда ва ба осонӣ дастгиришаванда',
        ],
        'sort_order' => 2,
    ],
    [
        'step' => '04',
        'title' => [
            'en' => 'Delivery',
            'uz' => 'Topshirish',
            'ru' => 'Передача проекта',
            'tj' => 'Супоридани лоиҳа',
        ],
        'description' => [
            'en' => 'Testing, deployment and ongoing support to ensure success',
            'uz' => 'Muvaffaqiyatni ta\'minlash uchun sinovdan o\'tkazish, joylashtirish va doimiy qo\'llab-quvvatlash',
            'ru' => 'Тестирование, развёртывание и постоянная поддержка для обеспечения успеха',
            'tj' => 'Санҷиш, ба кор андохтан (деплой) ва дастгирии доимӣ барои таъмини муваффақият',
        ],
        'sort_order' => 3,
    ],
]);


        Schema::enableForeignKeyConstraints();
    }

    /**
     * Jadvalni tozalab, qatorlarni qayta yozadi.
     * $jsonColumns — massiv/obyekt sifatida berilgan va JSON ustunga yoziladigan maydonlar.
     */
    private function insert(string $table, array $jsonColumns, array $rows): void
    {
        DB::table($table)->truncate();

        $now = now();

        $payload = array_map(function (array $row) use ($jsonColumns, $now) {
            foreach ($jsonColumns as $column) {
                $row[$column] = json_encode($row[$column], JSON_UNESCAPED_UNICODE);
            }

            return $row + ['created_at' => $now, 'updated_at' => $now];
        }, $rows);

        foreach (array_chunk($payload, 50) as $chunk) {
            DB::table($table)->insert($chunk);
        }

        $this->command->info(sprintf('  %-16s %d ta', $table, count($rows)));
    }
}
